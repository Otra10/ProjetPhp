<?php
    class  Router{
        public static function route()
        {
            if (isset($_REQUEST["controller"])) {
                if ($_REQUEST["controller"] == "article") {
                    require_once("../controllers/article.controller.php");
                    $controller=new ArticleController();
                } elseif ($_REQUEST["controller"] == "type") {
                    require_once("../controllers/type.controller.php");
                    $controller=new TypeController();
                } elseif ($_REQUEST["controller"] == "categorie") {
                    require_once("../controllers/categorie.controller.php");
                    $controller=new CategireController();
                }
            } else {
                $contentView="";
                require_once("../views/layout/base.layout.php");;
            }
        }
    }
?>