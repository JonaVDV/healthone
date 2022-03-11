<!DOCTYPE html>
<html lang="en">


    <?php include_once '../Templates/defaults/head.php' ?>

<body>
    <header>

        <?php include_once '../Templates/defaults/pictures.php' ?>
    </header>

    <?php include_once '../Templates/defaults/menu.php' ?>

    <main>
        <form method="post" action="" class="login-form">
            <h1>Login</h1>
            <div class="form-item">
                <label for="email">username</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="form-item">
                <label for="password">password</label>
                <input type="password" name="password" id="password">
            </div>
            <button type="submit" name="submit" class="btn">Log in</button>
        </form>
    </main>
</body>

</html>