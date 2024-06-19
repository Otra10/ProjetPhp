<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouvelle Vente</title>
</head>
<body>
    <h1>Nouvelle Vente</h1>
    <form action="<?=webRoot?>" method="POST">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        <br>
        <label for="clientId">Filtrer par Client:</label>
        <select id="clientId" name="clientId">
        <?php foreach ($clients as $client):?>
                    <option value=<?=$client['id']?>><?=$client['nom']?></option>;
                <?php endforeach?>
        </select>
        <br>
        <label for="articleId">Filtrer par Article:</label>
        <select id="articleId" name="articleId">
            <?php foreach ($articles as $article):?>
                    <option value=<?=$article['id']?>><?=$article['libelle']?></option>;
                <?php endforeach?>
        </select>
        <br>
        <label for="qte">Quantité:</label>
        <input type="number" id="qte" name="qte" required>
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
        <input type="hidden" name="controller" value="Vente">
    </form>
</body>
</html>