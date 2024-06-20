<!-- Main content -->
<div class="w-full lg:w-3/4 xl:w-4/5 p-6">
    <div class="bg-white shadow-md rounded p-4">
        <h1 class="text-2xl font-semibold mb-4">Nouvelle Vente</h1>
        <form action="<?=webRoot?>" method="POST" class="space-y-4">
            <div>
                <label for="date" class="block text-gray-700">Date:</label>
                <input type="date" id="date" name="date" required class="border border-gray-300 p-2 rounded w-full">
            </div>
            <div>
                <label for="clientId" class="block text-gray-700">Client:</label>
                <select id="clientId" name="clientId" required class="border border-gray-300 p-2 rounded w-full">
                    <?php foreach ($clients as $client): ?>
                        <option value="<?= $client['id'] ?>"><?= $client['nom'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div>
                <label for="articleId" class="block text-gray-700">Article:</label>
                <select id="articleId" name="articleId" required class="border border-gray-300 p-2 rounded w-full">
                    <?php foreach ($articles as $article): ?>
                        <option value="<?= $article['id'] ?>"><?= $article['libelle'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div>
                <label for="qte" class="block text-gray-700">Quantité:</label>
                <input type="number" id="qte" name="qte" required class="border border-gray-300 p-2 rounded w-full">
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
                <input type="hidden" name="controller" value="Vente">
            </div>
        </form>
    </div>
</div>
