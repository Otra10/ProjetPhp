<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Clients</title>
</head>
<body>
    <h1>Liste des Clients</h1>
    <a href="<?=webRoot?>/?controller=Client&action=create">Nouveau Client</a>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone Portable</th>
                <th>Observations</th>
                <th>Adresse</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?php echo $client['nom']; ?></td>
                    <td><?php echo $client['prenom']; ?></td>
                    <td><?php echo $client['telephonePortable']; ?></td>
                    <td><?php echo $client['observation']; ?></td>
                    <td><?php echo $client['adresse']; ?></td>
                    <td><img src="<?php echo $client['photo']; ?>" alt="Photo de <?php echo $client['nom']; ?>" width="50"></td>
                    <td>
                        <a href="<?=webRoot?>/?controller=Client&action=edit&id=<?php echo $client['id']; ?>">Modifier</a>
                        <a href="<?=webRoot?>/?controller=Client&action=delete&id=<?php echo $client['id']; ?>">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>