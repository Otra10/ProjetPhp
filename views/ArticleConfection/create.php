
        <div class="w-full lg:w-3/4 xl:w-4/5 p-6">
            <div class="bg-white shadow-md rounded p-4">
                <h1 class="text-2xl font-semibold mb-4">Nouvel Article de Confection</h1>
                <form action="<?=webRoot?>" method="POST" class="space-y-4">
                    <div>
                        <label for="libelle" class="block text-gray-700">Libellé:</label>
                        <input type="text" id="libelle" name="libelle" required class="border border-gray-300 p-2 rounded w-full">
                    </div>
                    <div>
                        <label for="prixAchat" class="block text-gray-700">Prix Achat:</label>
                        <input type="number" id="prixAchat" name="prixAchat" step="0.01" required class="border border-gray-300 p-2 rounded w-full">
                    </div>
                    <div>
                        <label for="qteAchat" class="block text-gray-700">Quantité Achat:</label>
                        <input type="number" id="qteAchat" name="qteAchat" required class="border border-gray-300 p-2 rounded w-full">
                    </div>
                    <div>
                        <label for="qteStock" class="block text-gray-700">Quantité Stock:</label>
                        <input type="number" id="qteStock" name="qteStock" required class="border border-gray-300 p-2 rounded w-full">
                    </div>
                    <div>
                        <label for="montantStock" class="block text-gray-700">Montant en Stock:</label>
                        <input type="number" id="montantStock" name="montantStock" step="0.01" required class="border border-gray-300 p-2 rounded w-full">
                    </div>
                    <div>
                        <label for="photo" class="block text-gray-700">Photo:</label>
                        <input type="text" id="photo" name="photo" required class="border border-gray-300 p-2 rounded w-full">
                    </div>
                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Enregistrer</button>
                        <input type="hidden" name="action" value="create">
                        <input type="hidden" name="controller" value="ArticleConfection">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

