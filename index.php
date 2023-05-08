<?php

require_once 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
     <div class="container">
        <h1>ONLINE SHOP</h1>
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $prodotto->getName() ?></h5>
            <div><?= $prodotto->getAnimal()->getName() ?></div>
            <p class="card-text">
                <?= $prodotto->getType() ?>
                <?= $prodotto->getPrice() ?>$
            </p>
            <a href="#" class="btn btn-primary">BUY</a>
        </div>
        </div>

        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $giocattolo->getName() ?></h5>
            <div><?= $giocattolo->getAnimal()->getName() ?></div>
            <p class="card-text">
                <?= $giocattolo->getType() ?>
                <?= $giocattolo->getPrice() ?>$</p>
            <a href="#" class="btn btn-primary">BUY</a>
        </div>
        </div>

        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $cuccia->getName() ?></h5>
            <div><?= $cuccia->getAnimal()->getName() ?></div>
            <p class="card-text">
                <?= $cuccia->getType() ?>
                <?= $cuccia->getPrice() ?>$
            </p>
            <a href="#" class="btn btn-primary">BUY</a>
        </div>
        </div>
     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>