<?php
function getProducts(int $categoryId): array
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM products WHERE categoryid = ?");
    $query->bindParam(1, $categoryId);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_CLASS, 'Product');
}

function getProduct(int $productId)
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $query->bindParam(1, $productId);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_CLASS, "Product")[0];
}

function editProduct($categoryid, $name, $description, $image, $productId)
{
    global $pdo;
    $query = $pdo->prepare("UPDATE `products` SET categoryid= ? ,name= ?,description=?,image=? WHERE id = ?");
    $query->bindParam(1, $categoryid);
    $query->bindParam(2, $name);
    $query->bindParam(3, $description);
    $query->bindParam(4, $image);
    $query->bindParam(5, $productId);
    $query->execute();
}

function addProduct($category_Id, $name, $description, $image)
{
    global $pdo;
    $query = $pdo->prepare("INSERT INTO products (categoryid, name, description, image) VALUES (?, ?, ?, ?)");
    $query->bindParam(1, $category_Id);
    $query->bindParam(2, $name);
    $query->bindParam(3, $description);
    $query->bindParam(4, $image);
    $query->execute();
}
function removeProduct($id)
{
    global $pdo;
    $query = $pdo->prepare("DELETE FROM products WHERE id = ?");
    $query->bindParam(1, $id);
    $query->execute();
}

function getCategoryAndProduct()
{
    global $pdo;
    $query = $pdo->prepare("SELECT p.name AS pname, p.id AS pid, c.name AS cname, p.image, c.id FROM `products` AS p  JOIN catagories AS c ON p.categoryid = c.id ORDER BY pid ASC");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
/**
 * 
 * @return true | false
 * 
 * returns true if one of the imputs are empty
 * 
 * returns false otherwise
 */
function checkEmptyAddProduct($name, $description, $image, $category_id)
{
    $isEmpty = null;
    if (empty($name) || empty($description) || empty($image) || empty($category_id)) {
        $isEmpty = true;
    } else {
        $isEmpty = false;
    }
    return $isEmpty;
}

function getInitialValues($id)
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM products WHERE id = '$id'");
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}
