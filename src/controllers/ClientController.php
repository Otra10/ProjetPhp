<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\Client;

class ClientController extends Controller
{
    public function index()
    {
        $model = new Client();
        $clients = $model->getAll();
        include 'views/clients/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $telephone_portable = $_POST['telephone_portable'];
            $observations = $_POST['observations'];
            $adresse = $_POST['adresse'];
            $photo = $_POST['photo'];

            $model = new Client();
            $model->create($nom, $prenom, $telephone_portable, $observations, $adresse, $photo);

            header('Location: /clients');
        } else {
            include 'views/clients/create.php';
        }
    }

    public function edit($id)
    {
        $model = new Client();
        $client = $model->getById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $telephone_portable = $_POST['telephone_portable'];
            $observations = $_POST['observations'];
            $adresse = $_POST['adresse'];
            $photo = $_POST['photo'];

            $model->update($id, $nom, $prenom, $telephone_portable, $observations, $adresse, $photo);

            header('Location: /clients');
        } else {
            include 'views/clients/edit.php';
        }
    }

    public function delete($id)
    {
        $model = new Client();
        $model->delete($id);
        header('Location: /clients');
    }
}
