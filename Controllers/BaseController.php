<?php

namespace Controllers;

use Controllers\AbstractController;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class BaseController implements AbstractController
{
    private $baseView = "../View/";

    function index()
    {
        $this->render('index.html', ['name' => 'Jean-José']);
    }

    function render($view, $data)
    {
        $loader = new FilesystemLoader($baseView);
        $twig = new Environment($loader);
        echo $twig->render($view, $data);
    }
}