<h2>Liste des articles</h2>
<div class="d-flex justify-content-end align-items-center mb-4 mr-4">
        <a href="<?=webRoot?>/?controller=article&action=formArticle" class="btn btn-dark">Ajouter article</a>
</div>    
<table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Libelle</th>
                <th scope="col">Quantité</th>
                <th scope="col">Prix</th>
                <th scope="col">Categorie</th>
                <th scope="col">Type</th>
            </tr>
        </thead>
        <tbody>
            
                <?php foreach($articles as $value):?>
                    <tr scope="row">
                        <th><?= $value["libelle"]?></th>
                        <th><?= $value["qteStock"]?></th>
                        <th><?= $value["prixAppro"]?></th>
                        <th><?=$value["nomCategorie"]?></th>
                        <th><?=$value["nomType"]?></th>
                    </tr>
                <?php endforeach?>
            
            
        </tbody>
    </table>