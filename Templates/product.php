<!DOCTYPE html>
<html>
<?php
global $product;
global $name;
global $reviews;
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
        <div class="product-card">
            <img src="/img/categories/<?=$name ?>/<?=$product->image ?>" class="product-img">
            <h2 class="product-title"><?=$product->name?></h2>
            <p class="product-description"><?=$product->description?></p>
        </div>
        <div class="review-container">
            <?php foreach ($reviews as $review) : ?>
                <article class="review">
                    <section class="user-info">
                        <img src="../public/img/categories/roeitrainer/kekw.png" alt="avatar" class="avatar">
                        <span class="username">Jona</span>
                    </section>
                    <section class="review-contents">
                        <h4 class="review-title"><?= $review['name']; ?></h4>
                        <p class="review-description"><?= $review['description']; ?></p>
                    </section>
                    <div class="additional-info">
                        <span class="review-date"><?= $review['date']; ?></span>
                        <span class="review-rating"><?= $review['stars'] . '&#9733;'; ?>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
            <?php if (isset($_SESSION['userid'])): ?>
                <button class="btn" type="button" onclick="window.location='/review/<?= $product->id ?>'">add review</a>
            <?php endif; ?>
            <?php if (!isset($_SESSION['userid'])): ?>
                <button class="btn" type="button" onclick="window.location='/review/<?= $product->id ?>'" disabled>login to leave a review</a>
            <?php endif; ?>
    </main>
</body>

</html>