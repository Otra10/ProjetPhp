<?php 
    if(isset($_REQUEST["action"])){
        if($_REQUEST["action"]=="listeArticle"){
            listerArticle();
        }else if($_REQUEST["action"]=="formArticle"){
            FormArticle();
        }else if($_REQUEST["action"]=="addArticle"){
            AjoutArticle();
            header("location:".webRoot."/?controller=article&action=listeArticle");
        }
    }else{
        listerArticle();
    }
    function FormArticle(){
        require_once("../model/article.model.php");
        require_once("../model/type.model.php");
        require_once("../model/categorie.model.php");
        $categories=findAllCategorie();
        $types=findAllType();
        $articles=findAllArticle();
        // require_once("../views/liste.html.php");
        require_once("../views/articles/form.html.php");
    }

    function listerArticle(){
        require_once("../model/article.model.php");
        $articles=findAllArticle();
        // require_once("../views/liste.html.php");
        require_once("../views/articles/liste.html.php");
    }
    function AjoutArticle(){
        require_once("../model/article.model.php");
        saveAllArticle();
    }
?>