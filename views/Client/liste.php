
    <h1 class="text-2xl font-semibold mb-4">Liste des Clients</h1>
    <a href="<?=webRoot?>/?controller=Client&action=create"  class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Nouveau Client</a>
    <div class="mt-4">
    <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Nom</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Prénom</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Téléphone Portable</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Observations</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Adresse</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Photo</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client): ?>
                <tr>
                    <td class="w-1/6 py-3 px-4"><?php echo $client['nom']; ?></td>
                    <td class="w-1/6 py-3 px-4"><?php echo $client['prenom']; ?></td>
                    <td class="w-1/6 py-3 px-4"><?php echo $client['telephonePortable']; ?></td>
                    <td class="w-1/6 py-3 px-4"><?php echo $client['observation']; ?></td>
                    <td class="w-1/6 py-3 px-4"><?php echo $client['adresse']; ?></td>
                    <td class="w-1/6 py-3 px-4"><img src="<?php echo $client['photo']; ?>" alt="Photo de <?php echo $client['nom']; ?>" class="h-12 w-12 rounded-full"></td>
                    <td class="w-1/6 py-3 px-4">
                        <a href="<?=webRoot?>/?controller=Client&action=edit&id=<?php echo $client['id']; ?>" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Modifier</a>
                        <a href="<?=webRoot?>/?controller=Client&action=delete&id=<?php echo $client['id']; ?>" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 ml-2">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
