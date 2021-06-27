<?php

/**
 * routage ,fait un require d'un fichier controleur 
 * en fonction de l'URL de la requete 
 *
 * @param string $path
 * @param array $routes
 * @return void
 */
function dispatchRoute(string $path, array $routes) {

// on cherche a obtenir un fchier a afficher 
// si on ne trouve pas la clef dans la table des routes
// dans ce cas on affiche une page d'erreurs 404

if(array_key_exists($path,$routes)){
    $controller=$routes[$path];
}else {
   $controller="not-found-controller";
}

// le chemin du fichier à inclure 

$controllerPath = "../controllers/$controller.php";

//  si le fichier existe on fait l'inclusion

if(file_exists($controllerPath)){
   require $controllerPath;

} else {
   echo "le fichier n'existe pas";
}


}


function renderView($viewName){
   require "views/$viewName.php";
}
