<?php 
namespace App\Controllers;

use App\Model\Vente;

class VenteController {
    public function index() {
        $model = new Vente();
        $ventes = $model->getAll();
        include 'views/ventes/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $date = $_POST['date'];
            $article_id = $_POST['article_id'];
            $client_id = $_POST['client_id'];
            $quantite = $_POST['quantite'];
            $prix = $_POST['prix'];
            $montant = $_POST['montant'];
            $observation = $_POST['observation'];

            $model = new Vente();
            $model->create($date, $article_id, $client_id, $quantite, $prix, $montant, $observation);

            header('Location: /ventes');
        } else {
            include 'views/ventes/create.php';
        }
    }

    public function filterByDate() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $date = $_POST['date'];

            $model = new Vente();
            $ventes = $model->getByDate($date);

            include 'views/ventes/index.php';
        }
    }

    public function filterByClient() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $client_id = $_POST['client_id'];

            $model = new Vente();
            $ventes = $model->getByClient($client_id);

            include 'views/ventes/index.php';
        }
    }

    public function filterByArticle() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $article_id = $_POST['article_id'];

            $model = new Vente();
            $ventes = $model->getByArticle($article_id);

            include 'views/ventes/index.php';
        }
    }
}