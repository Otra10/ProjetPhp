<!-- views/utilisateur/index.php -->
<div class="w-full p-6">
    <div class="bg-white shadow-md rounded p-4">
        <h1 class="text-2xl font-semibold mb-4">Liste des Utilisateurs</h1>
        <a href="<?=webRoot?>/?controller=Utilisateur&action=create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 mb-4 inline-block">Nouvel Utilisateur</a>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
            <div class="bg-green-100 p-4 rounded shadow-md">
                <h2 class="text-lg font-semibold">Vendeurs</h2>
                <p class="text-3xl font-bold"><?= $nombreVendeurs ?></p>
            </div>
            <div class="bg-yellow-100 p-4 rounded shadow-md">
                <h2 class="text-lg font-semibold">Responsables de Stock</h2>
                <p class="text-3xl font-bold"><?= $nombreResponsablesStock ?></p>
            </div>
            <div class="bg-blue-100 p-4 rounded shadow-md">
                <h2 class="text-lg font-semibold">Responsables de Production</h2>
                <p class="text-3xl font-bold"><?= $nombreResponsablesProduction ?></p>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Nom</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Prénom</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Nom d'utilisateur</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Rôle</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <?php foreach ($utilisateurs as $utilisateur): ?>
                        <tr class="hover:bg-gray-100">
                            <td class="w-1/6 py-3 px-4"><?php echo $utilisateur['nom']; ?></td>
                            <td class="w-1/6 py-3 px-4"><?php echo $utilisateur['prenom']; ?></td>
                            <td class="w-1/6 py-3 px-4"><?php echo $utilisateur['username']; ?></td>
                            <td class="w-1/6 py-3 px-4"><?php echo $utilisateur['role']; ?></td>
                            <td class="w-1/6 py-3 px-4">
                                <a href="<?=webRoot?>/?controller=Utilisateur&action=edit&id=<?php echo $utilisateur['id']; ?>" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Modifier</a>
                                <a href="<?=webRoot?>/?controller=Utilisateur&action=delete&id=<?php echo $utilisateur['id']; ?>" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 ml-2">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
