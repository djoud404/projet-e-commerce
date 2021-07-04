<?php
// import model
require "../models/categorie-model.php";



$erreurs=[];
$inputs=[];

if(isPosted()){

    $inputs = filter_input_array(INPUT_POST, [
        "nom_categorie" => FILTER_SANITIZE_STRING,
       


    ]);


$erreurs=insertCategorie($inputs);


  if(count($erreurs)==0){

    header("location:add-category");
    exit;
  }


    

}




renderView("add-categorie",[
    "categorieList"=>getAllCategorie(),
    "erreursList"=>$erreurs,
    "inputs"=>$inputs
]);
