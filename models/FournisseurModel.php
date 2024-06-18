<?php
namespace App\Model;

use Model;
use PDO;

class Fournisseur extends Model{
    private $pdo;

    public function __construct() {
        $this->ouvrirConnexion();
    }

    public function create($nom, $prenom, $telephone_portable, $telephone_fixe, $adresse, $photo) {
        $sql = "INSERT INTO fournisseurs (nom, prenom, telephone_portable, telephone_fixe, adresse, photo) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nom, $prenom, $telephone_portable, $telephone_fixe, $adresse, $photo]);
    }

    public function getAll() {
        $sql = "SELECT * FROM fournisseurs";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM fournisseurs WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $nom, $prenom, $telephone_portable, $telephone_fixe, $adresse, $photo) {
        $sql = "UPDATE fournisseurs SET nom = ?, prenom = ?, telephone_portable = ?, telephone_fixe = ?, adresse = ?, photo = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nom, $prenom, $telephone_portable, $telephone_fixe, $adresse, $photo, $id]);
    }

    public function delete($id) {
        $sql = "DELETE FROM fournisseurs WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}