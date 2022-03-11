<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/main.css">
    <title>Document</title>
</head>

<body>
    <?php
    $combined = getCategoryAndProduct();
    $categories = getCategories();
    ?>
    <header><?php include_once '../Templates/defaults/pictures.php'; ?></header>
    <?php

    include_once '../Templates/admin/AdminMenu.php';

    ?>
    <main>
        <div class="product-list">
            <?php foreach ($combined as $product) : ?>
                <section class="product-card " data-category="<?= $product['cname'] ?>" data-id="<?= $product['pid'] ?> " data-name="<?= $product['pname'] ?>">
                    <section class="product-body">
                        <img src="../public/img/categories/<?= $product['cname'] ?>/<?= $product['image'] ?>" alt="" class="product-img">
                    </section>
                    <section class="product-buttons">
                        <button class="btn edit" data-id="<?=$product['pid']?>">edit</button>
                        <form action="" method="post">
                        <input type="hidden" name="product-id" value="<?=$product['pid']?>" class="hidden-input">
                            <button class="btn" type="submit" name="submit" value="delete">delete</button>
                        </form>
                    </section>
                </section>
            <?php endforeach; ?>
        </div>
        <section class="form-modal" data-add>
            <div class="modal-content">

                <span class="close">&times;</span>
                <form action="" class="form" method="post" enctype="multipart/form-data">
                    <h2>Add Product</h2>
                    <label for="name">name</label>
                    <input type="text" name="name" id="name">
                    <label for="desc">description</label>
                    <input type="text" name="description" id="desc">
                    <label for="name">image</label>
                    <input type="file" name="image" id="image">
                    <select name="category" id="">
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?= $category->id ?>"><?= $category->name ?></option>
                        <?php endforeach; ?>
                    </select>
                    <button type="submit" name="submit" value="add" class="btn">submit</button>
                </form>
            </div>
        </section>
        <section class="form-modal" data-edit>
            <div class="modal-content">
                <form action="" class="form" method="post" enctype="multipart/form-data">
                    <h2>Edit Product</h2>
                    <label for="name">name</label>
                    <input type="text" name="name" id="name" value="">
                    <label for="desc">description</label>
                    <textarea name="description" id="description" cols="30" rows="6"></textarea>
                    <label for="name">image</label>
                    <input type="file" name="image" id="image" accept=".jpg,.png,.jpeg">
                    <select name="category" id="">
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?= $category->id ?>"><?= $category->name ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="hidden" name="product-id" class="hidden-input">
                    <button type="submit" name="submit" value="edit" class="btn">submit</button>
                </form>

                <button class="btn close">&times;</button>
            </div>
        </section>
    </main>
    <button class="add btn">add product</button>
    <script src="../public/js/main.js"></script>
</body>

</html>