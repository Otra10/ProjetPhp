<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Article de Vente</title>
</head>
<body>
    <h1>Modifier Article de Vente</h1>
    <form action="<?=webRoot?>" method="POST">
        <label for="libelle">Libellé:</label>
        <input type="text" id="libelle" name="libelle" value="<?php echo $article['libelle']; ?>" required>
        <br>
        <label for="prix">Prix Vente:</label>
        <input type="number" id="prix" name="prix" step="0.01" value="<?php echo $article['prix']; ?>" required>
        <br>
        <label for="qte">Quantité Stock:</label>
        <input type="number" id="qte" name="qte" value="<?php echo $article['qte']; ?>" required>
        <br>
        <label for="montant">Montant Vente:</label>
        <input type="number" id="montant" name="montant" step="0.01" value="<?php echo $article['montant']; ?>" required>
        <br>
        <label for="photo">Photo:</label>
        <input type="text" id="photo" name="photo" value="<?php echo $article['photo']; ?>" required>
        <br>
        <button type="submit">Mettre à jour</button>
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="id" value="<?= $article['id']; ?>">
        <input type="hidden" name="controller" value="ArticleVente">
    </form>
</body>
</html>