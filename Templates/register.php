<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/main.css">
</head>
<body>
    <header>
        <?php include_once '../Templates/defaults/pictures.php' ?>
    </header>
    <?php include_once '../Templates/defaults/menu.php' ?>
    <main>
        <section class="multipart-form">

            <form action="" method="post" class="register-form">
                <h2>Sign In</h2>
                <label for="first_name">first name</label>
                <input type="text" name="first_name" id="first_name" required>
                <label for="last_name">last name</label>
                <input type="text" name="last_name" id="last_name" required>
                <label for="email">email</label>
                <input type="email" name="email" id="email" required>
                <label for="username">username</label>
                <input type="text" name="username" id="username">
                <label for="password">password</label>
                <input type="password" name="password" id="password">
                <label for="repeat_password">repeat password</label>
                <input type="password" name="password-repeat" id="repeat_password">
                <button type="submit" name="submit" class="btn">Register</button>
            </form>


        </section>


    </main>
</body>

</html>