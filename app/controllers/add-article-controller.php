<?php


require "../models/list-article-model.php";
require "../models/categorie-model.php";

//initaliser les erreurs à un tableau vide 
$erreurs = [];
//initaliser les elements a poster à un tableau vide 
$inputs = [];

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

    if (empty($inputs["nom_article"])) {
        $erreurs[] = "veuillez saisir le nom de l'article";
    }

    if (empty($inputs["marque_article"])) {
        $erreurs[] = "veuillez saisir la marque de l'article";
    }

    if (empty($inputs["type_article"])) {
        $erreurs[] = "veuillez saisir le type de l'article";
    }

    if (empty($inputs["taille_article"])) {
        $erreurs[] = "veuillez saisir la taille de l'article";
    }


    if (empty($inputs["id_categorie"])) {
        $erreurs[] = "veuillez saisir la categorie de l'article";
    }



   
    // si l'insertion est ok alors redirection

    if(count($erreurs)==0){
        // si insertion dans la BD
    $erreurs = insertArticle($inputs);
        header("location:/list-article");
        exit;
    }



}








renderView("add-article", [
    "categorieList" => getAllCategorie(),
    "erreursList"=>$erreurs,
    "inputs"=>$inputs
]);
