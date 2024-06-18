<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouvel Approvisionnement</title>
</head>
<body>
    <h1>Nouvel Approvisionnement</h1>
    <form action="<?=webRoot?>" method="POST">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        <br>
        <label for="article_id">Article:</label>
        <select id="article_id" name="article_id">
            <!-- Options des articles -->
        </select>
        <br>
        <label for="fournisseur_id">Fournisseur:</label>
        <select id="fournisseur_id" name="fournisseur_id">
            <!-- Options des fournisseurs -->
        </select>
        <br>
        <label for="quantite">Quantité:</label>
        <input type="number" id="quantite" name="quantite" required>
        <br>
        <label for="prix">Prix:</label>
        <input type="number" id="prix" name="prix" step="0.01" required>
        <br>
        <label for="montant">Montant:</label>
        <input type="number" id="montant" name="montant" step="0.01" required>
        <br>
        <label for="observation">Observation:</label>
        <textarea id="observation" name="observation"></textarea>
        <br>
        <button type="submit">Enregistrer</button>
        <input type="hidden" name="action" value="create">
        <input type="hidden" name="controller" value="Approvisionnement">
    </form>
</body>
</html>