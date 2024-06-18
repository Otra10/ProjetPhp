<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Client</title>
</head>
<body>
    <h1>Modifier Client</h1>
    <form action="<?=webRoot?>/<?php echo $client['id']; ?>" method="POST">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?php echo $client['nom']; ?>" required>
        <br>
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $client['prenom']; ?>" required>
        <br>
        <label for="telephone_portable">Téléphone Portable:</label>
        <input type="text" id="telephone_portable" name="telephone_portable" value="<?php echo $client['telephone_portable']; ?>" required>
        <br>
        <label for="observations">Observations:</label>
        <textarea id="observations" name="observations"><?php echo $client['observations']; ?></textarea>
        <br>
        <label for="adresse">Adresse:</label>
        <input type="text" id="adresse" name="adresse" value="<?php echo $client['adresse']; ?>" required>
        <br>
        <label for="photo">Photo:</label>
        <input type="text" id="photo" name="photo" value="<?php echo $client['photo']; ?>" required>
        <br>
        <button type="submit">Mettre à jour</button>
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="controller" value="Client">
    </form>
</body>
</html>