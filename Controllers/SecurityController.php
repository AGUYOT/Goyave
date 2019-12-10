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

        $conf = file_get_contents('../Config/config.json');
        $conf_data = json_decode($conf, true);
        $base_uri = $conf_data["base_uri"]; 
        header('Location: '.$base_uri.'/home');
        exit();
    }
    function logout(){
        $auth = new Auth();
        $auth->logout();

        $conf = file_get_contents('../Config/config.json');
        $conf_data = json_decode($conf, true);
        $base_uri = $conf_data["base_uri"]; 
        header('Location: '.$base_uri.'/home');
    }
}