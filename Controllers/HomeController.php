<?php

namespace Controllers;

use Controllers\BaseController;
use Services\Security\Auth;

class HomeController extends BaseController
{
    function index(){
        $auth = new Auth();
        $this->render('home.html.twig', ['isAuthenticated' => $auth->isAuthenticated()]);
    }
}