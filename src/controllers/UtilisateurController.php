<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\Utilisateur;

class UtilisateurController extends Controller
{
    public function index()
    {
        $model = new Utilisateur();
        $utilisateurs = $model->getAll();
        $nombreVendeurs = $model->countByRole('vendeur');
        $nombreResponsablesStock = $model->countByRole('responsableStock');
        $nombreResponsablesProduction = $model->countByRole('responsableProduction');
        $this->renderView("Utilisateur/liste", [
            "utilisateurs" => $utilisateurs,
            "nombreVendeurs" => $nombreVendeurs,
            "nombreResponsablesStock" => $nombreResponsablesStock,
            "nombreResponsablesProduction" => $nombreResponsablesProduction
        ]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            $model = new Utilisateur();
            $model->create($nom, $prenom, $username, $password, $role);

            header('Location: ' . webRoot . '/?controller=Utilisateur');
            exit();
        } else {
            $this->renderView("Utilisateur/create", []);
        }
    }

    public function edit($id)
    {
        $model = new Utilisateur();
        $utilisateur = $model->getById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            $model->update($id, $nom, $prenom, $username, $password, $role);

            header('Location: ' . webRoot . '/?controller=Utilisateur');
            exit();
        } else {
            $this->renderView("Utilisateur/edit", ["utilisateur" => $utilisateur]);
        }
    }

    public function delete($id)
    {
        $model = new Utilisateur();
        $model->delete($id);
        header('Location: ' . webRoot . '/?controller=Utilisateur');
        exit();
    }
}
