<?php

declare(strict_types=1); 

function is_input_empty(string $username, string $password) {
    if(empty($username) || empty($password)){
        return true;
    }else{  
        return false;
    }   
}

function is_username_wrong($result) {
    if (is_array($result)) {
        return empty($result['username']) || empty($result['password']);
    }
    return !$result;
}
 

function is_password_wrong(string $password, string $hash) {
    if (!password_verify($password, $hash)) {
        return true;                            
    }else{
        return false;
    }
}