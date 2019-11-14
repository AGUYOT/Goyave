<?php

namespace Controllers;

use Controllers\AbstractController;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Services\Validation\ValidationDisplay;

/**
   * BaseController
   * Generic methods implemented reusable for the controllers.
   * 
   * @package    BaseController
   * @author     alexguillon
   */

class BaseController implements AbstractController
{
    private $baseView = "../View/";

    function index()
    {
        $this->render('home.html.twig', []);
    }

    function render($view, $data)
    {
        $conf = file_get_contents('../Config/config.json');
        $conf_data = json_decode($conf, true);
        $base_uri = $conf_data["base_uri"]; 
        $loader = new FilesystemLoader($this->baseView);
        $twig = new Environment($loader);
        $data['base_uri'] = $base_uri;        
        ValidationDisplay::init();
        echo $twig->render($view, $data);
        ValidationDisplay::render();
    }
}