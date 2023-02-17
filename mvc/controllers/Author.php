<?php 
class Author extends Controller {
    function renderView() : void {
        $this->view("viewFull", [
            "Page" => "author",
            "Title" => "Author",
            "CssFiles" => ["global", "author"],
        ]);
    }
}