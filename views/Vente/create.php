<!-- Fichier : views/Vente/create.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Nouvelle Vente</title>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-6">Nouvelle Vente</h1>
        <form action="?controller=Vente&action=store" method="POST" class="bg-white p-6 rounded shadow-md">
            <div class="mb-4">
                <label for="client" class="block text-gray-700">Client</label>
                <select name="clientId" id="client" class="w-full border border-gray-300 p-2 rounded">
                    <?php foreach ($clients as $client): ?>
                        <option value="<?= $client["id"] ?>"><?= $client["nom"] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-4">
                <label for="observation" class="block text-gray-700">Observation</label>
                <textarea name="observation" id="observation" class="w-full border border-gray-300 p-2 rounded"></textarea>
            </div>
            <div id="articles" class="mb-4">
                <div class="article mb-4">
                    <label class="block text-gray-700">Article</label>
                    <select name="articles[0][id]" class="w-full border border-gray-300 p-2 rounded">
                        <?php foreach ($articles as $article): ?>
                            <option value="<?= $article["id"] ?>"><?= $article["libelle"] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label class="block text-gray-700 mt-2">Quantité</label>
                    <input type="number" name="articles[0][quantite]" min="1" class="w-full border border-gray-300 p-2 rounded">
                </div>
            </div>
            <button type="button" id="addArticle" class="bg-blue-500 text-white px-4 py-2 rounded mb-4">Ajouter un article</button>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Enregistrer la vente</button>
        </form>
    </div>
    <script>
        document.getElementById('addArticle').addEventListener('click', function() {
            var articlesDiv = document.getElementById('articles');
            var index = articlesDiv.children.length;
            var newArticleDiv = document.createElement('div');
            newArticleDiv.classList.add('article', 'mb-4');
            newArticleDiv.innerHTML = `
                <label class="block text-gray-700">Article</label>
                <select name="articles[${index}][id]" class="w-full border border-gray-300 p-2 rounded">
                    <?php foreach ($articles as $article): ?>
                        <option value="<?= $article["id"] ?>"><?= $article["libelle"] ?></option>
                    <?php endforeach; ?>
                </select>
                <label class="block text-gray-700 mt-2">Quantité</label>
                <input type="number" name="articles[${index}][quantite]" min="1" class="w-full border border-gray-300 p-2 rounded">
            `;
            articlesDiv.appendChild(newArticleDiv);
        });
    </script>
</body>
</html>
