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
        if($auth->isAuthenticated())
        {
            var_dump("On est authentifié !");
        }
        $router->handle();
    }
}