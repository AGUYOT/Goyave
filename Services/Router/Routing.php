<?php

namespace Services\Router;

use Controllers\BaseController;

class Routing
{
    function handle()
    {
 
        $json = file_get_contents('../Services/Router/routes.json');
        $link = substr($_SERVER['REQUEST_URI'], 25); 
        $json_data = json_decode($json,true);
        foreach ($json_data["routes"] as $route) {
            $actionArray = explode(":",$route["action"]);
            $controller = $actionArray[0];
            $action = $actionArray[1];
            echo $controller . " " . $action . "\n";
        }   
    }
}