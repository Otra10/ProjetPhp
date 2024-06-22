<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\Categorie;

class CategorieController extends Controller
{
    public function index()
    {
        $model = new Categorie();
        $categories = $model->getAll();
        $this->renderView("categorie/liste", ["categories" => $categories]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nomCategorie = $_POST['nomCategorie'];

            $model = new Categorie();
            $model->create($nomCategorie);

            header('Location: ' . webRoot . '/?controller=Categorie');
            exit();
        } else {
            $this->renderView("categorie/liste", []);
        }
    }

    public function edit($id)
    {
        $model = new Categorie();
        $categorie = $model->getById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nomCategorie = $_POST['nomCategorie'];
            $model->update($id, $nomCategorie);

            header('Location: ' . webRoot . '/?controller=Categorie');
            exit();
        } else {
            $this->renderView("categorie/edit", ["categorie" => $categorie]);
        }
    }

    public function delete($id)
    {
        $model = new Categorie();
        $model->delete($id);

        header('Location: ' . webRoot . '/?controller=Categorie');
        exit();
    }
}
