<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Ventes</title>
</head>
<body>
    <h1>Liste des Ventes</h1>
    <a href="<?=webRoot?>/?controller=Vente&action=create">Nouvelle Vente</a>
    <form action="<?=webRoot?>/?controller=Vente&action=filterByDate" method="POST">
        <label for="date">Filtrer par Date:</label>
        <input type="date" id="date" name="date">
        <button type="submit">Filtrer</button>
    </form>
    <form action="<?=webRoot?>/?controller=Vente&action=filterByClient" method="POST">
        <label for="client_id">Filtrer par Client:</label>
        <select id="client_id" name="client_id">
            <!-- Options des clients -->
        </select>
        <button type="submit">Filtrer</button>
    </form>
    <form action="<?=webRoot?>/?controller=Vente&action=filterByArticle" method="POST">
        <label for="article_id">Filtrer par Article:</label>
        <select id="article_id" name="article_id">
            <!-- Options des articles -->
        </select>
        <button type="submit">Filtrer</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Article</th>
                <th>Client</th>
                <th>Quantité</th>
                <th>Prix</th>
                <th>Montant</th>
                <th>Observation</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ventes as $vente): ?>
                <tr>
                    <td><?php echo $vente['date']; ?></td>
                    <td><?php echo $vente['article_id']; ?></td>
                    <td><?php echo $vente['client_id']; ?></td>
                    <td><?php echo $vente['quantite']; ?></td>
                    <td><?php echo $vente['prix']; ?></td>
                    <td><?php echo $vente['montant']; ?></td>
                    <td><?php echo $vente['observation']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>