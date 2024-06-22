<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\Approvisionnement;
use App\Model\ArticleConfection;
use App\Model\Fournisseur;

class ApprovisionnementController extends Controller
{
    public function index()
    {
        $model = new Approvisionnement();
        $approvisionnements = $model->getAll();

        $this->renderView("Approvisionnement/liste",["approvisionnements"=>$approvisionnements]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $date = $_POST['date'];
            $article_id = $_POST['article_id'];
            $fournisseur_id = $_POST['fournisseur_id'];
            $quantite = $_POST['quantite'];
            $prix = $_POST['prix'];
            $montant = $_POST['montant'];
            $observation = $_POST['observation'];

            $model = new Approvisionnement();
            $model->create($date, $article_id, $fournisseur_id, $quantite, $prix, $montant, $observation);

            header('location:'.webRoot.'/?controller=Approvisionnement');
        } else {
            $model = new Approvisionnement();
            $Fmodel = new Fournisseur();
            $Amodel = new ArticleConfection();
            $approvisionnements = $model->getAll();
            $fournisseurs = $Fmodel->getAll();
            $articles = $Amodel->getAll();
            $this->renderView("Approvisionnement/create",[
                "approvisionnement"=>$approvisionnements,
                "fournisseurs"=>$fournisseurs,
                "articles"=>$articles
            ]);
        }
    }
}
