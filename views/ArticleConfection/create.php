<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouvel Article de Confection</title>
</head>
<body>
    <h1>Nouvel Article de Confection</h1>
    <form action="<?=webRoot?>" method="POST">
        <label for="libelle">Libellé:</label>
        <input type="text" id="libelle" name="libelle" required>
        <br>
        <label for="prix_achat">Prix Achat:</label>
        <input type="number" id="prix_achat" name="prix_achat" step="0.01" required>
        <br>
        <label for="quantite_achat">Quantité Achat:</label>
        <input type="number" id="quantite_achat" name="quantite_achat" required>
        <br>
        <label for="quantite_stock">Quantité Stock:</label>
        <input type="number" id="quantite_stock" name="quantite_stock" required>
        <br>
        <label for="montant_stock">Montant en Stock:</label>
        <input type="number" id="montant_stock" name="montant_stock" step="0.01" required>
        <br>
        <label for="photo">Photo:</label>
        <input type="text" id="photo" name="photo" required>
        <br>
        <button type="submit">Enregistrer</button>
        <input type="hidden" name="action" value="create">
        <input type="hidden" name="controller" value="ArticleConfection">
    </form>
</body>
</html>