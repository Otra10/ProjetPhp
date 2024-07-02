<?php

namespace App\Model;

use App\Core\Model;
use PDO;

class ArticleVente extends Model
{
    public function __construct()
    {
        $this->ouvrirConnexion();
    }

    public function create($libelle, $prix, $qte, $montant, $photo)
    {
        $sql = "
            INSERT INTO articlevente (libelle, prix, qte, montant, photo)
            VALUES (?, ?, ?, ?, ?)
        ";
        $stmt = $this->pdo->prepare($sql);
$stmt->execute([$libelle, $prix, $qte, $montant, $photo]);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM articlevente";
        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM articlevente WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $libelle, $prix, $qte, $montant, $photo)
    {
        $sql = "
            UPDATE articlevente
            SET libelle = ?, prix = ?, qte = ?, montant = ?, photo = ?
            WHERE id = ?
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$libelle, $prix, $qte, $montant, $photo, $id]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM articlevente WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
