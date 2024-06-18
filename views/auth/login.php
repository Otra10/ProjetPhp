<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <?php if (isset($error)): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="<?=webRoot?>" method="POST">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Se connecter</button>
        <input type="hidden" name="action" value="login">
        <input type="hidden" name="controller" value="Authentification">
    </form>
</body>
</html>