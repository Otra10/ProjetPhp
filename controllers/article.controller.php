<?php 
require_once("../model/article.model.php");
require_once("../model/type.model.php");
require_once("../model/categorie.model.php");
require_once("controller.php"); 

class ArticleController extends Controller{
    private $articleModel;
    private $typeModel;
    private $categorieModel;

    public function __construct() {
        $this->articleModel = new ArticleModel();
        $this->typeModel = new TypeModel();
        $this->categorieModel = new CategorieModel();
        $this->load();
    }

    public function load() {
        if (isset($_REQUEST["action"])) {
            if ($_REQUEST["action"] == "listeArticle") {
                $this->listerArticle();
            } elseif ($_REQUEST["action"] == "formArticle") {
                $this->FormArticle();
            } elseif ($_REQUEST["action"] == "addArticle") {
                $this->AjoutArticle();
                header("Location: " . webRoot . "/?controller=article&action=listeArticle");
            }
        } else {
            $this->listerArticle();
        }
    }

    public function FormArticle() {
        $categories = $this->categorieModel->findAll();
        $types = $this->typeModel->findAll();
        $articles = $this->articleModel->findAll();
        $this->renderView("articles/form",[
            "articles"=>$articles,
            "categories"=>$categories,
            "types"=>$types
    
    ]);
    }

    public function listerArticle() {
        $categories = $this->categorieModel->findAll();
        $types = $this->typeModel->findAll();
        $articles = $this->articleModel->findAll();
        $this->renderView("articles/liste",[
            "articles"=>$articles,
            "categories"=>$categories,
            "types"=>$types
    
    ]);
    }

    public function AjoutArticle() {
        $this->articleModel->saveAll();
    }
}
?>
