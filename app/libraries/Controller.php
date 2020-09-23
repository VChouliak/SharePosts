<?php

class Controller {

    public function loadModel($model){
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function loadView($view, $data = []){
        if(file_exists('../app/views/' . $view . '.php')){
            require_once '../app/views/' . $view . '.php';
        }
        else{
            die('View dooes not exists');
        }
    }
}