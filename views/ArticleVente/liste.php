
    <h1 class="text-2xl font-semibold mb-4">Liste des Articles de Vente</h1>
    <a href="<?=webRoot?>/?controller=ArticleVente&action=create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Nouvel Article de Vente</a>
    <div  class="mt-4">
    <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Libellé</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Prix Vente</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Quantité Stock</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Montant Vente</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Photo</th>
                <?php if ($_SESSION["user"]["role"] == "gestionnaire") : ?>
                    <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            <?php foreach ($articles as $article): ?>
                <tr>
                    <td class="w-1/6 py-3 px-4"><?php echo $article['libelle']; ?></td>
                    <td class="w-1/6 py-3 px-4"><?php echo $article['prix']; ?></td>
                    <td class="w-1/6 py-3 px-4"><?php echo $article['qte']; ?></td>
                    <td class="w-1/6 py-3 px-4"><?php echo $article['montant']; ?></td>
                    <td class="w-1/6 py-3 px-4"><img src="<?php echo $article['photo']; ?>" alt="Photo de <?php echo $article['libelle']; ?>" class="h-12 w-12 rounded-full"></td>
                    <?php if ($_SESSION["user"]["role"] == "gestionnaire") : ?>
                                <td class="w-1/6 py-3 px-4">
                                    <a href="<?= webRoot ?>/?controller=ArticleVente&action=edit&id=<?php echo $article['id']; ?>" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Modifier</a>
                                    <a href="<?= webRoot ?>/?controller=ArticleVente&action=delete&id=<?php echo $article['id']; ?>" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 ml-2">Supprimer</a>
                                </td>
                            <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>