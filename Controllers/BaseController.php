<?php

namespace Controllers;

use Controllers\AbstractController;

class BaseController implements AbstractController
{
    private $baseView = "../View/";

    function index()
    {
        $this->render('home.php');
    }

    function render($view)
    {
        require($this->baseView.$view);
    }
}