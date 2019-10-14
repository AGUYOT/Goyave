<?php

namespace Controllers;

use Controllers\AbstractController;

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

    function render($view)
    {
        require($this->baseView.$view);
    }
}