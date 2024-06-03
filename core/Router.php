<?php
    class  Router{
        public static function route()
        {
            require_once("../views/partials/header.html.php");
            if (isset($_REQUEST["controller"])) {
                if ($_REQUEST["controller"] == "article") {
                    require_once("../controllers/article.controller.php");
                } elseif ($_REQUEST["controller"] == "type") {
                    require_once("../controllers/type.controller.php");
                }
            } else {
                require_once("../controllers/article.controller.php");
            }
        
            require_once("../views/partials/footer.html.php");
        }
    }
?>