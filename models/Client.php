<?php 
namespace App\Model;

use Model;
use PDO;

class Client extends Model{
    private $pdo;

    public function __construct() {
        $this->ouvrirConnexion();
    }

    public function create($nom, $prenom, $telephone_portable, $observations, $adresse, $photo) {
        $sql = "INSERT INTO clients (nom, prenom, telephone_portable, observations, adresse, photo) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nom, $prenom, $telephone_portable, $observations, $adresse, $photo]);
    }

    public function getAll() {
        $sql = "SELECT * FROM clients";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM clients WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $nom, $prenom, $telephone_portable, $observations, $adresse, $photo) {
        $sql = "UPDATE clients SET nom = ?, prenom = ?, telephone_portable = ?, observations = ?, adresse = ?, photo = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nom, $prenom, $telephone_portable, $observations, $adresse, $photo, $id]);
    }

    public function delete($id) {
        $sql = "DELETE FROM clients WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}