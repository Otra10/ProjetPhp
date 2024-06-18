<?php 
namespace App\Controllers;

use App\Model\ArticleVente;
use  App\Model\ArticleConfection;

class ArticleVenteController extends Controller {
    public function index() {
        $model = new ArticleVente();
        $articles = $model->getAll();
        $this->renderView("",["articles"=>$articles]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $libelle = $_POST['libelle'];
            $prix_vente = $_POST['prix_vente'];
            $quantite_stock = $_POST['quantite_stock'];
            $montant_vente = $_POST['montant_vente'];
            $photo = $_POST['photo'];

            $model = new ArticleVente();
            $model->create($libelle, $prix_vente, $quantite_stock, $montant_vente, $photo);

            header('Location: /articles_vente');
        } else {
            $model = new ArticleConfection();
            $articles = $model->getAll();
            $this->renderView("",["articles"=>$articles]);
        }
    }

    public function edit($id) {
        $model = new ArticleVente();
        $article = $model->getById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $libelle = $_POST['libelle'];
            $prix_vente = $_POST['prix_vente'];
            $quantite_stock = $_POST['quantite_stock'];
            $montant_vente = $_POST['montant_vente'];
            $photo = $_POST['photo'];

            $model->update($id, $libelle, $prix_vente, $quantite_stock, $montant_vente, $photo);

            header('Location: /articles_vente');
        } else {
            $model = new ArticleConfection();
            $articles = $model->getAll();
            $this->renderView("",["articles"=>$articles]);
        }
    }

    public function delete($id) {
        $model = new ArticleVente();
        $model->delete($id);
        header('Location: /articles_vente');
    }
}