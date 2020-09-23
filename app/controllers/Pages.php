<?php
class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->loadView('pages/index');
    }

    public function about()
    {
        $this->loadView('pages/about');
    }
}
