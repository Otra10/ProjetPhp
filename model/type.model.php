<?php
function findAllType()
{
    $dsn = "mysql:host=127.0.0.1;dbname=cours_php_ism";
    $username = 'root';
    $password = "";


    try {
        $dbh = new PDO($dsn, $username, $password);
        $sql="select * from type";
        $stm=$dbh->query($sql);
        $row=$stm->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($row[0]["nomType"]);
        return $row;
    } catch (PDOException $e) {
        echo "Erreur de connexion :" . $e->getMessage();
    }
}
function saveAllType(){
    $dsn = "mysql:host=127.0.0.1;dbname=cours_php_ism";
    $username = 'root';
    $password = "";

    unset($_POST["action"]);
    extract($_POST); 
    try {
        $dbh = new PDO($dsn, $username, $password);
        $sql="INSERT INTO `type` (`nomType`) VALUES ('$nomType')";
        $stm=$dbh->exec($sql);
        // $row=$stm->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($row[0]["nomType"]);
        // return $row;
    } catch (PDOException $e) {
        echo "Erreur de connexion :" . $e->getMessage();
    }
}