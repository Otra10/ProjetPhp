<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouvel Article de Vente</title>
</head>
<body>
    <h1>Nouvel Article de Vente</h1>
    <form action="<?=webRoot?>" method="POST">
        <label for="libelle">Libellé:</label>
        <input type="text" id="libelle" name="libelle" required>
        <br>
        <label for="prix_vente">Prix Vente:</label>
        <input type="number" id="prix_vente" name="prix_vente" step="0.01" required>
        <br>
        <label for="quantite_stock">Quantité Stock:</label>
        <input type="number" id="quantite_stock" name="quantite_stock" required>
        <br>
        <label for="montant_vente">Montant Vente:</label>
        <input type="number" id="montant_vente" name="montant_vente" step="0.01" required>
        <br>
        <label for="photo">Photo:</label>
        <input type="text" id="photo" name="photo" required>
        <br>
        <button type="submit">Enregistrer</button>
        <input type="hidden" name="action" value="create">
        <input type="hidden" name="controller" value="ArticleVente">
    </form>
</body>
</html>