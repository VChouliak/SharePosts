<?php
class Post extends Controller {
    public function index(){
        $data = [];
        $this->loadView("posts/index", $data);
    }
}