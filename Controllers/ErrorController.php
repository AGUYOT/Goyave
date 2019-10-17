<?php

namespace Controllers;

use Controllers\BaseController;

/**
   * ErrorController
   * Controller call every time an error occurs.
   * 
   * @package    ErrorController
   * @author     alexguillon
*/

class ErrorController extends BaseController
{
    function index(){
        $this->render('error.html.twig', []);
    }

}