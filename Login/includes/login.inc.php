<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    try{

        require_once 'dbh.inc.php';
        require_once 'login.model.inc.php';
        require_once 'login_contr.inc.php';

        // Errors handler
        $errors = [];

        if(is_input_empty($username, $password)){
            $errors["empty_input"] = "Fill in all fields";
        }

        $result = get_user($pdo, $username);

        if(is_username_wrong($result)){
            $errors["username_not_found"] = "Username not found";
        }

        if (!is_username_wrong($result) && password_verify($password, $result["password"])) {
            $errors["wrong_password"] = "Wrong password";
        }
        

        require_once 'config.session.inc.php';

        if($errors){
            $_SESSION["login_error"] = $errors;
            
            header("Location: ../index.php?error=loginfailed");
            die();
        }

        header("Location: /Manage Time/main-page/main.php?success=login");
        $pdo = null;
        $statement = null;

        die();
        
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

}else{
    header("Location: /Manage Time/main-page/main.php?success=login");
    die();
}