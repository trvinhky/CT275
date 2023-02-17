<?php 
class Register extends Controller {
    function renderView() : void {
        $this->view("viewForm", [
            "Page" => "register",
            "Title" => "Register",
            "CssFiles" => ["login"]
        ]);
    }
}