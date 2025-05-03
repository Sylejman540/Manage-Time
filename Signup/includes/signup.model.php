<?php

declare(strict_types=1);

function get_username(object $pdo, string $username){
    $query = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);   
    return $result;
}

function get_email(object $pdo, string $email){
    $query = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);   
    return $result;
}

function set_user(object $pdo, string $username, string $password, string $email){
    $query = "INSERT INTO users(username, email, password) VALUES(:username, :email, :password)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
}