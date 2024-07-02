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
        $stmt->execute([$nom, $prenom, $username,$password, $role]);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM utilisateurs";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM utilisateurs WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $nom, $prenom, $username, $password, $role)
    {
        $sql = "
            UPDATE utilisateurs
            SET nom = ?, prenom = ?, username = ?, password = ?, role = ?
            WHERE id = ?
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nom, $prenom, $username, $password, $role, $id]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM utilisateurs WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
    public function countByRole($role)
    {
        $sql = "SELECT COUNT(*) as count FROM utilisateurs WHERE role = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$role]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'];
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
