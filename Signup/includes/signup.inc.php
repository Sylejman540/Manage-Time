<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    try {

        require_once "dbh.inc.php";
        require_once "signup.model.php";
        require_once "signup.contr.inc.php";

        // Error Handling
        $errors = [];

        if(is_input_empty($username, $password, $email)){
            $errors["input_invalid"] = "Input cannot be empty!";
        }

        if(is_email_invalid($email)){
            $errors["email_invalid"] = "Email is invalid!";
        }

        if(is_username_taken($pdo, $username)){
            $errors["username_taken"] = "Username is already taken!";
        }

        if(is_email_registred($pdo, $email)){
            $errors["email_registred"] = "Email is already registered!";
        }

        require_once "config.session.inc.php";

        if($errors){
            $_SESSION["errors_signup"] = $errors;

            $signupData = [
                "username" => $username,
                "email" => $email
            ];

            $_SESSION["signupData"] = $signupData;
            header("Location: ../index.php?error=signupfailed");
            exit();
        }

        create_user($pdo, $username, $password, $email);

        // Redirect to main.php in main-page folder after success
        header("Location: /Manage Time/main-page/main.php?signup=success");
        $pdo = null;
        $statement = null;
        die();

    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        die();
    }

    
} else {
    header("Location: ../index.php?error=invalidrequest");
    exit();
}
