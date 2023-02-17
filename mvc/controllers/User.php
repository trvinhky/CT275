<?php 
class User extends Controller {
    function renderView() : void {
        $this->view("viewFull", [
            "Page" => "user",
            "Title" => "User",
            "CssFiles" => ["global", "user"],
            "HeaderTitle" => "User Infor",
        ]);
    }
}