<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Articles de Vente</title>
</head>
<body>
    <h1>Liste des Articles de Vente</h1>
    <a href="<?=webRoot?>/?controller=ArticleVente&action=create">Nouvel Article de Vente</a>
    <table>
        <thead>
            <tr>
                <th>Libellé</th>
                <th>Prix Vente</th>
                <th>Quantité Stock</th>
                <th>Montant Vente</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?php echo $article['libelle']; ?></td>
                    <td><?php echo $article['prix_vente']; ?></td>
                    <td><?php echo $article['quantite_stock']; ?></td>
                    <td><?php echo $article['montant_vente']; ?></td>
                    <td><img src="<?php echo $article['photo']; ?>" alt="Photo de <?php echo $article['libelle']; ?>" width="50"></td>
                    <td>
                        <a href="<?=webRoot?>/?controller=ArticleVente&action=edit/<?php echo $article['id']; ?>">Modifier</a>
                        <a href="<?=webRoot?>/?controller=ArticleVente&action=delete/<?php echo $article['id']; ?>">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>