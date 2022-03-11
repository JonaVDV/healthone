<?php
function getCategories()
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM  catagories");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_CLASS, 'Category');
}

function getCategoryName(int $id):string
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM catagories WHERE id= ?");
    $query->bindParam(1, $id, PDO::PARAM_INT);
    $query->setFetchMode(PDO::FETCH_CLASS, Category::class);
    $query->execute();
    $category = $query->fetch();
    return $category->name;
}
