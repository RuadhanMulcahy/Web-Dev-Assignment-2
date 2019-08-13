<?php 
    class Bootstrap {
        
        function __construct() {
            
            $url = isset($_GET['url']) ? $_GET['url'] : null;
            $url = rtrim($url, '/');
            $url = explode('/', $url);

            if(empty($url[0])) {
                
                require 'controllers/index.php';
                $controller = new Index();
                $controller->index();
                return false;
            } 

            $file = 'controllers/' . $url[0] . '.php';

            if (file_exists($file)) {

                require $file;
            } else {

                require 'controllers/errors.php'; 
                $controller = new errors();
                $controller->index();
                return false;
            }
            
            #echo($url[0]);
            $controller = new $url[0];
            $controller->index();

            if (isset($url[2])) {
                
                $controller->{$url[1]}($url[2])->index();
                return false;
            }
            else {

                if (isset($url[1])) {
                    
                    $controller->{$url[1]}();
                    return false;
                }
            }
        }
    }
?>