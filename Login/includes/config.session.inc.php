<?php
declare(strict_types=1);

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 0, // Session cookie
    'path' => '/',
    'domain' => 'localhost',
    'secure' => true, // Only send over HTTPS
    'httponly' => true, // Prevent JavaScript access
]);

session_start();
// LOGIN FORM
// if(isset($_SESSION["user_id"])){
//     if (!isset($_SESSION["last_regeneration"])) {
//         regenerate_session_id();
//     } else {
//         $interval = 60 * 30;                       // 30 minutes
//         if (time() - $_SESSION["last_regeneration"] >= $interval) {
//             regenerate_session_id();
//         }
//     }
// }else{
//     if (!isset($_SESSION["last_regeneration"])) {
//         regenerate_session_id();
//     } else {
//         $interval = 60 * 30;                       // 30 minutes
//         if (time() - $_SESSION["last_regeneration"] >= $interval) {
//             regenerate_session_id();
//         }
//     }
// }
// SIGN UP FORM
 if (!isset($_SESSION["last_regeneration"])) {
         session_regenerate_id();
     $_SESSION["last_regeneration"] = time();
 } else {
    $interval = 60 * 30;                       // 30 minutes
    if (time() - $_SESSION["last_regeneration"] >= $interval) {
         session_regenerate_id();
        $_SESSION["last_regeneration"] = time();
    }
 }  

// function regenerate_session_id_loggedin(){
//     session_regenerate_id(true);

//     $userId =  $_SESSION["user_id"];
//     $newSessionId = session_create_id();
//         $session_id = $newSessionId . "_" . $result["id"];
//         session_id($session_id);

//     $_SESSION["last_regeneration"] = time();
// } 

function regenerate_session_id(){
    session_regenerate_id(true);
    $_SESSION["last_regeneration"] = time();
} 