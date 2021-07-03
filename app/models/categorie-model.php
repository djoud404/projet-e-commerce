<?php

function getAllCategorie(): array{

    $pdo=getPDO();
     $sql="SELECT * FROM categorie ";

     return $pdo->query($sql)->fetchAll();


}