<?php

namespace App\Controllers;

use App\Model\Utilisateur;

class AuthController
{
    public function login()
    {
        $utilisateur=new Utilisateur();
   
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $userConnect=$utilisateur->authenticate($username,$password);
            
            if ($userConnect!==false) {
                
                $_SESSION['user'] = $userConnect;
                
                header('Location: ' . webRoot . '/?controller=Home');
                
            } else {
               
                $error = 'Nom d\'utilisateur ou mot de passe incorrect';
                require_once("../views/auth/login.php");
            }

        } else {
           
            require_once("../views/auth/login.php");
            
        }
    }

    public function logout()
    {
        session_start();
        $_SESSION = array();
        session_destroy();
        header('Location: ' . webRoot . '/?controller=Auth&action=login');
    }
}
