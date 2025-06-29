<?php

declare(strict_types=1);

function is_input_empty(string $username, string $email, string $password){
    if(empty($username) || empty($email) || empty($password)){
        return true;
    }else{
        return false;
    }
}

function is_email_invalid($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
}

function is_email_registred(object $pdo, string $email){
    if(get_email($pdo ,$email)){
        return true;
    }else{
        return false;
    }
}

function is_username_taken(object $pdo, string $username){
    if(get_username($pdo, $username)){
        return true;
    }else{
        return false;
    }
}

function create_user(object $pdo, string $username, string $email, string $password){
    set_user($pdo, $username, $email, $password);
}