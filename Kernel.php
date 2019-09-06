<?php

use Services\Router\Routing;

class Kernel
{
    public function handle()
    {
        $router = new Routing();
        $router->handle();
    }
}