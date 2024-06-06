<?php
require_once("../model/type.model.php"); 
require_once("controller.php"); 
class TypeController extends Controller{
    private $typeModel;
    private $categorieModel;

    public function __construct() {
        $this->typeModel = new TypeModel();
        $this->load();
    }
    public function load(){
        if(isset($_REQUEST["action"])){
            if($_REQUEST["action"]=="listeType"){
                
                $this->listerType();
            }elseif($_REQUEST["action"]=="FormType"){
                $this->AjoutType();
            }
        }else{
            $this->listerType();
        }
    }
    function listerType(){
        $types = $this->typeModel->findAll();
        $this->renderView("types/liste",["types"=>$types]);
    }
    function AjoutType(){
        
        $this->typeModel->saveAll();
        header("location:".webRoot."/?controller=type&action=listeType");
    }
}
?>