<!DOCTYPE html>
<html lang="fr">
<title><?= $titre ?></title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body class="container-fluid">
    <!-- debut navigation -->
    <?php require "navigation.php" ?>
    <!-- fin de navigation -->
    <div class="row justify-content-center">

        <div class="col-md-9 p-2 mt-4">
        <?php if(hasFalshMessage()) : ?>
         <div class="alert alert-warning mt-2 mb-2">
         <?= getFalshMessage() ?>
         </div>
        <?php endif ?>
            <?= $content ?>
        </div>
    </div>
</body>

</html>