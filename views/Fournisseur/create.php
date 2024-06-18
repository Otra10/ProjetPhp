<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouveau Fournisseur</title>
</head>
<body>
    <h1>Nouveau Fournisseur</h1>
    <form action="<?=webRoot?>" method="POST">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>
        <br>
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required>
        <br>
        <label for="telephone_portable">Téléphone Portable:</label>
        <input type="text" id="telephone_portable" name="telephone_portable" required>
        <br>
        <label for="telephone_fixe">Téléphone Fixe:</label>
        <input type="text" id="telephone_fixe" name="telephone_fixe">
        <br>
        <label for="adresse">Adresse:</label>
        <input type="text" id="adresse" name="adresse" required>
        <br>
        <label for="photo">Photo:</label>
        <input type="text" id="photo" name="photo" required>
        <br>
        <button type="submit">Enregistrer</button>
        <input type="hidden" name="action" value="create">
        <input type="hidden" name="controller" value="Fournisseur">
    </form>
</body>
</html>