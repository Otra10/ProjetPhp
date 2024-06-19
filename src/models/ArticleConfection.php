<?php

namespace App\Model;

use App\Core\Model;
use PDO;

class ArticleConfection extends Model
{
    public function __construct()
    {
        $this->ouvrirConnexion();
    }

    public function create($libelle, $prixAchat, $qteAchat, $qteStock, $montantStock, $photo)
    {
        $sql = "
            INSERT INTO articleconfection (libelle, prixAchat, qteAchat, qteStock, montantStock, photo)
            VALUES (?, ?, ?, ?, ?, ?)
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$libelle, $prixAchat, $qteAchat, $qteStock, $montantStock, $photo]);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM articleconfection";
        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM articleconfection WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $libelle, $prixAchat, $qteAchat, $qteStock, $montantStock, $photo)
    {
        $sql = "
            UPDATE articleconfection
            SET libelle = ?, prixAchat = ?, qteAchat = ?, qteStock = ?, montantStock = ?, photo = ?
            WHERE id = ?
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$libelle, $prixAchat, $qteAchat, $qteStock, $montantStock, $photo, $id]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM articleconfection WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
