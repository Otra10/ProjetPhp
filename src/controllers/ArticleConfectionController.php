<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\ArticleConfection;

class ArticleConfectionController extends Controller
{
    public function index()
    {
        $model = new ArticleConfection();
        $articles = $model->getAll();

        $this->renderView('ArticleConfection/liste', ['articles' => $articles]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $libelle = $_POST['libelle'];
            $prixAchat = $_POST['prixAchat'];
            $qteAchat = $_POST['qteAchat'];
            $qteStock = $_POST['qteStock'];
            $montantStock = $_POST['montantStock'];
            $photo = $_POST['photo'];

            $model = new ArticleConfection();
            $model->create($libelle, $prixAchat, $qteAchat, $qteStock, $montantStock, $photo);

            header('location:'.webRoot.'/?controller=ArticleConfection');
        } else {
            $model = new ArticleConfection();
            $articles = $model->getAll();
            $this->renderView('ArticleConfection/create', ['articles' => $articles]);
        }
    }

    public function edit($id)
    {
        $model = new ArticleConfection();
        $article = $model->getById($id);
  
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $libelle = $_POST['libelle'];
            $prixAchat = $_POST['prixAchat'];
            $qteAchat = $_POST['qteAchat'];
            $qteStock = $_POST['qteStock'];
            $montantStock = $_POST['montantStock'];
            $photo = $_POST['photo'];

            $model->update($id, $libelle, $prixAchat, $qteAchat, $qteStock, $montantStock, $photo);

            header('location:'.webRoot.'/?controller=ArticleConfection');
        } else {
            $this->renderView('ArticleConfection/edit', ['article' => $article]);
        }
    }

    public function delete($id)
    {
        $model = new ArticleConfection();
        $model->delete($id);
        header('location:'.webRoot.'/?controller=ArticleConfection');
    }
}
