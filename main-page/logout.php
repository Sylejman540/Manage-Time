<?php

session_start();

session_unset();

session_destroy();

if(ini_get("session.use_cookies")){
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000
    );
}

header("Location: /Manage Time/Signup/index.php");
exit();