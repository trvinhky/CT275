<?php 
class Detail extends Controller {
    function renderView() : void {
        $this->view("viewFull", [
            "Page" => "detail",
            "Title" => "Detail",
            "CssFiles" => ["global", "detail"],
        ]);
    }
}