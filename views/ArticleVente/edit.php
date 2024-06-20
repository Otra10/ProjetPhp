<div class="w-full lg:w-3/4 xl:w-4/5 p-6">
    <div class="bg-white shadow-md rounded p-4">
        <h1 class="text-2xl font-semibold mb-4">Modifier Article de Vente</h1>
        <form action="<?= webRoot ?>" method="POST" class="space-y-4">
            <label for="libelle" class="block text-gray-700">Libellé:</label>
            <input type="text" id="libelle" name="libelle" value="<?php echo $article['libelle']; ?>" required class="border border-gray-300 p-2 rounded w-full">
            <br>
            <label for="prix" class="block text-gray-700">Prix Vente:</label>
            <input type="number" id="prix" name="prix" step="0.01" value="<?php echo $article['prix']; ?>" required class="border border-gray-300 p-2 rounded w-full">
            <br>
            <label for="qte" class="block text-gray-700">Quantité Stock:</label>
            <input type="number" id="qte" name="qte" value="<?php echo $article['qte']; ?>" required class="border border-gray-300 p-2 rounded w-full">
            <br>
            <label for="montant" class="block text-gray-700">Montant Vente:</label>
            <input type="number" id="montant" name="montant" step="0.01" value="<?php echo $article['montant']; ?>" required class="border border-gray-300 p-2 rounded w-full">
            <br>
            <label for="photo" class="block text-gray-700">Photo:</label>
            <input type="text" id="photo" name="photo" value="<?php echo $article['photo']; ?>" required class="border border-gray-300 p-2 rounded w-full">
            <br>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Mettre à jour</button>
            <input type="hidden" name="action" value="edit">
            <input type="hidden" name="id" value="<?= $article['id']; ?>">
            <input type="hidden" name="controller" value="ArticleVente">
        </form>
    </div>
</div>