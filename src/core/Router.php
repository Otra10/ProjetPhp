<?php

namespace App\Core;

use App\Controllers\ApprovisionnementController;
use App\Controllers\ArticleConfectionController;
use App\Controllers\ArticleVenteController;
use App\Controllers\CategorieController;
use App\Controllers\ClientController;
use App\Controllers\FournisseurController;
use App\Controllers\VenteController;
use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\UtilisateurController;
use TypeController;

class Router
{
    public static function route()
    {
        session_start();
 
        $controller = isset($_REQUEST['controller'])? $_REQUEST['controller'] : 'Auth';
        $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';
        $actionAuth = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'login';
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
        $contentView = '';
        if ($controller == "Auth") {
            $controllerInstance = new AuthController();
            $controllerInstance->{$actionAuth}();
        }
        if (isset($_SESSION["user"])) {
            if ($controller == "ArticleConfection") {
                $controllerInstance = new ArticleConfectionController();
                if ($id !== null) {
                    $contentView = $controllerInstance->{$action}($id);
                } else {
                    $contentView = $controllerInstance->{$action}();
                }
            } elseif ($controller == "ArticleVente") {
                $controllerInstance = new ArticleVenteController();
                if ($id !== null) {
                    $contentView = $controllerInstance->{$action}($id);
                } else {
                    $contentView = $controllerInstance->{$action}();
                }
            } elseif ($controller == "Categorie") {
                $controllerInstance = new CategorieController();
                if ($id !== null) {
                    $contentView = $controllerInstance->{$action}($id);
                } else {
                    $contentView = $controllerInstance->{$action}();
                }
            } elseif ($controller == "Utilisateur") {
                $controllerInstance = new UtilisateurController();
                if ($id !== null) {
                    $contentView = $controllerInstance->{$action}($id);
                } else {
                    $contentView = $controllerInstance->{$action}();
                }
            } elseif ($controller == "Home") {
                $controllerInstance = new HomeController();

                $contentView = $controllerInstance->{$action}();
            } elseif ($controller == "Vente") {
                $controllerInstance = new VenteController();
                if ($id !== null) {
                    $contentView = $controllerInstance->{$action}($id);
                } else {
                    $contentView = $controllerInstance->{$action}();
                }
            } elseif ($controller == "Fournisseur") {
                $controllerInstance = new FournisseurController();
                if ($id !== null) {
                    $contentView = $controllerInstance->{$action}($id);
                } else {
                    $contentView = $controllerInstance->{$action}();
                }
            } elseif ($controller == "Approvisionnement") {
                $controllerInstance = new ApprovisionnementController();
                if ($id !== null) {
                    $contentView = $controllerInstance->{$action}($id);
                } else {
                    $contentView = $controllerInstance->{$action}();
                }
            } elseif ($controller == "Client") {
                $controllerInstance = new ClientController();
                if ($id !== null) {
                    $contentView = $controllerInstance->{$action}($id);
                } else {
                    $contentView = $controllerInstance->{$action}();
                }
            } elseif ($controller == "categorie") {
                $controllerInstance = new CategorieController();
                if ($id !== null) {
                    $contentView = $controllerInstance->{$action}($id);
                } else {
                    $contentView = $controllerInstance->{$action}();
                }
            }
        } else {

            require_once("../views/auth/login.php");
        }
    }
}
