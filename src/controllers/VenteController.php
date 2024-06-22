<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\ArticleVente;
use App\Model\Client;
use App\Model\Vente;

class VenteController extends Controller
{
    public function index()
    {
        $articleModel = new ArticleVente();
        $clientModel = new Client();
        $venteModel = new Vente();
        $articles = $articleModel->getAll();
        $clients = $clientModel->getAll();
        $ventes = $venteModel->getAll();
        $this->renderView("Vente/liste", [
            "ventes" => $ventes,
            "articles" => $articles,
            "clients" => $clients,

        ]);
    }

    public function create()
    {
        $articleModel = new ArticleVente();
        $clientModel = new Client();
        $venteModel = new Vente();
        $articles = $articleModel->getAll();
        $clients = $clientModel->getAll();
        $ventes = $venteModel->getAll();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $date = $_POST['date'];
            $articleId = $_POST['articleVenteId'];
            $clientId = $_POST['clientId'];
            $qte = $_POST['qte'];
            $prix = $_POST['prix'];
            $montant = $_POST['montant'];
            $observation = $_POST['observation'];

            $model = new Vente();
            $model->create($date, $articleId, $clientId, $qte, $prix, $montant, $observation);

            header('location:' . webRoot . '/?controller=Vente');
        } else {
            $this->renderView("Vente/create", [
                "ventes" => $ventes,
                "articles" => $articles,
                "clients" => $clients
            ]);
        }
    }

    public function filterByDate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $date = $_POST['date'];

            $model = new Vente();
            $ventes = $model->getByDate($date);

            $articleModel = new ArticleVente();
            $clientModel = new Client();
            $articles = $articleModel->getAll();
            $clients = $clientModel->getAll();
            $this->renderView("Vente/liste", [
                "ventes" => $ventes,
                "articles" => $articles,
                "clients" => $clients,

            ]);
        }
    }

    public function filterByClient()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $clientId = $_POST['clientId'];

            $model = new Vente();
            $ventes = $model->getByClient($clientId);

            $articleModel = new ArticleVente();
            $clientModel = new Client();
            $articles = $articleModel->getAll();
            $clients = $clientModel->getAll();
            $this->renderView("Vente/liste", [
                "ventes" => $ventes,
                "articles" => $articles,
                "clients" => $clients,

            ]);
        }
    }

    public function filterByArticle()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $articleId = $_POST['articleId'];

            $model = new Vente();
            $ventes = $model->getByArticle($articleId);

            $articleModel = new ArticleVente();
            $clientModel = new Client();
            $articles = $articleModel->getAll();
            $clients = $clientModel->getAll();
            $this->renderView("Vente/liste", [
                "ventes" => $ventes,
                "articles" => $articles,
                "clients" => $clients,

            ]);
        }
    }
}
