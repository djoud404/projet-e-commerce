<h3>Liste des articles </h3>

<table class="table table-bordered">
    <tr>
        <thead>
            <th>Nom article</th>
            <th>Prix</th>
            <th>Taille</th>
            <th>Marque</th>
            <th>type</th>
            <th>Categorie</th>
            <th>Photo</th>

    </tr>
    </thead>
    <tbody>
        <?php foreach($articleList as $article) : ?>
        <tr>
            <td><a href="/details-article?id=<?= $article["id_article"] ?>" class="btn btn-primary mr-4">Details</a><?= $article["nom_article"] ?></td>
            <td><?= $article["prix_article"] ?></td>
            <td><?= $article["taille_article"] ?></td>
            <td><?= $article["marque_article"] ?></td>
            <td><?= $article["type_article"] ?></td>
            <td><?= $article["nom_categorie"] ?></td>
            <td><img alt="chaussures" src="images/<?= $article["photo_article"]?>" class="img-thumbnail"
                    width="80" height="40" /></td>

            <td>
            <a href="/delete-article?id=<?= $article["id_article"] ?>" class="btn btn-warning ">Supprimer</a>
            <a href="/add-article?id=<?= $article["id_article"] ?>" class="btn btn-success">Modifier</a>
            </td>


        </tr>

        <?php endforeach ?>


    </tbody>







</table>