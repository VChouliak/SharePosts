<?php
class Users extends Controller
{
    public function __construct(){

    }

    public function register(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        }
        else{
            $data = [
                'name'=>'',
                'email'=>'',
                'password'=>'',
                'confirm_password'=>'',
                'name_err'=>'',
                'email_err'=>'',
                'password_err'=>'',
                'confirm_password_err'=>'',
            ];

            $this->loadView('users/register', $data);
        }
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        }
        else{
            $data = [
                
                'email'=>'',
                'password'=>'',            
                'name_err'=>'',                
                'password_err'=>'',
                
            ];

            $this->loadView('users/login', $data);
        }
    }
}
