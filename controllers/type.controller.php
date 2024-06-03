<?php 
    if(isset($_REQUEST["action"])){
        if($_REQUEST["action"]=="listeType"){
            listerType();
        }elseif($_REQUEST["action"]=="FormType"){
            AjoutType();
        }
    }else{
        listerType();
    }
    function listerType(){
        require_once("../model/type.model.php");
        $types=findAllType();
        // require_once("../views/liste.html.php");
        require_once("../views/types/liste.html.php");
    }
    function AjoutType(){
        require_once("../model/type.model.php");
        saveAllType();
        header("location:".webRoot."/?controller=type&action=listeType");
    }
?>