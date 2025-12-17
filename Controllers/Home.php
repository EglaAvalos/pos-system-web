<?php
class Home extends Controller{
    public function index(){
        $this->views->get_view($this,"index") ;
    }
}

?>