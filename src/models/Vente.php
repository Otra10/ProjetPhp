<?php

namespace App\Model;

use App\Core\Model;
use InvalidArgumentException;
use PDO;

class Vente extends Model
{
    public function __construct()
    {
        $this->ouvrirConnexion();
    }

    public function create($date, $clientId, $articles, $observation)
    
    {
        
        $this->pdo->beginTransaction();
        try {
            $sql = "
                INSERT INTO Vente (date, clientId, observation)
                VALUES (?, ?, ?)
            ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$date, $clientId, $observation]);
            $vente_id = $this->pdo->lastInsertId();

            $totalMontant = 0;
            foreach ($articles as $article) {
                $article_id = $article['articleVenteId'];
                $quantite = $article['qte'];
                $prix = $article['prix'];
                $montant = $quantite * $prix;
                $totalMontant += $montant;

                $sql = "
                    INSERT INTO vente_articles (vente_id, articleVenteId, qte, prix, montant)
                    VALUES (?, ?, ?, ?, ?)
                ";
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute([$vente_id, $article_id, $quantite, $prix, $montant]);
            }

            // Update total amount in the ventes table
            $sql = "
                UPDATE Vente
                SET montant = ?
                WHERE id = ?
            ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$totalMontant, $vente_id]);

            $this->pdo->commit();
        } catch (\Exception $e) {
            $this->pdo->rollBack();
            throw $e;
        }
    }

    public function getAll()
    {
        $sql = "SELECT 
                    v.id AS venteId,
                    v.date,
                    v.observation,
                    SUM(va.qte) AS qte_totale,
                    SUM(va.montant) AS montant_total,
                    GROUP_CONCAT(a.libelle SEPARATOR ', ') AS articles,
                    c.nom,
                    c.prenom
                FROM 
                    Vente v
                JOIN 
                    vente_articles va ON v.id = va.vente_id
                JOIN 
                    articleVente a ON va.articleVenteId = a.id
                JOIN 
                    clients c ON v.clientId = c.id
                GROUP BY 
                    v.id, v.date, v.observation, c.nom, c.prenom";
        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByDate($date)
    {
        $sql = "SELECT 
                    v.id AS venteId,
                    v.date,
                    v.observation,
                    SUM(va.qte) AS qte_totale,
                    SUM(va.montant) AS montant_total,
                    GROUP_CONCAT(a.libelle SEPARATOR ', ') AS articles,
                    c.nom,
                    c.prenom
                FROM 
                    Vente v
                JOIN 
                    vente_articles va ON v.id = va.vente_id
                JOIN 
                    articleVente a ON va.articleVenteId = a.id
                JOIN 
                    clients c ON v.clientId = c.id
                WHERE 
                    v.date = ?
                GROUP BY 
                    v.id, v.date, v.observation, c.nom, c.prenom";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$date]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByClient($clientId)
    {
        $sql = "SELECT 
                    v.id AS venteId,
                    v.date,
                    v.observation,
                    SUM(va.qte) AS qte_totale,
                    SUM(va.montant) AS montant_total,
                    GROUP_CONCAT(a.libelle SEPARATOR ', ') AS articles,
                    c.nom,
                    c.prenom
                FROM 
                    Vente v
                JOIN 
                    vente_articles va ON v.id = va.vente_id
                JOIN 
                    articleVente a ON va.articleVenteId = a.id
                JOIN 
                    clients c ON v.clientId = c.id
                WHERE 
                    v.clientId = ?
                GROUP BY 
                    v.id, v.date, v.observation, c.nom, c.prenom";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$clientId]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByArticle($articleId)
    {
        $sql = "SELECT 
                    v.id AS venteId,
                    v.date,
                    v.observation,
                    SUM(va.qte) AS qte_totale,
                    SUM(va.montant) AS montant_total,
                    GROUP_CONCAT(a.libelle SEPARATOR ', ') AS articles,
                    c.nom,
                    c.prenom
                FROM 
                    Vente v
                JOIN 
                    vente_articles va ON v.id = va.vente_id
                JOIN 
                    articleVente a ON va.articleVenteId = a.id
                JOIN 
                    clients c ON v.clientId = c.id
                WHERE 
                    va.articleVenteId = ?
                GROUP BY 
                    v.id, v.date, v.observation, c.nom, c.prenom";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$articleId]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
