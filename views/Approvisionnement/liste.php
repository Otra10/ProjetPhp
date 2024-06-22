<div class="w-full">
    <div class="bg-white shadow-md rounded p-4">
        <h1 class="text-2xl font-semibold mb-4">Liste des Approvisionnements</h1>
        <a href="<?= webRoot ?>/?controller=Approvisionnement&action=create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 mb-4 inline-block">Nouvel Approvisionnement</a>
        <div class="overflow-x-auto mt-4">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Date</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Article</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Fournisseur</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Quantité</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Prix</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Montant</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Observation</th>
                        <?php if ($_SESSION["user"]["role"] == "gestionnaire") : ?>
                            <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                        <?php endif; ?>

                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <?php foreach ($approvisionnements as $approvisionnement) : ?>
                        <tr class="hover:bg-gray-100">
                            <td class="w-1/6 py-3 px-4"><?= $approvisionnement['date']; ?></td>
                            <td class="w-1/6 py-3 px-4"><?= $approvisionnement['libelle']; ?></td>
                            <td class="w-1/6 py-3 px-4"><?= $approvisionnement['nom']; ?></td>
                            <td class="w-1/6 py-3 px-4"><?= $approvisionnement['qte']; ?></td>
                            <td class="w-1/6 py-3 px-4"><?= $approvisionnement['prix']; ?></td>
                            <td class="w-1/6 py-3 px-4"><?= $approvisionnement['montant']; ?></td>
                            <td class="w-1/6 py-3 px-4"><?= $approvisionnement['observation']; ?></td>

                            <?php if ($_SESSION["user"]["role"] == "gestionnaire") : ?>
                                <td class="w-1/6 py-3 px-4">
                                    <a href="<?= webRoot ?>/?controller=Approvisionnement&action=edit&id=<?= $approvisionnement['id']; ?>" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Modifier</a>
                                    <a href="<?= webRoot ?>/?controller=Approvisionnement&action=delete&id=<?= $approvisionnement['id']; ?>" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 ml-2">Supprimer</a>
                                </td>
                            <?php endif; ?>


                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>