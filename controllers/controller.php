<?php
    class Controller{
        private $typeModel;
        private $categorieModel;
        private $articleModel;
        public function __construct() {
            $this->typeModel = new TypeModel();
            $this->articleModel = new ArticleModel();
            $this->categorieModel = new CategorieModel();
        }
        function renderView(string $dossier,array $datas){
            ob_start();
                extract($datas);
                require_once("../views/$dossier.html.php");
            $contentView=ob_get_clean();
            require_once("../views/layout/base.layout.php");
        }
    }
?>