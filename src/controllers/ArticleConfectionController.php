<?php 
namespace App\Controllers;
use App\Core\Controller;
use App\Model\ArticleConfection;

class ArticleConfectionController extends Controller {
    public function index() {
        $model = new ArticleConfection();
        $articles = $model->getAll();
        $this->renderView("",["articles"=>$articles]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $libelle = $_POST['libelle'];
            $prix_achat = $_POST['prix_achat'];
            $quantite_achat = $_POST['quantite_achat'];
            $quantite_stock = $_POST['quantite_stock'];
            $montant_stock = $_POST['montant_stock'];
            $photo = $_POST['photo'];

            $model = new ArticleConfection();
            $model->create($libelle, $prix_achat, $quantite_achat, $quantite_stock, $montant_stock, $photo);

            header('Location: /articles_confection');
        } else {
            $model = new ArticleConfection();
            $articles = $model->getAll();
            $this->renderView("",["articles"=>$articles]);
        }
    }

    public function edit($id) {
        $model = new ArticleConfection();
        $article = $model->getById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $libelle = $_POST['libelle'];
            $prix_achat = $_POST['prix_achat'];
            $quantite_achat = $_POST['quantite_achat'];
            $quantite_stock = $_POST['quantite_stock'];
            $montant_stock = $_POST['montant_stock'];
            $photo = $_POST['photo'];

            $model->update($id, $libelle, $prix_achat, $quantite_achat, $quantite_stock, $montant_stock, $photo);

            header('Location: /articles_confection');
        } else {
            $model = new ArticleConfection();
            $articles = $model->getAll();
            $this->renderView("",["articles"=>$articles]);
        }
    }

    public function delete($id) {
        $model = new ArticleConfection();
        $model->delete($id);
        header('Location: /articles_confection');
    }
}