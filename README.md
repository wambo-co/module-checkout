# module-checkout

https://github.com/sebastianbergmann/state

[NewOrderState] -- a new order
 - ship() : ShippedOrder 
 - pay() : PaiedOrder
 - cancel() : CanceledOrderState

[ShippedOrderState]
 - pay() : PaidOrderState
 - close() : ClosedOrderState
 
[PaidOrderState]
 - ship() : ShippedOrder
 - close() : ClosedOrderState
 
[CanceledOrderState]

[ClosedOrderState]
 - return() : ClosedOrderState
 - credit() : ClosedOrderState
 
 
<?xml version="1.0" encoding="UTF-8"?>
<specification>
 <configuration>
  <class         name="Order"/>
  <interface     name="OrderState"/>
  <abstractClass name="AbstractOrderState"/>
 </configuration>
 <states>
  <state name="NewOrderState"   query="isNew"/>
  <state name="ShippedOrderState" query="isShipped"/>
  <state name="PaidOrderState" query="isPaid"/>
  <state name="CanceledOrderState" query="isCanceled"/>
  <state name="ClosedOrderState" query="isClosed"/>
 </states>
 <transitions>
  <transition from="NewOrderState"      to="ShippedOrderState"      operation="ship"/>
  <transition from="NewOrderState"      to="PaidOrderState"         operation="pay"/>
  <transition from="NewOrderState"      to="CanceledOrderState"     operation="cancel"/>
  <transition from="ShippedOrderState"  to="PaidOrderState"         operation="pay"/>
  <transition from="ShippedOrderState"  to="ClosedOrderState"       operation="close"/>
  <transition from="PaidOrderState"     to="ShippedOrder"           operation="ship"/>
  <transition from="PaidOrderState"     to="ClosedOrderState"       operation="close"/>
  <transition from="ClosedOrderState"   to="ClosedOrderState"       operation="return"/>
  <transition from="ClosedOrderState"   to="ClosedOrderState"       operation="credit"/>
 </transitions>
 <operations>
  <operation name="ship"    allowed="canBeShipped"  disallowed="cannotBeShipped"/>
  <operation name="pay"     allowed="canBePaid"   disallowed="cannotBePaid"/>
  <operation name="cancel"  allowed="canBeCanceled"   disallowed="cannotBeCanceled"/>
  <operation name="close"   allowed="canBeClosed" disallowed="cannotBeClosed"/>
  <operation name="return"  allowed="canBeReturned" disallowed="cannotBeReturned"/>
  <operation name="credit"  allowed="canBeCredited" disallowed="cannotBeCredited"/>
 </operations>
</specification>
