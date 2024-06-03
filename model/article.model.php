<?php
function findAllArticle()
{
    $dsn = "mysql:host=127.0.0.1;dbname=cours_php_ism";
    $username = 'opo';
    $password = "";


    try {
        $dbh = new PDO($dsn, $username, $password);
        $sql="select * from `article` a, categorie c, type t where a.`typeId` = t.id and a.categorieId=c.id";
        $stm=$dbh->query($sql);
        $row=$stm->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($row);
        return $row;
    } catch (PDOException $e) {
        echo "Erreur de connexion :" . $e->getMessage();
    }
}
function saveAllArticle(){
    $dsn = "mysql:host=127.0.0.1;dbname=cours_php_ism";
    $username = 'root';
    $password = "";

    unset($_POST["action"]);
    extract($_POST); 
    try {
        $dbh = new PDO($dsn, $username, $password);
        $sql="INSERT INTO `article` (`libelle`, `qteStock`, `prixAppro`, `typeId`, `categorieId`) VALUES ( '$libelle', '$qteStock', '$prixAppro', '$typeId', '$categorieId');";
        $stm=$dbh->exec($sql);
        // $row=$stm->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($row[0]["nomType"]);
        // return $row;
    } catch (PDOException $e) {
        echo "Erreur de connexion :" . $e->getMessage();
    }
}
