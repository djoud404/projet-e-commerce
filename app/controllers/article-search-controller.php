<?php
// import le modele
require "../models/list-article-model.php";


//Récuperer l'element de recherche saisie
$searchTerm = filter_input(INPUT_GET,"search",FILTER_SANITIZE_STRING);


renderView("list-article",[
    "articleList"=>getArticlebyTerm($searchTerm)
]);