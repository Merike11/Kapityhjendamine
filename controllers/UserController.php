<?php

class UserController
{
    public function index()
    {
        return view ('login');
    }
    public function login()
    {
        $username = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);

        if (isset($action) && $action == 'login'){
            $error = [];
            if(empty($username)){
                $error['username'] = "Kasutajanimi ei ole lubatud";
            }
            if(empty($password)){
                $error["password"] = 'Salasõna ei ole lubatud';
            }
            if(empty($error)){
                //authenticate user
                
                $user= $this->auth($username, $password);
            }
            if($user) {
                echo 'Registreeri kasutaja!';
            } 
            else {
                echo "Midagi läks valesti!";
            }
        }
        print_r($_SESSION);
        print_r($_REQUEST);
        print_r($error);
    }
    public function auth ($username, $password){
        global $app;
        $user = $app['database']->getUserByEmail('user', $username);
        if (!empty($user)){
                   
            if ($user->password === $password){
                return $user;
            }
            
        }

        return false;
    }     
}