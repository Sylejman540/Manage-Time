<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $localhost = "localhost";
    $dbname = "myfirstdatabase";
    $dbuser =  "root";
    $dbpass = "";

    $conn = new mysqli($localhost, $dbuser, $dbpass, $dbname);

    if($conn->connect_error){
        die("Connection failed:" . $conn->connect_erorr);
    }

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result= $conn->query($sql);
    if($result->num_rows == 1){
        header("Location: /Manage Time/main-page/main.php?success=Login successful");
        exit();
    }else{
        header("Location: /Manage Time/Login/login.php?error=Invalid username or password");
        exit();
    }
}