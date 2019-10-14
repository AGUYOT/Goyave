<?php

namespace Services\Router;

use Controllers\BaseController;

class Routing
{
    function handle()
    {
        $controller = new BaseController();
        $controller->index();
    }
}