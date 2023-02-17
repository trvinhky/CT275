<?php 
class Categories extends Controller {
    function renderView() : void {
        $this->view("viewFull", [
            "Page" => "categories",
            "Title" => "Categories",
            "CssFiles" => ["global", "categories"],
            "HeaderTitle" => "Categories",
        ]);
    }
}