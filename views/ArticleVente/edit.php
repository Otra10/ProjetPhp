<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Article de Vente</title>
</head>
<body>
    <h1>Modifier Article de Vente</h1>
    <form action="<?=webRoot?>/<?php echo $article['id']; ?>" method="POST">
        <label for="libelle">Libellé:</label>
        <input type="text" id="libelle" name="libelle" value="<?php echo $article['libelle']; ?>" required>
        <br>
        <label for="prix_vente">Prix Vente:</label>
        <input type="number" id="prix_vente" name="prix_vente" step="0.01" value="<?php echo $article['prix_vente']; ?>" required>
        <br>
        <label for="quantite_stock">Quantité Stock:</label>
        <input type="number" id="quantite_stock" name="quantite_stock" value="<?php echo $article['quantite_stock']; ?>" required>
        <br>
        <label for="montant_vente">Montant Vente:</label>
        <input type="number" id="montant_vente" name="montant_vente" step="0.01" value="<?php echo $article['montant_vente']; ?>" required>
        <br>
        <label for="photo">Photo:</label>
        <input type="text" id="photo" name="photo" value="<?php echo $article['photo']; ?>" required>
        <br>
        <button type="submit">Mettre à jour</button>
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="controller" value="ArticleVente">
    </form>
</body>
</html>