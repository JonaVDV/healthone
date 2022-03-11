<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/main.css">
    <title>Document</title>
</head>


<?php
$profile = getProfile($_SESSION['userid']);

?>

<body>
    <header>
        <?php include_once '../Templates/defaults/pictures.php'?>
    </header>
    <?php include_once '../Templates/defaults/menu.php'?>
    <main>
        <section class="profile-card">

            <section class="modify-profile">
                <h1>edit profile</h1>
                <form action="" class="form" method="post">
                    <label for="pwd">password</label>
                    <input type="password" name="edit-pwd" id="pwd">
                    <label for="pwd">password repeat</label>
                    <input type="password" name="repeat-pwd" id="">
                    <button class="btn" type="submit" name="submit" value="submit">edit password</button>
                </form>
            </section>
            <section class="additional-info">
                <section class="name">

                    <p class="fname"><?=$profile['first_name']?></p>
                    <p class="lname"><?=$profile['last_name']?></p>
                </section>
                <span class="email"><?=$profile['email']?></span>
            </section>


            <section class="profile-details">
                <img src="../public/img/categories/roeitrainer/kekw.png" alt="" class="profile-picture">
                <h2 class="username"><?=$profile['username']?></h2>
                <span class="permission-level"><?=$profile['role']?> </span>
            </section>

        </section>
    </main>

</body>

</html>