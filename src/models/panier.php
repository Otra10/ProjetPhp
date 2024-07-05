<?php

namespace App\Model;

class Panier {
    private $articles = [];

    public function ajouterArticle($articleId, $quantite) {
        if (isset($this->articles[$articleId])) {
            $this->articles[$articleId] += $quantite;
        } else {
            $this->articles[$articleId] = $quantite;
        }
    }

    public function retirerArticle($articleId) {
        if (isset($this->articles[$articleId])) {
            unset($this->articles[$articleId]);
        }
    }

    public function getArticles() {
        return $this->articles;
    }

    public function viderPanier() {
        $this->articles = [];
    }
}
