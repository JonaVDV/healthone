<?php

function GetReviews($productId)
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM review WHERE product_id = '$productId'"); 
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
function saveReview($name, $description, $stars, $productId, $userId)
{
    global $pdo;
    $query = $pdo->prepare("INSERT INTO review (name, description, stars, product_id, user_id) VALUES (?, ?, ?, ?, ?)");
    $query->bindParam(1, $name);
    $query->bindParam(2, $description);
    $query->bindParam(3, $stars);
    $query->bindParam(4, $productId);
    $query->bindParam(5, $userId);
    $query->execute();
}
function getUsers(){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM user");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}


/**
 * @return bool true when the array contains an empty value false otherwise
 */

function checkEmpty(array $args){
    $empty = array_search('', $args);
    
    return $empty !== false ? true : false;
}
