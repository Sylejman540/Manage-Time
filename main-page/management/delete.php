<?php

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "manage-time";

    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM users WHERE id=$id";
    $connection->query($sql);

    header("Location: index.php");
    die;
}else{
    header("Location: index.php");
    die;
}