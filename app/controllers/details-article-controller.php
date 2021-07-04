<?php

// import models
require "../models/list-article-model.php";

$id=filter_input(INPUT_GET,"id",FILTER_SANITIZE_NUMBER_INT);

//var_dump($id);



renderView("details-article",[

    "article"=>getOneArticleById($id)

]);