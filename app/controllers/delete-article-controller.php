<?php

//import de modele

require "../models/list-article-model.php";


$id = filter_input(INPUT_GET,"id",FILTER_SANITIZE_NUMBER_INT);

//var_dump($id);
// suppression d'un article 
$result = deleteArticleById($id);

// enregistrement du message de resultat
// dans un message flash

setFalshMessage($result);

header("location:/list-article");

