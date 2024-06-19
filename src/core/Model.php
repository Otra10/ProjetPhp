<?php
namespace App\Core;

use PDO;
use PDOException;

class Model{
    protected $dsn = "mysql:host=192.168.56.56;dbname=mbayelab_tasky";
    protected $username = 'root';
    protected $password = 'secret';
    protected PDO|NULL $pdo = null;

    public function ouvrirConnexion()
    {
        try {
            if ($this->pdo == null) {
                $this->pdo = new PDO($this->dsn, $this->username, $this->password);
            }
        } catch(PDOException $e) {
            echo "Erreur de connexion : {$e->getMessage()}";
        }
    }
}
