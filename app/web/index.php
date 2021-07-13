<?php
// demarrer la session 
session_start();


// Affichage du details des erreurs
error_reporting(E_ALL);
ini_set("display_errors",1); 



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
    "add-article" => "add-article-controller",
    "add-category" => "add-category-controller",
    "delete-article" => "delete-article-controller",
    "details-article" => "details-article-controller",
    "list-order" => "list-order-controller",
    "add-order" => "add-order-controller",
    "register-client" =>"register-client-controller",
    "login"=>"login-client-controller",
    "logout"=>"logout-client-controller"

];

// execution de routage 
dispatchRoute($path,$routes);

?>

