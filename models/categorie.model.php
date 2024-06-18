<?php 
namespace App\Model;

use Model;
use PDO;

class Categorie extends Model {
    private $pdo;

    public function __construct() {
        $this->ouvrirConnexion();
    }

    public function create($nom) {
        $sql = "INSERT INTO categorie (nom) VALUES (?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nom]);
    }

    public function getAll() {
        $sql = "SELECT * FROM categorie";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM categorie WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id,$nom) {
        $sql = "UPDATE categorie SET nom = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nom, $id]);
    }

    public function delete($id) {
        $sql = "DELETE FROM categorie WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}