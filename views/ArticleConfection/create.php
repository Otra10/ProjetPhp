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
        <label for="prixAchat">Prix Achat:</label>
        <input type="number" id="prixAchat" name="prixAchat" step="0.01" required>
        <br>
        <label for="qteAchat">Quantité Achat:</label>
        <input type="number" id="qteAchat" name="qteAchat" required>
        <br>
        <label for="qteStock">Quantité Stock:</label>
        <input type="number" id="qteStock" name="qteStock" required>
        <br>
        <label for="montantStock">Montant en Stock:</label>
        <input type="number" id="montantStock" name="montantStock" step="0.01" required>
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