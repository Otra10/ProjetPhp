<!-- Fichier : views/Approvisionnement/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Modifier Approvisionnement</title>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-6">Modifier Approvisionnement</h1>
        <form action="<?= webRoot ?>/?controller=Approvisionnement&action=edit&id=<?= $approvisionnement['id'] ?>" method="POST" class="bg-white p-6 rounded shadow-md">
            <div class="mb-4">
                <label for="date" class="block text-gray-700">Date</label>
                <input type="date" name="date" id="date" value="<?= $approvisionnement['date'] ?>" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="article_id" class="block text-gray-700">Article</label>
                <select name="article_id" id="article_id" class="w-full border border-gray-300 p-2 rounded">
                    <?php foreach ($articles as $article): ?>
                        <option value="<?= $article['id'] ?>" <?= $article['id'] == $approvisionnement['articleConfectionId'] ? 'selected' : '' ?>><?= $article['libelle'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-4">
                <label for="fournisseur_id" class="block text-gray-700">Fournisseur</label>
                <select name="fournisseur_id" id="fournisseur_id" class="w-full border border-gray-300 p-2 rounded">
                    <?php foreach ($fournisseurs as $fournisseur): ?>
                        <option value="<?= $fournisseur['id'] ?>" <?= $fournisseur['id'] == $approvisionnement['fournisseurId'] ? 'selected' : '' ?>><?= $fournisseur['nom'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-4">
                <label for="quantite" class="block text-gray-700">Quantité</label>
                <input type="number" name="quantite" id="quantite" value="<?= $approvisionnement['qte'] ?>" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="prix" class="block text-gray-700">Prix</label>
                <input type="number" step="0.01" name="prix" id="prix" value="<?= $approvisionnement['prix'] ?>" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="montant" class="block text-gray-700">Montant</label>
                <input type="number" step="0.01" name="montant" id="montant" value="<?= $approvisionnement['montant'] ?>" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="observation" class="block text-gray-700">Observation</label>
                <textarea name="observation" id="observation" class="w-full border border-gray-300 p-2 rounded"><?= $approvisionnement['observation'] ?></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Mettre à jour</button>
        </form>
    </div>
</body>
</html>
