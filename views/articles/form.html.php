<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Ajouter un nouvel article</h2>
    <form action="<?=webRoot?>" method="post">
        <div class="form-group">
            <label for="libelle">Libellé</label>
            <input type="text" class="form-control" id="libelle" name="libelle" required>
        </div>
        <div class="form-group">
            <label for="qteStock">Quantité</label>
            <input type="number" class="form-control" id="qteStock" name="qteStock" required>
        </div>
        <div class="form-group">
            <label for="prixAppro">Prix</label>
            <input type="text" class="form-control" id="prixAppro" name="prixAppro" required>
        </div>
        <div class="form-group">
            <label for="categorieId">Catégorie</label>
            <select class="form-control" id="categorieId" name="categorieId" required>
                <option value="">Sélectionnez une catégorie</option>
                <?php foreach ($categories as $categorie):?>
                    <option value=<?=$categorie['id']?>><?=$categorie['nomCategorie']?></option>;
                <?php endforeach?>
            </select>
        </div>
        <div class="form-group">
            <label for="typeId">Type</label>
            <select class="form-control" id="typeId" name="typeId" required>
                <option value="">Sélectionnez un type</option>
                <?php foreach ($types as $type):?>
                    <option value=<?=$type['id']?>><?=$type['nomType']?></option>;
                <?php endforeach?>
            </select>
        </div>
        <button type="submit" class="btn btn-dark">Ajouter</button>
        <input type="hidden" name="action" value="addArticle">
        <input type="hidden" name="controller" value="article">
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
