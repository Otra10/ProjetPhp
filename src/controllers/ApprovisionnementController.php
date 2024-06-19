<?php 
namespace App\Controllers;

use App\Core\Controller;
use App\Model\Approvisionnement;

class ApprovisionnementController extends Controller {
    public function index() {
        $model = new Approvisionnement();
        $approvisionnements = $model->getAll();
        $this->renderView("",["approvisionnement"=>$approvisionnements]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $date = $_POST['date'];
            $article_id = $_POST['article_id'];
            $fournisseur_id = $_POST['fournisseur_id'];
            $quantite = $_POST['quantite'];
            $prix = $_POST['prix'];
            $montant = $_POST['montant'];
            $observation = $_POST['observation'];

            $model = new Approvisionnement();
            $model->create($date, $article_id, $fournisseur_id, $quantite, $prix, $montant, $observation);

            header('Location: /approvisionnements');
        } else {
            include 'views/approvisionnements/create.php';
        }
    }
}