<!-- Main content -->
<div class="w-full lg:w-3/4 xl:w-4/5 p-6">
    <div class="bg-white shadow-md rounded p-4">
        <h1 class="text-2xl font-semibold mb-4">Modifier Client</h1>
        <form action="<?=webRoot?>" method="POST" class="space-y-4">
            <div>
                <label for="nom" class="block text-gray-700">Nom:</label>
                <input type="text" id="nom" name="nom" value="<?php echo $client['nom']; ?>" required class="border border-gray-300 p-2 rounded w-full">
            </div>
            <div>
                <label for="prenom" class="block text-gray-700">Prénom:</label>
                <input type="text" id="prenom" name="prenom" value="<?php echo $client['prenom']; ?>" required class="border border-gray-300 p-2 rounded w-full">
            </div>
            <div>
                <label for="telephonePortable" class="block text-gray-700">Téléphone Portable:</label>
                <input type="text" id="telephonePortable" name="telephonePortable" value="<?php echo $client['telephonePortable']; ?>" required class="border border-gray-300 p-2 rounded w-full">
            </div>
            <div>
                <label for="observation" class="block text-gray-700">Observations:</label>
                <textarea id="observation" name="observation" class="border border-gray-300 p-2 rounded w-full"><?php echo $client['observation']; ?></textarea>
            </div>
            <div>
                <label for="adresse" class="block text-gray-700">Adresse:</label>
                <input type="text" id="adresse" name="adresse" value="<?php echo $client['adresse']; ?>" required class="border border-gray-300 p-2 rounded w-full">
            </div>
            <div>
                <label for="photo" class="block text-gray-700">Photo:</label>
                <input type="text" id="photo" name="photo" value="<?php echo $client['photo']; ?>" required class="border border-gray-300 p-2 rounded w-full">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Mettre à jour</button>
                <input type="hidden" name="action" value="edit">
                <input type="hidden" name="id" value="<?= $client['id']; ?>">
                <input type="hidden" name="controller" value="Client">
            </div>
        </form>
    </div>
</div>
