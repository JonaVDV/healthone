<?php


function addUser($first_name, $last_name, $username, $email, $password){
    if (alreadyExists($username) === false) {
        echo "User";
        global $pdo;
        $query = $pdo->prepare("INSERT INTO user (first_name, last_name, username, email, password) VALUES(?, ?, ?, ?, ?)");
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $query->bindParam(1, $first_name);
        $query->bindParam(2, $last_name);
        $query->bindParam(3, $username);
        $query->bindParam(4, $email);
        $query->bindParam(5, $hash);
        $query->execute();
    }
    if ($query !== false) {
        // echo "User added successfully";
        header("Location: login");
    }
    else {
        echo "User already exists";
        exit();
    }
}


function checkEmptyRegister($first_name, $last_name, $email, $password, $password_repeat){
    $isempty = null;
    if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($password_repeat)) {
        $isempty = true;
    }
    else {
        $isempty = false;
    }
    return $isempty;
}

function validateEmail($email){
    $valid = filter_var($email, FILTER_VALIDATE_EMAIL);
    return $valid ? true : false;
}

function checkMatchPasswords($password, $password_repeat){
    return $password === $password_repeat ? true : false;
}

function alreadyExists($username){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM user WHERE username = ?");
    $query->bindParam(1, $username);
    $query->execute();
    $exists = null;
    if ($query == false) {
        $exists = false;
    }
    else {
        $exists == true;
    }
    $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];
    return $user;
}


function login($email, $password){
    $exists = checkIfExists($email);
    if ($exists != false) {
        $dbPass = $exists['password'];
        $checkPass = password_verify($password, $dbPass);
        if ($checkPass === false) {
            echo "wrong email or password";
            exit();
        }
        else if($checkPass === true){
            session_start();
            $_SESSION['userid'] = $exists['id'];
            $_SESSION['role'] = $exists['role'];
            $location = checkRole($exists['role']);
            header("Location: $location");
            var_dump($_SESSION);
        }
    }
}

function checkIfExists($email){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM user WHERE email = ? OR username = ?");
    $query->bindParam(1, $email);
    $query->bindParam(2, $email);
    $query->execute();
    if ($query === false) {
        echo 'user does not exist';
        exit();
    }
    return $query->fetchAll(PDO::FETCH_ASSOC)[0];
}

function checkEmptyLogin($email, $password){
    $isEmpty = null;
    if (empty($email) || empty($password)) {
        $isEmpty = true;
    }
    else {
        $isEmpty = false;
    }
    return $isEmpty;
}
function checkRole($role){
    return $role === 'admin' ? 'admin' : 'home';
}
