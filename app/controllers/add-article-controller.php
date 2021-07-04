<?php


require "../models/list-article-model.php";
require "../models/categorie-model.php";

//initaliser les erreurs à un tableau vide 
$erreurs = [];
//initaliser les elements a poster à un tableau vide 
$inputs = [];


// recuperer le paramtre l'id dans l'URL poour la modification
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
// si l'id existe on va recuprerer les données dans la fonction getOneArticleById() pour modifier les données dans 
// add-article.php 

if (!empty($id)) {

    try {
        $inputs=getOneArticleById($id);
        //var_dump($inputs);
    } catch (Exception $err) {
        $erreurs[] = $err->getMessage();
    }
}

/***************
 * TRAITEMENT DU FORMULAIRE D INSERTION
 */

if (isPosted()) {

    $inputs = filter_input_array(INPUT_POST, [
        "nom_article" => FILTER_SANITIZE_STRING,
        "marque_article" => FILTER_SANITIZE_STRING,
        "type_article" => FILTER_SANITIZE_STRING,
        "taille_article" => FILTER_SANITIZE_NUMBER_INT,
        "prix_article" => FILTER_SANITIZE_NUMBER_FLOAT,
        "photo_article" => FILTER_SANITIZE_STRING,
        "id_categorie" => FILTER_SANITIZE_NUMBER_INT

    ]);
     
    if(empty($id)){
        //si l'id n'existe pas est vide on fait l insertion
         $erreurs = insertArticle($inputs);
    // si l'insertion est ok alors redirection
    } else {
        // si l'id existe ,on rajoute cet id aux données du tableau
        // pour la fonction updateArticle
        $inputs["id_article"]= $id;
        $erreurs=updateArticle($inputs);
    }
   

    if (count($erreurs) == 0) {

        header("location:/list-article");
        exit;
    }
}




renderView("add-article", [
    "categorieList" => getAllCategorie(),
    "erreursList" => $erreurs,
    "inputs" =>  $inputs
]);
