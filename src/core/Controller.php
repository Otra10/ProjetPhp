<?php

namespace App\Core;

use App\Model\ArticleConfection;
use App\Model\ArticleVente;
use App\Model\Approvisionnement;
use App\Model\Categorie;
use App\Model\Client;
use App\Model\Fournisseur;
use App\Model\Type;
use App\Model\Utilisateur;
use App\Model\Vente;

class Controller
{
    private $typeModel;
    private $categorieModel;
    private $articleConfectionModel;
    private $articleVenteModel;
    private $approvisionnementModel;
    private $clientModel;
    private $fournisseurModel;
    private $venteModel;
    private $utilisateurModel;

    public function __construct()
    {
        // $this->typeModel = new TypeModel();
        $this->articleConfectionModel = new ArticleConfection();
        $this->articleVenteModel = new ArticleVente();
        $this->approvisionnementModel = new Approvisionnement();
        $this->clientModel = new Client();
        $this->fournisseurModel = new Fournisseur();
        $this->venteModel = new Vente();
        $this->utilisateurModel = new Utilisateur();
        // $this->categorieModel = new CategorieModel();
    }

    function renderView(string $dossier,array $datas)
    {
        ob_start();
        extract($datas);

        require_once("../views/$dossier.html.php");

        $contentView = ob_get_clean();

        require_once("../views/layout/base.layout.php");
    }
}
