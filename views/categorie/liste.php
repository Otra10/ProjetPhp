<h2 class="text-2xl font-semibold mb-4">Liste des Catégories</h2>
<div class="container mt-5 mb-4">
    <form action="<?=webRoot?>" method="post">
        <div class="flex justify-end mb-4">
            <div class="ml-3">
                <input type="text" class="border border-gray-300 p-2 rounded" name="nomCategorie" aria-describedby="helpId" placeholder="Nom Categorie" />
            </div>
            <div class="ml-3">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700" name="action" value="FormType">
                    Enregistrer
                </button>
            </div>
        </div>
        <input type="hidden" name="action" value="create">
        <input type="hidden" name="controller" value="Categorie">
    </form>
</div>

<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-300">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-3 px-4 uppercase font-semibold text-sm text-left">Id</th>
                <th class="py-3 px-4 uppercase font-semibold text-sm text-left">Nom Categorie</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            <?php foreach ($categories as $value) : ?>
                <tr class="hover:bg-gray-100">
                    <td class="py-3 px-4 text-left"><?= $value["id"] ?></td>
                    <td class="py-3 px-4 text-left"><?= $value["nomCategorie"] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
