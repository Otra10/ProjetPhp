
    <h1 class="text-2xl font-semibold mb-4">Liste des Fournisseurs</h1>
    <a href="<?=webRoot?>/?controller=Fournisseur&action=create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Nouveau Fournisseur</a>
    <div class="mt-4">
    <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Nom</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Prénom</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Téléphone Portable</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Téléphone Fixe</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Adresse</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Photo</th>
                <?php if ($_SESSION["user"]["role"] == "gestionnaire") : ?>
                    <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            <?php foreach ($fournisseurs as $fournisseur): ?>
                <tr>
                    <td class="w-1/6 py-3 px-4"><?php echo $fournisseur['nom']; ?></td>
                    <td class="w-1/6 py-3 px-4"><?php echo $fournisseur['prenom']; ?></td>
                    <td class="w-1/6 py-3 px-4"><?php echo $fournisseur['telephonePortable']; ?></td>
                    <td class="w-1/6 py-3 px-4"><?php echo $fournisseur['telephoneFixe']; ?></td>
                    <td class="w-1/6 py-3 px-4"><?php echo $fournisseur['adresse']; ?></td>
                    <td class="w-1/6 py-3 px-4"><img src="<?php echo $fournisseur['photo']; ?>" alt="Photo de <?php echo $fournisseur['nom']; ?>" class="h-12 w-12 rounded-full"></td>
                    <?php if ($_SESSION["user"]["role"] == "gestionnaire") : ?>
                                <td class="w-1/6 py-3 px-4">
                                    <a href="<?= webRoot ?>/?controller=Fournisseur&action=edit&id=<?php echo $fournisseur['id']; ?>" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Modifier</a>
                                    <a href="<?= webRoot ?>/?controller=Fouornisseur&action=delete&id=<?php echo $fournisseur['id']; ?>" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 ml-2">Supprimer</a>
                                </td>
                            <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
