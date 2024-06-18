<?php
class Router
{
    public static function route()
    {
        $controllerName = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : 'ArticleConfection';
        $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';
        
    
        $controllerClass = $controllerName . 'Controller';
        
  
        $controllerFile = "../controllers/" . $controllerClass . ".php";
        
        if (file_exists($controllerFile)) {
            require_once($controllerFile);

            if (class_exists($controllerClass)) {
                $controller = new $controllerClass();

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

    public static function error404($message)
    {
        http_response_code(404);
        echo "<h1>404 - Not Found</h1>";
        echo "<p>$message</p>";
    }
}
