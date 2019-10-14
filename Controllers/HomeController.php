<?php

namespace Controllers;

use Controllers\BaseController;

class HomeController extends BaseController
{
    
    function index(){
        $this->render('home.php');
    }
}