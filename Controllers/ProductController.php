<?php

namespace Controllers;

use Controllers\BaseController;
use Services\Security\Auth;

class ProductController extends BaseController
{
    function index(){
        $auth = new Auth();
        $this->render('product.html.twig', ['isAuthenticated' => $auth->isAuthenticated()]);
    }
}