<?php

namespace App\Core;

use App\Controllers\ArticleConfectionController;

class Router
{
    public static function route()
    {
        $controllerName = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : 'ArticleConfection';
        $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';
        
        $controllerClass =  $controllerName . 'Controller';
        
        $controllerFile = __DIR__ . "/../controllers/" . $controllerClass . ".php";
        
        if (file_exists($controllerFile)) {
            require $controllerFile;

            if ($controllerClass) {
                $controller = new ArticleConfectionController();

                if (method_exists($controller, $action)) {
                    $controller->{$action}();
                } else {
                    self::error404("Action '$action' not found in controller '$controllerClass'");
                }
            } else {
                self::error404("Controller class '$controllerClass' not found");
            }
        } else {
            self::error404("Controller file '$controllerFile' not found");
        }
    }

    public static function error404(string $message)
    {
        http_response_code(404);
        include __DIR__ . '/../../views/errors/404.html.php';
    }
}
