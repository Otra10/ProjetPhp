<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Fournisseur</title>
</head>
<body>
    <h1>Modifier Fournisseur</h1>
    <form action="<?=webRoot?>" method="POST">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?= $fournisseur['nom']; ?>" required>
        <br>
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" value="<?= $fournisseur['prenom']; ?>" required>
        <br>
        <label for="telephonePortable">Téléphone Portable:</label>
        <input type="text" id="telephonePortable" name="telephonePortable" value="<?= $fournisseur['telephonePortable']; ?>" required>
        <br>
        <label for="telephoneFixe">Téléphone Fixe:</label>
        <input type="text" id="telephoneFixe" name="telephoneFixe" value="<?= $fournisseur['telephoneFixe']; ?>">
        <br>
        <label for="adresse">Adresse:</label>
        <input type="text" id="adresse" name="adresse" value="<?= $fournisseur['adresse']; ?>" required>
        <br>
        <label for="photo">Photo:</label>
        <input type="text" id="photo" name="photo" value="<?= $fournisseur['photo']; ?>" required>
        <br>
        <button type="submit">Mettre à jour</button>
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="id" value="<?= $fournisseur['id']; ?>">
        <input type="hidden" name="controller" value="Fournisseur">
    </form>
</body>
</html>