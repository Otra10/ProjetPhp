<?php 
namespace App\Controllers;

use App\Core\Controller;
use App\Model\ArticleConfection;
use App\Model\ArticleVente;

class ArticleVenteController extends Controller
{
    public function index()
    {
        $model = new ArticleVente();
        $articles = $model->getAll();

        $this->renderView('ArticleVente/liste', ['articles' => $articles]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $libelle = $_POST['libelle'];
            $prix = $_POST['prix'];
            $qte = $_POST['qte'];
            $montant = $_POST['montant'];
            $photo = $_POST['photo'];

            $model = new ArticleVente();
            $model->create($libelle, $prix, $qte, $montant, $photo);

            header('location:'.webRoot.'/?controller=ArticleVente');
        } else {
            $model = new ArticleConfection();
            $articles = $model->getAll();

            $this->renderView('ArticleVente/create', ['articles' => $articles]);
        }
    }

    public function edit($id)
    {
        $model = new ArticleVente();
        $article = $model->getById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $libelle = $_POST['libelle'];
            $prix = $_POST['prix'];
            $qte = $_POST['qte'];
            $montant = $_POST['montant'];
            $photo = $_POST['photo'];

            $model->update($id, $libelle, $prix, $qte, $montant, $photo);

            header('location:'.webRoot.'/?controller=ArticleVente');
        } else {
            $this->renderView('ArticleVente/edit', ['article' => $article]);
        }
    }

    public function delete($id)
    {
        $model = new ArticleVente();
        $model->delete($id);

        header('location:'.webRoot.'/?controller=ArticleVente');
    }
}
