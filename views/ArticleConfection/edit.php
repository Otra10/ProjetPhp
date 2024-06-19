<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Article de Confection</title>
</head>
<body>
    <h1>Modifier Article de Confection</h1>
    <form action="<?=webRoot?>" method="POST">
        <label for="libelle">Libellé:</label>
        <input type="text" id="libelle" name="libelle" value="<?php echo $article['libelle']; ?>" required>
        <br>
        <label for="prixAchat">Prix Achat:</label>
        <input type="number" id="prixAchat" name="prixAchat" step="0.01" value="<?php echo $article['prixAchat']; ?>" required>
        <br>
        <label for="qteAchat">Quantité Achat:</label>
        <input type="number" id="qteAchat" name="qteAchat" value="<?php echo $article['qteAchat']; ?>" required>
        <br>
        <label for="qteStock">Quantité Stock:</label>
        <input type="number" id="qteStock" name="qteStock" value="<?php echo $article['qteStock']; ?>" required>
        <br>
        <label for="montantStock">Montant en Stock:</label>
        <input type="number" id="montantStock" name="montantStock" step="0.01" value="<?php echo $article['montantStock']; ?>" required>
        <br>
        <label for="photo">Photo:</label>
        <input type="text" id="photo" name="photo" value="<?php echo $article['photo']; ?>" required>
        <br>
        <button type="submit">Mettre à jour</button>
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="id" value="<?= $article['id']; ?>">
        <input type="hidden" name="controller" value="ArticleConfection">
    </form>
</body>
</html>