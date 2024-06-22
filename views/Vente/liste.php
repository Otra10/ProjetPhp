<h1 class="text-2xl font-semibold mb-4">Liste des Ventes</h1>
                <div class="flex justify-between items-center mb-4">
                    <a href="<?=webRoot?>/?controller=Vente&action=create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Nouvelle Vente</a>
                    <div class="flex space-x-4">
                        <form action="<?=webRoot?>/?controller=Vente&action=filterByDate" method="POST" class="flex items-center space-x-2">
                            <label for="date" class="text-gray-700">Filtrer par Date:</label>
                            <input type="date" id="date" name="date" class="border border-gray-300 p-2 rounded">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Filtrer</button>
                        </form>
                        <form action="<?=webRoot?>/?controller=Vente&action=filterByClient" method="POST" class="flex items-center space-x-2">
                            <label for="clientId" class="text-gray-700">Filtrer par Client:</label>
                            <select id="clientId" name="clientId" class="border border-gray-300 p-2 rounded">
                                <?php foreach ($clients as $client): ?>
                                    <option value="<?= $client['id'] ?>"><?= $client['nom'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Filtrer</button>
                        </form>
                        <form action="<?=webRoot?>/?controller=Vente&action=filterByArticle" method="POST" class="flex items-center space-x-2">
                            <label for="articleId" class="text-gray-700">Filtrer par Article:</label>
                            <select id="articleId" name="articleId" class="border border-gray-300 p-2 rounded">
                                <?php foreach ($articles as $article): ?>
                                    <option value="<?= $article['id'] ?>"><?= $article['libelle'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Filtrer</button>
                        </form>
                    </div>
                </div>
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="py-3 px-4 uppercase font-semibold text-sm">Date</th>
                            <th class="py-3 px-4 uppercase font-semibold text-sm">Article</th>
                            <th class="py-3 px-4 uppercase font-semibold text-sm">Client</th>
                            <th class="py-3 px-4 uppercase font-semibold text-sm">Quantité</th>
                            <th class="py-3 px-4 uppercase font-semibold text-sm">Prix</th>
                            <th class="py-3 px-4 uppercase font-semibold text-sm">Montant</th>
                            <th class="py-3 px-4 uppercase font-semibold text-sm">Observation</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <?php foreach ($ventes as $vente): ?>
                            <tr>
                                <td class="py-3 px-4"><?php echo $vente['date']; ?></td>
                                <td class="py-3 px-4"><?php echo $vente['libelle']; ?></td>
                                <td class="py-3 px-4"><?php echo $vente['nom']; ?></td>
                                <td class="py-3 px-4"><?php echo $vente['qte']; ?></td>
                                <td class="py-3 px-4"><?php echo $vente['prix']; ?></td>
                                <td class="py-3 px-4"><?php echo $vente['montant']; ?></td>
                                <td class="py-3 px-4"><?php echo $vente['observation']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>