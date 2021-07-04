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
            value="<?= isset($inputs["nom_article"]) ? $inputs["nom_article"] : "" ?>" placeholder="veuillez saisir le nom de l'article" required>

    </div>

    <div class="mb-2">
        <label class="form-label"> Marque Article</label>
        <input type="text" class="form-control" name="marque_article"
            value="<?= isset($inputs["marque_article"]) ? $inputs["marque_article"] : "" ?>"  placeholder="veuillez saisir la marque de l'article" required>

    </div>

    <div class="mb-2">
        <label class="form-label"> Type Article</label>
        <input type="text" class="form-control" name="type_article"
            value="<?= isset($inputs["type_article"]) ? $inputs["type_article"] : "" ?>"  placeholder="veuillez saisir le type de l'article" required>

    </div>

    <div class="mb-2">
        <label class="form-label"> Taille Article</label>
        <input type="text" class="form-control" name="taille_article"
            value="<?= isset($inputs["taille_article"]) ? $inputs["taille_article"] : "" ?>"  placeholder="veuillez saisir la taille de l'article" required>

    </div>

    <div class="mb-2">
        <label class="form-label"> Prix Article</label>
        <input type="text" class="form-control" name="prix_article"
            value="<?= isset($inputs["prix_article"]) ? $inputs["prix_article"] : "" ?>"  placeholder="veuillez saisir le prix de l'article" required>

    </div>

    <div class="mb-2">
        <label class="form-label"> Photo Article</label>
        <input type="text" class="form-control" name="photo_article"
            value="<?= isset($inputs["photo_article"])? $inputs["photo_article"] : "" ?>"  placeholder="veuillez saisir le photo de l'article" required>

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