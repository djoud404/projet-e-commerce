<?php


function getAllArticle(): array{

     $pdo=getPDO();
     $sql="SELECT a.*,c.nom_categorie FROM article as a
                  JOIN categorie as c ON c.id_categorie=a.id_categorie LIMIT 10 ";

     return $pdo->query($sql)->fetchAll();

}

function getArticleByTerm(string $searchTerm): array{

    $pdo=getPDO();
    $sql="SELECT a.*,c.nom_categorie FROM article as a
                 JOIN categorie as c ON c.id_categorie=a.id_categorie 
                 WHERE nom_article LIKE :term OR type_article LIKE :term OR
                 nom_categorie LIKE :term OR marque_article LIKE :term" ;

    $statement =$pdo->prepare($sql);
    $statement->execute(["term"=>"%$searchTerm%"]);
    return $statement->fetchAll();

}





function insertArticle(array $data): array{

    try{

        
        $pdo=getPDO();
        $sql="INSERT INTO article 
        (nom_article ,marque_article,type_article ,taille_article , prix_article ,photo_article,id_categorie)
         VALUES (:nom_article,:marque_article ,:type_article,:taille_article,:prix_article,:photo_article,:id_categorie)";
         $statement=$pdo->prepare($sql);
         $statement->execute($data);
        return [];

    }catch(Exception $err){
        //echo $err->getMessage();
        return["il ya des erreurs ,impossible d'inserer "];

    }
}