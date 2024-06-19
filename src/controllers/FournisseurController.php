<?php 
namespace App\Controllers;

use App\Core\Controller;
use App\Model\Fournisseur;

class FournisseurController extends Controller {
    public function index() {
        $model = new Fournisseur();
        $fournisseurs = $model->getAll();
        include 'views/fournisseurs/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $telephone_portable = $_POST['telephone_portable'];
            $telephone_fixe = $_POST['telephone_fixe'];
            $adresse = $_POST['adresse'];
            $photo = $_POST['photo'];

            $model = new Fournisseur();
            $model->create($nom, $prenom, $telephone_portable, $telephone_fixe, $adresse, $photo);

            header('Location: /fournisseurs');
        } else {
            include 'views/fournisseurs/create.php';
        }
    }

    public function edit($id) {
        $model = new Fournisseur();
        $fournisseur = $model->getById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $telephone_portable = $_POST['telephone_portable'];
            $telephone_fixe = $_POST['telephone_fixe'];
            $adresse = $_POST['adresse'];
            $photo = $_POST['photo'];

            $model->update($id, $nom, $prenom, $telephone_portable, $telephone_fixe, $adresse, $photo);

            header('Location: /fournisseurs');
        } else {
            include 'views/fournisseurs/edit.php';
        }
    }

    public function delete($id) {
        $model = new Fournisseur();
        $model->delete($id);
        header('Location: /fournisseurs');
    }
}