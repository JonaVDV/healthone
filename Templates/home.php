<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>
    <header>
        <img src="../public/img/healthone-wide.png" alt="" class="banner">
    </header>
    <?php 
        include_once('defaults/menu.php')
    ?>
    <main>
        <section class="main-content">
            
            <?php include_once('defaults/info.php') ?>
            <section class="buttons">
                <button class="btn" onclick="window.location = '/register'">sign up now!</button>
                <button class="btn" onclick="window.location = '/categories'">show products</button>
            </section>
        </section>
    </main>
</body>

</html>