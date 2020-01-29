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
            
                if($user) {
                    
                    $_SESSION["is_logged_in"] = true;

                    if($user->role === 'admin'){
                        $_SESSION["is_admin"] = true;                     
                                                      
                    }
                                   
                } 
                else {
                    echo "Midagi läks valesti!";
                }
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
    public function logout()
    {
        session_destroy();
        header('Location: /login');
    }
    public function register() {
        return view('register');
    }
    public function registerSubmit() {
        $username = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        global $app;
        $user = $app['database']->getUserByEmail('user', $username);
        var_dump($user);
    }

}