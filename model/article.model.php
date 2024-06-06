<?php
require_once("Model.php");
class ArticleModel extends Model
{
    public function __construct()
    {
        $this->ouvrirConnexion();
    }
    public function findAll()
    {
        $sql="select * from `article` a, categorie c, type t where a.`typeId` = t.id and a.categorieId=c.id";
        return $this->findData($this->pdo->query($sql),$sql);
    }
    function saveAll()
    {
        unset($_POST["action"]);
        extract($_POST);
        try {
            $sql = "INSERT INTO `article` (`libelle`, `qteStock`, `prixAppro`, `typeId`, `categorieId`) VALUES ( '$libelle', '$qteStock', '$prixAppro', '$typeId', '$categorieId');";
            $stm = $this->pdo->exec($sql);
            // $row=$stm->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($row[0]["nomType"]);
            // return $row;
        } catch (PDOException $e) {
            echo "Erreur de connexion :" . $e->getMessage();
        }
    }
}
