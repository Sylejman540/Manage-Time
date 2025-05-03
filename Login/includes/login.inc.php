<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    try{

        require_once 'dbh.inc.php';
        require_once 'login.model.inc.php';
        require_once 'login.contr.inc.php';

        // Errors handler
        $errors = [];

        if(is_input_empty($username, $password)){
            $errors["empty_input"] = "Fill in all fields";
        }

        $result = get_user($pdo, $username);
        if(is_username_wrong($result)){
            $errors["username_not_found"] = "Username not found";
        }

        if(!is_username_wrong($result) && is_password_wrong($password, $result["password"])){
            $errors["wrong_password"] = "Wrong password";
        }

        require_once 'config.session.php';

        if($errors){
            $_SESSION["login_error"] = $errors;
             
            header("Location: ../index.php?error=loginfailed");
            die();
        }

        $newSessionId = session_create_id();
        $session_id = $newSessionId . "_" . $result["id"];
        session_id($session_id);

        $_SESSION["last_regeneration"] = time();
        regenerate_session_id_loggedin();

        header("Location: /Manage Time/main-page/main.php?login=success");
        $pdo = null;
        $statement = null;

        die();
        
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

}else{
    header("Location: ../index.php");
    die();
}