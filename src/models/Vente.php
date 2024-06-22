<?php

namespace App\Model;

use App\Core\Model;
use PDO;

class Vente extends Model
{
    public function __construct()
    {
        $this->ouvrirConnexion();
    }

    public function create($date, $articleId, $clientId, $quantite, $prix, $montant, $observation)
    {
        $sql = "
            INSERT INTO ventes (date, articleVenteId, clientId, qte, prix, montant, observation)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$date, $articleId, $clientId, $quantite, $prix, $montant, $observation]);
    }

    public function getAll()
    {
        $sql = "select * from `ventes` a, articleVente c, clients t where a.`clientId` = t.id and a.articleVenteId=c.id";
        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByDate($date)
    {
        $sql = "SELECT 
        ventes.id AS venteId,
        ventes.date,
        ventes.qte,
        ventes.prix,
        ventes.montant,
        ventes.observation,
        articleVente.libelle AS libelle,
        clients.nom AS nom,
        clients.prenom AS prenom
    FROM 
        ventes
    JOIN 
        articleVente ON ventes.articleVenteId = articleVente.id
    JOIN 
        clients ON ventes.clientId = clients.id
    WHERE 
        ventes.date = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$date]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByClient($clientId)
    {
        $sql = "SELECT 
        ventes.id AS venteId,
        ventes.date,
        ventes.qte,
        ventes.prix,
        ventes.montant,
        ventes.observation,
        articleVente.libelle AS libelle,
        clients.nom AS nom,
        clients.prenom AS prenom
    FROM 
        ventes
    JOIN 
        articleVente ON ventes.articleVenteId = articleVente.id
    JOIN 
        clients ON ventes.clientId = clients.id
    WHERE 
        ventes.clientId = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$clientId]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByArticle($articlId)
    {
        $sql = "SELECT 
        ventes.id AS venteId,
        ventes.date,
        ventes.qte,
        ventes.prix,
        ventes.montant,
        ventes.observation,
        articleVente.libelle AS libelle,
        clients.nom AS nom,
        clients.prenom AS prenom
    FROM 
        ventes
    JOIN 
        articleVente ON ventes.articleVenteId = articleVente.id
    JOIN 
        clients ON ventes.clientId = clients.id
    WHERE 
        ventes.articleVenteId = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$articlId]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
