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
        $this->renderView("Client/liste",["clients"=>$clients]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $telephonePortable = $_POST['telephonePortable'];
            $observations = $_POST['observation'];
            $adresse = $_POST['adresse'];
            $photo = $_POST['photo'];

            $model = new Client();
            $model->create($nom, $prenom, $telephonePortable, $observations, $adresse, $photo);

            header('Location: /clients');
        } else {
            $this->renderView("Client/create",[]);
        }
    }

    public function edit($id)
    {
        $model = new Client();
        $client = $model->getById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $telephonePortable = $_POST['telephonePortable'];
            $observations = $_POST['observation'];
            $adresse = $_POST['adresse'];
            $photo = $_POST['photo'];

            $model->update($id, $nom, $prenom, $telephonePortable, $observations, $adresse, $photo);

            header('Location: /clients');
        } else {
            $this->renderView("Client/edit",["client"=>$client]);
        }
    }

    public function delete($id)
    {
        $model = new Client();
        $model->delete($id);
        header('Location: /clients');
    }
}
