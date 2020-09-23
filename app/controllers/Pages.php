<?php
class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'title'=>'Welcome'
        ];
        
        $this->loadView('pages/index', $data);
    }

    public function about()
    {
        $this->loadView('pages/about');
    }
}
