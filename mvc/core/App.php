<?php 

class App{
    protected $controller = "Home";
    protected $action = "renderView";
    protected $params = [];

    function __construct() {
 
        $arrayURL = $this->UrlProcess();
        // Controller
        if( file_exists("./mvc/controllers/".$arrayURL[0].".php") ){
            $this->controller = $arrayURL[0];
            unset($arrayURL[0]);
        }

        require_once "./mvc/controllers/".$this->controller.".php";
        $this->controller = new $this->controller;

        // Action
        if(isset($arrayURL[1])){
            var_dump($arrayURL[1]);
            die;
            if( method_exists( $this->controller , $arrayURL[1]) ){
                $this->action = $arrayURL[1];
            }
            unset($arrayURL[1]);
        }

        // Params
        $this->params = $arrayURL?array_values($arrayURL):[];

        call_user_func_array([$this->controller, $this->action], $this->params );

    }

    function UrlProcess() : array {
        if( isset($_GET["url"]) ) {
            return explode("/", trim($_GET["url"]));
            // explode: string to array by /
        }
        return [$this->controller];
    }
}
?>