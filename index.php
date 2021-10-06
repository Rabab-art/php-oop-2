<?php require_once __DIR__ . '/shopping/Product.php';
 require_once __DIR__ . '/shopping/PremiumProduct.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <section class="product">
            <img src="./img/scarpa-air-force-1-LpVrcc.jpg" style="height: 300px;">
            <?php $product = new Product('Scarpe', 'Snickers', 'Uomo', 90, 18); ?>
            <h3><?= $product->getFullInfo(); ?></h3>
            <p>il tuo sconto è: <?= $product->getDisocunt() ?>% </p>
        </section>
        <section class="product">
            <img src="./img/nike_air_force_1_lv8_3_toddler_dj2600-100_white_sail_scarpa_bimbo_unisex_5_.jpg" 
            style="height: 300px"
            alt="">

            <?php $product = new Product('Scarpe', 'Snickers', 'Bimbo', 45, ); ?>
            <h3><?= $product->getFullInfo(); ?></h3>
        </section>
        <section class="product">
            <img src="./img/download.jpg" alt="">
            <?php $product = new PremiumProduct('Scarpe', 'Snickers', 'Donna', 105, ); ?>
            <h3><?= $product->getFullInfo(); ?></h3>
            <p>Solo per i Membri Premium: <?= $product->getDisocunt() ?>% </p>
        </section>
    </main>
</body>