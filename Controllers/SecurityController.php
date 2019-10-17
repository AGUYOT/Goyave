<?php

namespace Controllers;

use Controllers\BaseController;
use Services\Security\Auth;

class SecurityController extends BaseController
{
    function index(){
        $this->render('login.html.twig', []);
    }

    function login(){
        $auth = new Auth();
        $auth->login();
        header('Location: http://localhost/goyave/public/index.php/home');
        exit();
    }
    function logout(){
        $auth = new Auth();
        $auth->logout();
        header('Location: http://localhost/goyave/public/index.php/home');
    }
}