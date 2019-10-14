<?php

namespace Controllers;

  /**
   * AbstractController
   * Interface with generic methods for a controller.
   * 
   * @package    AbstractController
   * @author     alexguillon
   */

interface AbstractController
{
    function index();
    function render($view, $data);
}