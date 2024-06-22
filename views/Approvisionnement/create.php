<!-- Main content -->
<div class="w-full lg:w-3/4 xl:w-4/5 p-6">
    <div class="bg-white shadow-md rounded p-8">
        <h1 class="text-2xl font-semibold mb-6">Nouvel Approvisionnement</h1>
        <form action="<?=webRoot?>" method="POST" class="space-y-4">
            <div>
                <label for="date" class="block text-gray-700">Date:</label>
                <input type="date" id="date" name="date" required class="border border-gray-300 p-2 rounded w-full">
            </div>
            <div>
                <label for="article_id" class="block text-gray-700">Article:</label>
                <select id="article_id" name="article_id" required class="border border-gray-300 p-2 rounded w-full">
                <?php foreach ($articles as $article): ?>
                        <option value="<?= $article['id'] ?>"><?= $article['libelle'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div>
                <label for="fournisseur_id" class="block text-gray-700">Fournisseur:</label>
                <select id="fournisseur_id" name="fournisseur_id" required class="border border-gray-300 p-2 rounded w-full">
                <?php foreach ($fournisseurs as $fournisseur): ?>
                        <option value="<?= $fournisseur['id'] ?>"><?= $fournisseur['nom'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div>
                <label for="quantite" class="block text-gray-700">Quantité:</label>
                <input type="number" id="quantite" name="quantite" required class="border border-gray-300 p-2 rounded w-full">
            </div>
            <div>
                <label for="prix" class="block text-gray-700">Prix:</label>
                <input type="number" id="prix" name="prix" step="0.01" required class="border border-gray-300 p-2 rounded w-full">
            </div>
            <div>
                <label for="montant" class="block text-gray-700">Montant:</label>
                <input type="number" id="montant" name="montant" step="0.01" required class="border border-gray-300 p-2 rounded w-full">
            </div>
            <div>
                <label for="observation" class="block text-gray-700">Observation:</label>
                <textarea id="observation" name="observation" class="border border-gray-300 p-2 rounded w-full"></textarea>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Enregistrer</button>
                <input type="hidden" name="action" value="create">
                <input type="hidden" name="controller" value="Approvisionnement">
            </div>
        </form>
    </div>
</div>
