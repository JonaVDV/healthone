<!DOCTYPE html>
<html>
<?php
global $products;

include_once('defaults/head.php');
?>

<body>

    <!-- <div class="container"> -->
    <header>
        <?php
        include_once('defaults/pictures.php');
        ?>
    </header>
    <?php

    include_once('defaults/menu.php');
    ?>

    <main>

        <div class="products-list">
            <?php foreach ($products as $product) : ?>
                <div class="card">
                    <div class="card-header">
                        <h2><?= $product->name ?></h2>
                    </div>
                    <div class="card-body">
                        <a href="/product/<?= $product->id ?>">
                            <img class="card-image" src="/img/categories/<?= $name ?>/<?= $product->image ?>">
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
    
        </div>
    </main>
    <!-- </div> -->

</body>

</html>