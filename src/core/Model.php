<?php
namespace App\Core;

use PDO;
use PDOException;

    class Model{
        protected $dsn="mysql:host=127.0.0.1;dbname=cours_php_ism";
        protected $username='root';
        protected $password="";
        protected PDO|NULL $pdo=null;
        public function ouvrirConnexion(){
        try{
            if($this->pdo==null){
                $this->pdo = new PDO($this->dsn, $this->username,$this->password);
            }
        }
        catch(PDOException $e){
            echo "Erreur de connexion :" . $e->getMessage();
        }
        }
    }