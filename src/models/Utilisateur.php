<?php

namespace App\Model;

use App\Core\Model;
use PDO;

class Utilisateur extends Model
{
    public function __construct()
    {
        $this->ouvrirConnexion();
    }

    public function create($nom, $prenom, $username, $password, $role)
    {
        $sql = "
            INSERT INTO utilisateurs (nom, prenom, username, password, role)
            VALUES (?, ?, ?, ?, ?)
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nom, $prenom, $username, password_hash($password, PASSWORD_BCRYPT), $role]);
    }

    public function authenticate($username, $password)
    {
        $sql = "SELECT * FROM utilisateurs WHERE username = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && $password === $user['password']) {
            return $user;
        }

        return false;
    }
}
