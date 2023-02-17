<?php 
class Home extends Controller {
    function renderView() : void {
        $this->view("viewFull", [
            "Page" => "home",
            "Title" => "Home",
            "CssFiles" => ["global", "home"],
            "HeaderTitle" => "Let's do it together.",
            "Description" => "We travel the world in search of stories. Come along for the
            ride."
        ]);
    }
}