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


function getView(string $viewName,array $data){
    // mise en cache de la sorte PHP
    // le resultat ne sera pas immediatement envoyé
    // dans une reponse 

    ob_start();

    // Transformation des clefs de $data en variables 
    // $data["title"]=$title
   extract($data);

   require "../views/$viewName.php";


   // recuperation de la memoire tampon dans une variable 
   // le tampon est ensuite vidé

   $html=ob_get_clean();


   return $html;



}


function renderView(string $viewName, array $data){
   // obtenir le resultat de la vue 

   $content = getView($viewName,$data);

   // ajouter le rendu de la vue aux données 
   $data["content"]=$content;


   // obtenir le resultat du layout et lui rajouter la $data qui possede $content
   // obtenir une vue dans une autre vue 

   $html=getView("layout",$data);

   echo $html;
}
