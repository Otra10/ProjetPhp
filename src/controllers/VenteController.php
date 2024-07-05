<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\ArticleVente;
use App\Model\Client;
use App\Model\Panier;
use App\Model\Vente;

class VenteController extends Controller
{
    private $panier;

    public function __construct() {
        $this->panier = new Panier();
    }

    public function index() {
        $venteModel = new Vente();
        $ventes = $venteModel->getAll();

        $this->renderView('Vente/liste', [
            'ventes' => $ventes
        ]);
    }

    public function create() {
        $articleModel = new ArticleVente();
        $clientModel = new Client();
        $articles = $articleModel->getAll();
        $clients = $clientModel->getAll();

        $this->renderView('Vente/create', [
            'articles' => $articles,
            'clients' => $clients
        ]);
    }

    public function ajouterAuPanier($articleId, $quantite) {
        $this->panier->ajouterArticle($articleId, $quantite);
        header('location:'.webRoot.'/?controller=Vente');
    }

    public function retirerDuPanier($articleId) {
        $this->panier->retirerArticle($articleId);
        header('location:'.webRoot.'/?controller=Vente');
    }

    public function store() {
        $clientId = $_POST['clientId'];
        $observation = $_POST['observation'];
        $articles = $_POST['articles'];

        $venteModel = new Vente();
        $venteModel->create(date('Y-m-d'), $clientId, $articles, $observation);
        $this->panier->viderPanier();
        header('location:'.webRoot.'/?controller=Vente');
    }
}
