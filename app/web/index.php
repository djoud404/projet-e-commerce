<?php

// Affichage du details des erreurs
error_reporting(E_ALL);
ini_set("display_errors",1); 

// import des bibliotheque 
require "../framework.php";

$path = filter_input(INPUT_GET, "path", FILTER_SANITIZE_URL) ?? "";

// table de routage 
// qui fait correspondre un URL et un nom de fichier
$routes=[
    "home"=>"home-controller",
    "contact"=>"contact-controller"
];

// execution de routage 
dispatchRoute($path,$routes);

