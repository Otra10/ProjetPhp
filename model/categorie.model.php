<?php
function findAllCategorie()
{
    $dsn = "mysql:host=127.0.0.1;dbname=cours_php_ism";
    $username = 'root';
    $password = "";


    try {
        $dbh = new PDO($dsn, $username, $password);
        $sql="select * from categorie";
        $stm=$dbh->query($sql);
        $row=$stm->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($row[0]["nomType"]);
        return $row;
    } catch (PDOException $e) {
        echo "Erreur de connexion :" . $e->getMessage();
    }
}
