<?php 
class About extends Controller {
    function renderView() : void {
        $this->view("viewFull", [
            "Page" => "about",
            "Title" => "About",
            "CssFiles" => ["global", "about"],
            "HeaderTitle" => "We love writing",
        ]);
    }
}