<?php

use Services\Router\Routing;
use Services\Security\Auth;

class Kernel
{
    public function handle()
    {        
        $router = new Routing();
        $auth = new Auth();
        $auth->login();
        $router->handle();
    }
}