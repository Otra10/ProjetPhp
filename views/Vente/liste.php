<!-- Fichier : views/Vente/liste.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Liste des Ventes</title>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-6">Liste des Ventes</h1>
        <a href="?controller=Vente&action=create" class="bg-blue-500 text-white px-4 py-2 rounded">Nouvelle Vente</a>
        <div class="mt-6">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-2 border">ID</th>
                        <th class="py-2 border">Date</th>
                        <th class="py-2 border">Client</th>
                        <th class="py-2 border">Observation</th>
                        <th class="py-2 border">Articles</th>
                        <th class="py-2 border">Quantité Totale</th>
                        <th class="py-2 border">Montant Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ventes as $vente): ?>
                        <tr class="text-center">
                            <td class="border px-4 py-2"><?= $vente['venteId'] ?></td>
                            <td class="border px-4 py-2"><?= $vente['date'] ?></td>
                            <td class="border px-4 py-2"><?= $vente['nom'] . ' ' . $vente['prenom'] ?></td>
                            <td class="border px-4 py-2"><?= $vente['observation'] ?></td>
                            <td class="border px-4 py-2"><?= $vente['articles'] ?></td>
                            <td class="border px-4 py-2"><?= $vente['qte_totale'] ?></td>
                            <td class="border px-4 py-2"><?= number_format($vente['montant_total'], 2) ?> $</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
