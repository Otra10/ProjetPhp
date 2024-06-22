
<div class="w-full lg:w-3/4 xl:w-4/5 p-6">
    <div class="bg-white shadow-md rounded p-8">
        <h1 class="text-2xl font-semibold mb-6">Nouvel Utilisateur</h1>
        <form action="<?= webRoot ?>" method="POST" class="space-y-4">
            <div>
                <label for="nom" class="block text-gray-700">Nom:</label>
                <input type="text" id="nom" name="nom" required class="border border-gray-300 p-2 rounded w-full">
            </div>
            <div>
                <label for="prenom" class="block text-gray-700">Prénom:</label>
                <input type="text" id="prenom" name="prenom" required class="border border-gray-300 p-2 rounded w-full">
            </div>
            <div>
                <label for="username" class="block text-gray-700">Nom d'utilisateur:</label>
                <input type="text" id="username" name="username" required class="border border-gray-300 p-2 rounded w-full">
            </div>
            <div>
                <label for="password" class="block text-gray-700">Mot de passe:</label>
                <input type="password" id="password" name="password" required class="border border-gray-300 p-2 rounded w-full">
            </div>
            <div>
                <label for="role" class="block text-gray-700">Rôle:</label>
                <select id="role" name="role" required class="border border-gray-300 p-2 rounded w-full">
                    <option value="vendeur">Vendeur</option>
                    <option value="responsableStock">Responsable de Stock</option>
                    <option value="responsableProduction">Responsable de Production</option>
                </select>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Enregistrer</button>
                <input type="hidden" name="action" value="create">
                <input type="hidden" name="controller" value="Utilisateur">
            </div>
        </form>
    </div>
</div>