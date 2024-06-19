<?php
require_once("../model/categorie.model.php"); 
require_once("controller.php"); 
class CategireController extends Controller{
    private CategorieModel $categorieModel;

    public function __construct() {
        $this->categorieModel = new CategorieModel();
        $this->load();
    }
    public function load(){
        if(isset($_REQUEST["action"])){
            if($_REQUEST["action"]=="listeCategorie"){
                $this->listerCategorie();
            }elseif($_REQUEST["action"]=="FormCategorie"){
                $this->AjoutCategorie();
            }
        }else{
            $this->listerCategorie();
        }
    }
    function listerCategorie(){
        $categories= $this->categorieModel->findAll();
        $this->renderView("categories/liste",["categories"=>$categories]);
    }
    function AjoutCategorie(){
        
        $this->categorieModel->saveAll();
        header("location:".webRoot."/?controller=categorie&action=listeCategorie");
    }
}
?>