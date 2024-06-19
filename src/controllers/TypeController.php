<?php

namespace App\Controllers;

use App\Models\Type;
use App\Core\Controller;

class TypeController extends Controller
{
    private $typeModel;
    private $categorieModel;

    public function __construct()
    {
        $this->typeModel = new TypeModel();
        $this->load();
    }

    public function load()
    {
        if (isset($_REQUEST['action'])) {
            if ($_REQUEST['action'] == 'listeType') {
                
                $this->listerType();
            } elseif($_REQUEST['action'] == 'FormType') {
                $this->AjoutType();
            }
        } else {
            $this->listerType();
        }
    }

    function listerType()
    {
        $types = $this->typeModel->findAll();
        $this->renderView('types/liste', ['types' => $types]);
    }

    function AjoutType()
    {
        $this->typeModel->saveAll();
        header("location:".webRoot."/?controller=type&action=listeType");
    }
}
