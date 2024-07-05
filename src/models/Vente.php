<?php

namespace App\Model;

use App\Core\Model;
use PDO;
use PDOException;

class Vente extends Model
{
    public function __construct()
    {
        $this->ouvrirConnexion();
    }
    public function create($date, $clientId, $articles, $observation) {
        try {
            // Commence une transaction
            $this->pdo->beginTransaction();

            // Insertion de la vente
            $sql = "INSERT INTO Vente (date, clientId, observation) VALUES (:date, :clientId, :observation)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                'date' => $date,
                'clientId' => $clientId,
                'observation' => $observation
            ]);

            // Récupère l'ID de la vente nouvellement créée
            $venteId = $this->pdo->lastInsertId();
            if (!$venteId) {
                throw new PDOException("Failed to retrieve vente ID after insertion.");
            }

            // Log the venteId
            error_log("Vente ID: " . $venteId);

            // Insertion des articles de la vente
            foreach ($articles as $article) {
                error_log("Inserting article ID: " . $article['id'] . " with quantity: " . $article['quantite']);
                $sql = "INSERT INTO vente_articles (vente_id, articleVenteId, qte) VALUES (:vente_id, :articleVenteId, :qte)";
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute([
                    'vente_id' => $venteId,
                    'articleVenteId' => $article['id'],
                    'qte' => $article['quantite']
                ]);

                // Mise à jour du stock et du montant des ventes de l'article
                $sql = "UPDATE articlevente SET 
                            qte = qte - :qte,
                            montant = montant + (:qte * prix)
                        WHERE id = :articleVenteId";
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute([
                    'qte' => $article['quantite'],
                    'articleVenteId' => $article['id']
                ]);
            }

            // Valide la transaction
            $this->pdo->commit();
        } catch (PDOException $e) {
            // Annule la transaction en cas d'erreur
            $this->pdo->rollBack();
            error_log("Error during vente creation: " . $e->getMessage());
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
                    SUM(va.qte * a.prix) AS montant_total,
                    GROUP_CONCAT(a.libelle SEPARATOR ', ') AS articles,
                    c.nom,
                    c.prenom
                FROM 
                    vente v
                JOIN 
                    vente_articles va ON v.id = va.vente_id
                JOIN 
                    articlevente a ON va.articleVenteId = a.id
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
                    SUM(va.qte * a.prix) AS montant_total,
                    GROUP_CONCAT(a.libelle SEPARATOR ', ') AS articles,
                    c.nom,
                    c.prenom
                FROM 
                    vente v
                JOIN 
                    vente_articles va ON v.id = va.vente_id
                JOIN 
                    articlevente a ON va.articleVenteId = a.id
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
                    SUM(va.qte * a.prix) AS montant_total,
                    GROUP_CONCAT(a.libelle SEPARATOR ', ') AS articles,
                    c.nom,
                    c.prenom
                FROM 
                    vente v
                JOIN 
                    vente_articles va ON v.id = va.vente_id
                JOIN 
                    articlevente a ON va.articleVenteId = a.id
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
                    SUM(va.qte * a.prix) AS montant_total,
                    GROUP_CONCAT(a.libelle SEPARATOR ', ') AS articles,
                    c.nom,
                    c.prenom
                FROM 
                    vente v
                JOIN 
                    vente_articles va ON v.id = va.vente_id
                JOIN 
                    articlevente a ON va.articleVenteId = a.id
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
























