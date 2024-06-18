<?php 
namespace App\Model;

use Model;
use PDO;

class ArticleVente extends Model{
    private $pdo;

    public function __construct() {
        $this->ouvrirConnexion();
    }

    public function create($libelle, $prix_vente, $quantite_stock, $montant_vente, $photo) {
        $sql = "INSERT INTO articles_vente (libelle, prix_vente, quantite_stock, montant_vente, photo) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$libelle, $prix_vente, $quantite_stock, $montant_vente, $photo]);
    }

    public function getAll() {
        $sql = "SELECT * FROM articles_vente";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM articles_vente WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $libelle, $prix_vente, $quantite_stock, $montant_vente, $photo) {
        $sql = "UPDATE articles_vente SET libelle = ?, prix_vente = ?, quantite_stock = ?, montant_vente = ?, photo = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$libelle, $prix_vente, $quantite_stock, $montant_vente, $photo, $id]);
    }

    public function delete($id) {
        $sql = "DELETE FROM articles_vente WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}