<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Articles de Confection</title>
</head>
<body>
    <h1>Liste des Articles de Confection</h1>
    <a href="<?=webRoot?>/?controller=ArticleConfection&action=create">Nouvel Article de Confection</a>
    <table>
        <thead>
            <tr>
                <th>Libellé</th>
                <th>Prix Achat</th>
                <th>Quantité Achat</th>
                <th>Quantité Stock</th>
                <th>Montant en Stock</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?php echo $article['libelle']; ?></td>
                    <td><?php echo $article['prixAchat']; ?></td>
                    <td><?php echo $article['qteAchat']; ?></td>
                    <td><?php echo $article['qteStock']; ?></td>
                    <td><?php echo $article['montantStock']; ?></td>
                    <td><img src="<?php echo $article['photo']; ?>" alt="Photo de <?php echo $article['libelle']; ?>" width="50"></td>
                    <td>
                        <a href="<?=webRoot?>/?controller=ArticleConfection&action=edit&id=<?= $article['id']; ?>">Modifier</a>
                        <a href="<?=webRoot?>/?controller=ArticleConfection&action=delete&id=<?= $article['id']; ?>">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>