<?php 
namespace App\Model;

use App\Core\Model;
use PDO;

class Approvisionnement extends Model
{
    public function __construct()
    {
        $this->ouvrirConnexion();
    }

    public function create($date, $article_id, $fournisseur_id, $quantite, $prix, $montant, $observation) {
        $sql = "
            INSERT INTO approvisionnement (date, articleConfectionId, fournisseurId, qte, prix, montant, observation)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$date, $article_id, $fournisseur_id, $quantite, $prix, $montant, $observation]);
    }

    public function getAll()
    {
        $sql = "SELECT a.*, c.libelle, t.nom FROM `approvisionnement` a
                JOIN articleConfection c ON a.articleConfectionId = c.id
                JOIN fournisseurs t ON a.fournisseurId = t.id";
        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM `approvisionnement` WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $date, $article_id, $fournisseur_id, $quantite, $prix, $montant, $observation) {
        $sql = "UPDATE approvisionnement SET date = ?, articleConfectionId = ?, fournisseurId = ?, qte = ?, prix = ?, montant = ?, observation = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$date, $article_id, $fournisseur_id, $quantite, $prix, $montant, $observation, $id]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `approvisionnement` WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
