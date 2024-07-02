
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

            <!-- Articles section -->
            <div id="articles-section">
                <div class="article-group space-y-2">
                    <div>
                        <label for="articleVenteId[]" class="block text-gray-700">Article:</label>
                        <select id="articleVenteId[]" name="articleVenteId[]" required class="border border-gray-300 p-2 rounded w-full">
                            <?php foreach ($articles as $article): ?>
                                <option value="<?= $article['id'] ?>"><?= $article['libelle'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div>
                        <label for="qte[]" class="block text-gray-700">Quantité:</label>
                        <input type="number" id="qte[]" name="qte[]" required class="border border-gray-300 p-2 rounded w-full">
                    </div>
                    <div>
                        <label for="prix[]" class="block text-gray-700">Prix:</label>
                        <input type="number" id="prix[]" name="prix[]" step="0.01" required class="border border-gray-300 p-2 rounded w-full">
                    </div>
                </div>
            </div>
            
            <div>
                <button type="button" id="add-article" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Ajouter un article</button>
            </div>

            <div>
                <label for="montant" class="block text-gray-700">Montant Total:</label>
                <input type="number" id="montant" name="montant" step="0.01" required class="border border-gray-300 p-2 rounded w-full" readonly>
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

<script>
    document.getElementById('add-article').addEventListener('click', function () {
        var articleGroup = document.querySelector('.article-group').cloneNode(true);
        document.getElementById('articles-section').appendChild(articleGroup);
    });

    document.querySelector('form').addEventListener('change', function () {
        let totalAmount = 0;
        const quantities = document.querySelectorAll('[name="qte[]"]');
        const prices = document.querySelectorAll('[name="prix[]"]');

        quantities.forEach((qty, index) => {
            const price = prices[index].value;
            totalAmount += qty.value * price;
        });

        document.getElementById('montant').value = totalAmount.toFixed(2);
    });
</script>
