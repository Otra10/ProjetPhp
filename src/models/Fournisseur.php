<?php

namespace App\Model;

use App\Core\Model;
use PDO;

class Fournisseur extends Model
{
    public function __construct()
    {
        $this->ouvrirConnexion();
    }

    public function create($nom, $prenom, $telephone_portable, $telephone_fixe, $adresse, $photo)
    {
        $sql = "
            INSERT INTO fournisseurs (nom, prenom, telephonePortable, telephoneFixe, adresse, photo)
            VALUES (?, ?, ?, ?, ?, ?)
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nom, $prenom, $telephone_portable, $telephone_fixe, $adresse, $photo]);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM fournisseurs";
        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM fournisseurs WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $nom, $prenom, $telephonePortable, $telephoneFixe, $adresse, $photo)
    {
        $sql = "
            UPDATE fournisseurs
            SET nom = ?, prenom = ?, telephonePortable = ?, telephoneFixe = ?, adresse = ?, photo = ?
            WHERE id = ?
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nom, $prenom, $telephonePortable, $telephoneFixe, $adresse, $photo, $id]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM fournisseurs WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
