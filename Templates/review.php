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

        <form class="form" method="post">
            <div class="form-item">
                <label for="name" class="form__label">Title</label>
                <input autocomplete="FALSE" required placeholder="" type="text" name="name" id="title" class="form__input">
            </div>
            <div class="form-item">
                <label for="description" class="form__label">description</label>
                <textarea placeholder="" type="" name="description" id="description" class="form__input"></textarea>
            </div>
            <div class="form-item">
                <select name="rate" id="">
                    <option value="1">&star;</option>
                    <option value="2">&star;&star;</option>
                    <option value="3">&star;&star;&star;</option>
                    <option value="4">&star;&star;&star;&star;</option>
                    <option value="5">&star;&star;&star;&star;&star;</option>
                </select>
            </div>
            <button type="submit" class="btn" name="submit">Post review</button>
    
        </form>
    </main>
</body>

</html>