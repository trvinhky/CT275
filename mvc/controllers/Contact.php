<?php 
class Contact extends Controller {
    function renderView() : void {
        $this->view("viewFull", [
            "Page" => "contact",
            "Title" => "Contact",
            "CssFiles" => ["global", "contact"],
            "HeaderTitle" => "Let's Connect",
        ]);
    }
}