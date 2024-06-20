<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\Fournisseur;

use function PHPSTORM_META\type;

class FournisseurController extends Controller
{
    public function index()
    {
        $model = new Fournisseur();
        $fournisseurs = $model->getAll();
        $this->renderView("Fournisseur/liste",["fournisseurs"=>$fournisseurs]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $telephone_portable = $_POST['telephonePortable'];
            $telephone_fixe = $_POST['telephoneFixe'];
            $adresse = $_POST['adresse'];
            $photo = $_POST['photo'];

            $model = new Fournisseur();
            $model->create($nom, $prenom, $telephone_portable, $telephone_fixe, $adresse, $photo);

            header('location:'.webRoot.'/?controller=Fournisseur');
        } else {
            $this->renderView("Fournisseur/create",[]);
        }
    }

    public function edit($id)
    {
       
        $model = new Fournisseur();
        $fournisseur = $model->getById($id);
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $telephonePortable = $_POST['telephonePortable'];
            $telephoneFixe = $_POST['telephoneFixe'];
            $adresse = $_POST['adresse'];
            $photo = $_POST['photo'];
            
            $model->update($id, $nom, $prenom, $telephonePortable, $telephoneFixe, $adresse, $photo);

            header('location:'.webRoot.'/?controller=Fournisseur');
        } else {
            $this->renderView("Fournisseur/edit",["fournisseur"=>$fournisseur]);
        }
    }

    public function delete($id)
    {
        $model = new Fournisseur();
        $model->delete($id);
        header('location:'.webRoot.'/?controller=Fournisseur');
    }
}
