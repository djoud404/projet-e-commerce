<?php

// Affichage du details des erreurs
error_reporting(E_ALL);
ini_set("display_errors",1); 

// Definition de la configuration de l'application
define("DSN","mysql:host=mysql-djoud.alwaysdata.net; port=3306; dbname=djoud_projet_ecommerce; charset=utf8");
define("DB_USER","djoud");
define("DB_PASS","0553683253nass");

// import des bibliotheque 
require "../lib/framework.php";
require "../lib/database.php";

$path = filter_input(INPUT_GET, "path", FILTER_SANITIZE_URL) ?? "home";

// table de routage 
// qui fait correspondre un URL et un nom de fichier
$routes=[
    "home"=>"home-controller",
    "contact"=>"contact-controller",
    "list-article"=>"list-article-controller",
    "search-article"=>"article-search-controller",
    "add-article" => "add-article-controller"
];

// execution de routage 
dispatchRoute($path,$routes);

?>

