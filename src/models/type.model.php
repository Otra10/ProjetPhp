<?php 
namespace App\Model;
use App\Core\Model;

use PDO;

class Type extends Model {
    private $pdo;

    public function __construct() {
        $this->ouvrirConnexion();
    }

    public function create($nom) {
        $sql = "INSERT INTO type (nom) VALUES (?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nom]);
    }

    public function getAll() {
        $sql = "SELECT * FROM type";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM type WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id,$nom) {
        $sql = "UPDATE type SET nom = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nom, $id]);
    }

    public function delete($id) {
        $sql = "DELETE FROM type WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}