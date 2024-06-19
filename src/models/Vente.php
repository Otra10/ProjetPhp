<?php 
namespace App\Model;
use App\Core\Model;

use PDO;

class Vente extends Model{
    private $pdo;

    public function __construct() {
        $this->ouvrirConnexion();
    }

    public function create($date, $article_id, $client_id, $quantite, $prix, $montant, $observation) {
        $sql = "INSERT INTO ventes (date, article_id, client_id, quantite, prix, montant, observation) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$date, $article_id, $client_id, $quantite, $prix, $montant, $observation]);
    }

    public function getAll() {
        $sql = "SELECT * FROM ventes";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByDate($date) {
        $sql = "SELECT * FROM ventes WHERE date = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$date]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByClient($client_id) {
        $sql = "SELECT * FROM ventes WHERE client_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$client_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByArticle($article_id) {
        $sql = "SELECT * FROM ventes WHERE article_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$article_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}