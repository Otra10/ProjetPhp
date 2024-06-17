<?php
require_once("Model.php");
class CategorieModel extends Model
{
    public function __construct()
        {
            $this->ouvrirConnexion();
        }
    public function findAll()
    {
        $sql = "select * from categorie";
        return $this->findData($sql);
    }
    function saveAll(){
        unset($_POST["action"]);
        extract($_POST); 
        try {
            $this->pdo  = new PDO($dsn, $username, $password);
            $sql="INSERT INTO `categorie` (`nomCategorie`) VALUES ('$nomCategorie')";
            $stm=$pdo->exec($sql);
        } catch (PDOException $e) {
            echo "Erreur de connexion :" . $e->getMessage();
        }
    }
}
