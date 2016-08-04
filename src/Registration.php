<?php

namespace Wambo\Checkout;

class Registration implements ModuleBootstrapInterface
{
    /**
     * Register the Frontend module.
     *
     * @param App $app
     */
    public function __construct(App $app)
    {
        $this->configureDI($app);
        $this->registerRoutes($app);
    }
    /**
     * Register routes in the slim app.
     *
     * @param App $app
     */
    private function registerRoutes(App $app)
    {
        // overview
        $app->get('/', ['CatalogController', 'overview']);
        // product details
        $app->get('/product/{slug}', ['CatalogController', 'productDetails']);
    }
    /**
     * Configure the dependency injection container
     *
     * @param App $app
     */
    private function configureDI(App $app)
    {
        $container = $app->getContainer();
    }
}