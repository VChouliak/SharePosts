<?php
class Posts extends Controller {

    public function __construct()
    {
        if(!isLoggedIn()){
            redirect('users/login');
        }
        $this->postModel = $this->loadModel('Post');
    }
    public function index(){
        $posts = $this->postModel->getPosts();
        $data = [
            'posts' => $posts
        ];

        $this->loadView("posts/index", $data);
    }

    
}