<?php

if(isset($_SESSION["user_id"])){
    if (!isset($_SESSION["last_regeneration"])) {
             regenerate_session_id();
    } else {
        $interval = 60 * 30;                       // 30 minutes
        if (time() - $_SESSION["last_regeneration"] >= $interval) {
        regenerate_session_id();
    }
    }
}

function regenerate_session_id_loggedin(){
         session_regenerate_id(true);
    
         $userId =  $_SESSION["user_id"];
         $newSessionId = session_create_id();
           $session_id = $newSessionId . "_" . $result["id"];
            session_id($session_id);
    
         $_SESSION["last_regeneration"] = time();
    } 