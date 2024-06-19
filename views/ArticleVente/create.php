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
        <label for="prix">Prix Vente:</label>
        <input type="number" id="prix" name="prix" step="0.01" required>
        <br>
        <label for="qte">Quantité Stock:</label>
        <input type="number" id="qte" name="qte" required>
        <br>
        <label for="montant">Montant Vente:</label>
        <input type="number" id="montant" name="montant" step="0.01" required>
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