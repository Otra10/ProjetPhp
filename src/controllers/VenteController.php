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
        var_dump($ventes);
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
        $articles = $articleModel->getAll();
        $clients = $clientModel->getAll();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $date = $_POST['date'];
            $clientId = $_POST['clientId'];
            $articles = $_POST['articleVenteId'];
            $observation = $_POST['observation'];
            var_dump($articles);
            $venteModel = new Vente();
            $venteModel->create($date, $clientId, $articles, $observation);
            
            // header('location:' . webRoot . '/?controller=Vente');
        } else {
            $this->renderView("Vente/create", [
                "articles" => $articles,
                "clients" => $clients
            ]);
        }
    }

    public function filterByDate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $date = $_POST['date'];

            $venteModel = new Vente();
            $ventes = $venteModel->getByDate($date);

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

            $venteModel = new Vente();
            $ventes = $venteModel->getByClient($clientId);

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

            $venteModel = new Vente();
            $ventes = $venteModel->getByArticle($articleId);

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
