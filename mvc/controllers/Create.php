<?php 
class Create extends Controller {
    function renderView() : void {
        $this->view("viewFull", [
            "Page" => "create",
            "Title" => "Create",
            "CssFiles" => ["global", "create"],
            "HeaderTitle" => "Create New Post",
            "script" => ["create"]
        ]);
    }
}