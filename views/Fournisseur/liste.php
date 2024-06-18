<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Fournisseurs</title>
</head>
<body>
    <h1>Liste des Fournisseurs</h1>
    <a href="/fournisseurs/create">Nouveau Fournisseur</a>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone Portable</th>
                <th>Téléphone Fixe</th>
                <th>Adresse</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fournisseurs as $fournisseur): ?>
                <tr>
                    <td><?php echo $fournisseur['nom']; ?></td>
                    <td><?php echo $fournisseur['prenom']; ?></td>
                    <td><?php echo $fournisseur['telephone_portable']; ?></td>
                    <td><?php echo $fournisseur['telephone_fixe']; ?></td>
                    <td><?php echo $fournisseur['adresse']; ?></td>
                    <td><img src="<?php echo $fournisseur['photo']; ?>" alt="Photo de <?php echo $fournisseur['nom']; ?>" width="50"></td>
                    <td>
                        <a href="<?=webRoot?>/?controller=Fournisseur&action=edit/<?php echo $fournisseur['id']; ?>">Modifier</a>
                        <a href="<?=webRoot?>/?controller=ArticleConfection&action=delete<?php echo $fournisseur['id']; ?>">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>