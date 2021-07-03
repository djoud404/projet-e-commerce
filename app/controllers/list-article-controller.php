<?php

// import du modele 
require "../models/list-article-model.php";

$listArticle=getAllArticle();
 

renderView("list-article",[
    "articleList"=>$listArticle,
    "titre"=>"Catalogue"
]);