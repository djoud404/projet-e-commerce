<h1> nouveau article</h1>
<?php if (count($erreursList) > 0) : ?>
<div class="alert alert-danger w-50">
    <?php foreach ($erreursList as $message) : ?>

    <p><?= $message ?></p>


    <?php endforeach ?>
</div>

<?php endif ?>

<form method="post">
    <div class="mb-2">
        <label class="form-label"> Nom Article</label>
        <input type="text" class="form-control" name="nom_article"
            value="<?= isPosted() ? $inputs["nom_article"] : "" ?>">

    </div>

    <div class="mb-2">
        <label class="form-label"> Marque Article</label>
        <input type="text" class="form-control" name="marque_article"
            value="<?= isPosted() ? $inputs["marque_article"] : "" ?>">

    </div>

    <div class="mb-2">
        <label class="form-label"> Type Article</label>
        <input type="text" class="form-control" name="type_article"
            value="<?= isPosted() ? $inputs["type_article"] : "" ?>">

    </div>

    <div class="mb-2">
        <label class="form-label"> Taille Article</label>
        <input type="text" class="form-control" name="taille_article"
            value="<?= isPosted() ? $inputs["taille_article"] : "" ?>">

    </div>

    <div class="mb-2">
        <label class="form-label"> Prix Article</label>
        <input type="text" class="form-control" name="prix_article"
            value="<?= isPosted() ? $inputs["prix_article"] : "" ?>">

    </div>

    <div class="mb-2">
        <label class="form-label"> Photo Article</label>
        <input type="text" class="form-control" name="photo_article"
            value="<?= isPosted() ? $inputs["photo_article"] : "" ?>">

    </div>

    <div class="mb-2">
        <label class="form-label"> Categorie</label>
        <select class="form-control" name="id_categorie">
            <?php foreach ($categorieList as $categorie) : ?>

            <option value="<?= $categorie["id_categorie"] ?>">
                <?= $categorie["nom_categorie"] ?>
            </option>

            <?php endforeach ?>

        </select>


    </div>



    <button type="submit" class="btn btn-primary mt-3 w-100">Valider</button>




</form>