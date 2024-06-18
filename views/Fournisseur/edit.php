<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Fournisseur</title>
</head>
<body>
    <h1>Modifier Fournisseur</h1>
    <form action="<?=webRoot?>/<?php echo $fournisseur['id']; ?>" method="POST">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?php echo $fournisseur['nom']; ?>" required>
        <br>
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $fournisseur['prenom']; ?>" required>
        <br>
        <label for="telephone_portable">Téléphone Portable:</label>
        <input type="text" id="telephone_portable" name="telephone_portable" value="<?php echo $fournisseur['telephone_portable']; ?>" required>
        <br>
        <label for="telephone_fixe">Téléphone Fixe:</label>
        <input type="text" id="telephone_fixe" name="telephone_fixe" value="<?php echo $fournisseur['telephone_fixe']; ?>">
        <br>
        <label for="adresse">Adresse:</label>
        <input type="text" id="adresse" name="adresse" value="<?php echo $fournisseur['adresse']; ?>" required>
        <br>
        <label for="photo">Photo:</label>
        <input type="text" id="photo" name="photo" value="<?php echo $fournisseur['photo']; ?>" required>
        <br>
        <button type="submit">Mettre à jour</button>
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="controller" value="Fournisseur">
    </form>
</body>
</html>