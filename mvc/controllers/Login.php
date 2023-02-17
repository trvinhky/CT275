<?php 
class Login extends Controller {
    function renderView() : void {
        $this->view("viewForm", [
            "Page" => "login",
            "Title" => "Login",
            "CssFiles" => ["login"]
        ]);
    }
}