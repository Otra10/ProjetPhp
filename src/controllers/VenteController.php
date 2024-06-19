<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\Vente;

class VenteController extends Controller
{
    public function index()
    {
        $model = new Vente();
        $ventes = $model->getAll();
        $this->renderView("Vente/liste",["ventes"=>$ventes]);
    }

    public function create()
    {
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
            $this->renderView("Vente/create",[]);
        }
    }

    public function filterByDate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $date = $_POST['date'];

            $model = new Vente();
            $ventes = $model->getByDate($date);

            $this->renderView("Vente/edit",[]);
        }
    }

    public function filterByClient()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $client_id = $_POST['client_id'];

            $model = new Vente();
            $ventes = $model->getByClient($client_id);

            $this->renderView("Vente/liste",["ventes"=>$ventes]);
        }
    }

    public function filterByArticle()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $article_id = $_POST['article_id'];

            $model = new Vente();
            $ventes = $model->getByArticle($article_id);

            $this->renderView("Vente/liste",["ventes"=>$ventes]);
        }
    }
}
