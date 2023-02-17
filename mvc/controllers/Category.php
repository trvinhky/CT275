<?php 
class Category extends Controller {
    function renderView() : void {
        $this->view("viewFull", [
            "Page" => "category",
            "Title" => "Category",
            "CssFiles" => ["global"],
            "HeaderTitle" => "Nature",
            "SupTop" => "Showing all posts in"
        ]);
    }
}