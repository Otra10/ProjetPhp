<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\Utilisateur;

class AuthController extends Controller
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $userModel = new Utilisateur();
            $user = $userModel->authenticate($username, $password);

            $this->renderView('', ['user' => $user]);

            if ($user) {
                $_SESSION['user'] = $user;
                header('Location: /dashboard');
            } else {
                $error = 'Nom d\'utilisateur ou mot de passe incorrect';
                include 'views/auth/login.php';
            }
        } else {
            include 'views/auth/login.php';
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: /login');
    }
}
