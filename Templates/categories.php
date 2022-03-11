<!DOCTYPE html>
<html>
<?php
global $categories;
include_once('defaults/head.php');
?>

<body>
    <?php
    // include_once('defaults/header.php');
    // include_once('defaults/menu.php');
    // include_once('defaults/pictures.php');
    ?>
    <header>
        <img src="../public/img/healthone-wide.png" alt="" class="banner">
    </header>
    <?php 
        include_once('defaults/menu.php')
    ?>
    <main>
        <div class="categories-list">
            <?php foreach ($categories as $data) : ?>
                <div class="category-card">
                    <div class="category-header">
                        <h2><?= $data->name ?></h2>
                    </div>
                    <div class="category-body">
                        <a href="category/<?= $data->id ?>">
                            <img src="<?= $data->image ?>" class="category-img">
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

</body>

</html>