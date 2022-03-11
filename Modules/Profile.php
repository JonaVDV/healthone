<?php

function editPassword($password, $id){
    global $pdo;
    $query = $pdo->prepare("UPDATE `user` SET password = ? WHERE id = ?");
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query->bindParam(1, $hash);
    $query->bindParam(2, $id);
    $query->execute();
}


function getProfile($id){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM `user` WHERE id = ?");
    $query->bindParam(1, $id);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC)[0];
}
