<?php 
namespace App\Model;

use Model;
use PDO;

class ArticleConfection extends Model {
    private $pdo;

    public function __construct() {
        $this->ouvrirConnexion();
    }

    public function create($libelle, $prix_achat, $quantite_achat, $quantite_stock, $montant_stock, $photo) {
        $sql = "INSERT INTO articles_confection (libelle, prix_achat, quantite_achat, quantite_stock, montant_stock, photo) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$libelle, $prix_achat, $quantite_achat, $quantite_stock, $montant_stock, $photo]);
    }

    public function getAll() {
        $sql = "SELECT * FROM articles_confection";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM articles_confection WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $libelle, $prix_achat, $quantite_achat, $quantite_stock, $montant_stock, $photo) {
        $sql = "UPDATE articles_confection SET libelle = ?, prix_achat = ?, quantite_achat = ?, quantite_stock = ?, montant_stock = ?, photo = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$libelle, $prix_achat, $quantite_achat, $quantite_stock, $montant_stock, $photo, $id]);
    }

    public function delete($id) {
        $sql = "DELETE FROM articles_confection WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}