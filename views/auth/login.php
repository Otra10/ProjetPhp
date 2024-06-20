<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white shadow-md rounded p-8 w-full max-w-sm">
        <h1 class="text-2xl font-semibold mb-6 text-center">Connexion</h1>
        <?php if (isset($error)): ?>
            <p class="text-red-500 mb-4"><?php echo $error; ?></p>
        <?php endif; ?>
        <form action="<?=webRoot?>" method="POST" class="space-y-4">
            <div>
                <label for="username" class="block text-gray-700">Nom d'utilisateur:</label>
                <input type="text" id="username" name="username" required class="border border-gray-300 p-2 rounded w-full">
            </div>
            <div>
                <label for="password" class="block text-gray-700">Mot de passe:</label>
                <input type="password" id="password" name="password" required class="border border-gray-300 p-2 rounded w-full">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 w-full">Se connecter</button>
            </div>
            <input type="hidden" name="action" value="login">
            <input type="hidden" name="controller" value="Auth">
        </form>
    </div>
</body>

</html>
