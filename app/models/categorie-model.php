<?php

function getAllCategorie(): array{

    $pdo=getPDO();
     $sql="SELECT * FROM categorie ";

     return $pdo->query($sql)->fetchAll();


}


function insertCategorie(array $data){
    try {


        $pdo = getPDO();
        $sql = "INSERT INTO categorie (nom_categorie) VALUES (:nom_categorie)";
        $statement = $pdo->prepare($sql);
        $statement->execute($data);
        return [];
    } catch (Exception $err) {
        //echo $err->getMessage();
        return ["il ya des erreurs ,impossible d'inserer"];
    }
}