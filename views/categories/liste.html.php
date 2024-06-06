<h2>Liste des Types</h2>
<div class="container mt-5 mb-4">
    <form action="<?=webRoot?>" method="post">
        <div class="row justify-content-end">
            <div class="col-auto ml-3">
                <input type="text" class="form-control" name="nomCategorie" aria-describedby="helpId" placeholder="Nom Categorie" />
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-dark " name="action" value="FormType" >
                    Enregistrer
                </button>
            </div>
        </div>
        <input type="hidden" name="action" value="FormCategorie">
        <input type="hidden" name="controller" value="categorie">
    </form>
</div>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom Categorie</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($categories as $value) : ?>
            <tr scope="row">
                <th><?= $value["id"] ?></th>
                <th><?= $value["nomCategorie"] ?></th>
            </tr>
        <?php endforeach ?>


    </tbody>
</table>