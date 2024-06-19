<?php

namespace App\Core;

use App\Controllers\ApprovisionnementController;
use App\Controllers\ArticleConfectionController;
use App\Controllers\ArticleVenteController;
use App\Controllers\CategorieController;
use App\Controllers\ClientController;
use App\Controllers\FournisseurController;
use App\Controllers\VenteController;
use TypeController;

class Router {
    public static function route() {
        $controller = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : 'ArticleConfection';
        $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
        $contentView = '';

        if ($controller == "ArticleConfection") {
            $controllerInstance = new ArticleConfectionController();
            if ($id !== null) {
                $contentView = $controllerInstance->{$action}($id);
            }
            $contentView = $controllerInstance->{$action}();
        } elseif ($controller == "ArticleVente") {
            $controllerInstance = new ArticleVenteController();
            if ($id !== null) {
                $contentView = $controllerInstance->{$action}($id);
            }
            $contentView = $controllerInstance->{$action}();
        }elseif ($controller == "Vente") {
            $controllerInstance = new VenteController();
            if ($id !== null) {
                $contentView = $controllerInstance->{$action}($id);
            }
            $contentView = $controllerInstance->{$action}();
        }elseif ($controller == "Fournisseur") {
       
            $controllerInstance = new FournisseurController();
            if ($id !== null) {
                $contentView = $controllerInstance->{$action}($id);
            }
            $contentView = $controllerInstance->{$action}();
        }elseif ($controller == "Approvisionnement") {
            
            $controllerInstance = new ApprovisionnementController();
            if ($id !== null) {
                $contentView = $controllerInstance->{$action}($id);
            }
            $contentView = $controllerInstance->{$action}();
        }elseif ($controller == "Client") {
            $controllerInstance = new ClientController();
            if ($id !== null) {
                $contentView = $controllerInstance->{$action}($id);
            }
            $contentView = $controllerInstance->{$action}();
        }
         elseif ($controller == "categorie") {
            $controllerInstance = new CategorieController();
            if ($id !== null) {
                $contentView = $controllerInstance->{$action}($id);
            }
            $contentView = $controllerInstance->{$action}();
        }

        require_once("../views/layout/base.layout.php");
    }
}
?>