<h1> nouvelle categorie</h1>
<?php if (count($erreursList) > 0) : ?>
<div class="alert alert-danger w-50">
    <?php foreach ($erreursList as $message) : ?>

    <p><?= $message ?></p>


    <?php endforeach ?>
</div>

<?php endif ?>

<form method="post">
    <div class="mb-2">
        <label class="form-label"> Nom categorie</label>
        <input type="text" class="form-control" name="nom_categorie"
            value="<?= isPosted() ? $inputs["nom_categorie"] : "" ?>" placeholder="veuillez saisir le nom de categorie"
            required>

           
    </div>

    <button type="submit" class="btn btn-primary mt-3 w-100">Valider</button>

</form>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h3 class="mt-4">Liste des categories</h3>
            <table class="table table-bordered mt-4 bg-success text-white">
                <thead>
                    <tr class="w-40">
                        <th>Identifiant</th>
                        <th>Nom categorie</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach($categorieList as $category) : ?>

                    <tr>
                        <td><?= $category["id_categorie"] ?></td>
                        <td><?= $category["nom_categorie"] ?></td>

                    </tr>

                    <?php endforeach ?>
                </tbody>


            </table>

        </div>
    </div>
</div>