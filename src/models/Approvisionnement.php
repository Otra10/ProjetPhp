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
            INSERT INTO approvisionnements (date, article_id, fournisseur_id, quantite, prix, montant, observation)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$date, $article_id, $fournisseur_id, $quantite, $prix, $montant, $observation]);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM approvisionnements";
        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function search($criteria)
    {
        // Implémenter la logique de recherche ici
    }
}
