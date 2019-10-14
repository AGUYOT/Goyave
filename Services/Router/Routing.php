<?php

namespace Services\Router;

use Controllers\BaseController;

  /**
   * Routing
   * Call the good controller according to the path given by the user.
   * 
   * @package    Router
   * @author     alexguillon
   */
class Routing
{
    /**
       * 
       * Get the path contacted and call the controller adapted. 
       * If the path does not exist, we call the error controller.
       *
       * @return integer
       */
    function handle()
    {
        $json = file_get_contents('../Services/Router/routes.json');
        $conf = file_get_contents('../Config/config.json');
        $conf_data = json_decode($conf, true);
        $link = substr($_SERVER['REQUEST_URI'], strlen($conf_data["base_path"])); 
        $json_data = json_decode($json,true);
        $routeFound = 0;
        foreach ($json_data["routes"] as $route) {
            if($route["path"] == $link){
                $routeFound = 1;
                $actionArray = explode(":",$route["action"]);
                $action = $actionArray[1];
                $controllerName = "\Controllers\\".$actionArray[0];
                $controller = new $controllerName();
                $controller->$action();
            }
        }
        if($routeFound == 0){
            $controllerName = "\Controllers\\ErrorController";
            $controller = new $controllerName();
            $controller->index();
        }   
        return $routeFound;
    }
}