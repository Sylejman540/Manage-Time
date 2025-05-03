<?php

declare(strict_types=1);

function signup_inputs() : void {
    // Username field with value population from session if available
    if (isset($_SESSION["signupData"]["username"])) {
        $u = htmlspecialchars($_SESSION["signupData"]["username"], ENT_QUOTES);
        echo "<input type=\"text\" name=\"username\" placeholder=\"Username\" value=\"{$u}\" class=\"mt-2 p-2 mb-5 border border-gray-300 rounded-lg w-80 focus:outline-none focus:ring-2 focus:ring-[#5869FF]\">";
    } else {
        echo '<input type="text" name="username" placeholder="Username" value="" class="mt-2 p-2 mb-5 border border-gray-300 rounded-lg w-80 focus:outline-none focus:ring-2 focus:ring-[#5869FF]">';
    }

    // Password field (passwords should never be pre-populated for security reasons)
    echo '<input type="password" name="password" placeholder="Password" class="mt-2 p-2 mb-5 border border-gray-300 rounded-lg w-80 focus:outline-none focus:ring-2 focus:ring-[#5869FF]">';

    // Email field with value population from session if available
    if (isset($_SESSION["signupData"]["email"])) {
        $e = htmlspecialchars($_SESSION["signupData"]["email"], ENT_QUOTES);
        echo "<input type=\"text\" name=\"email\" placeholder=\"Email\" value=\"{$e}\" class=\"mt-2 p-2 mb-5 border border-gray-300 rounded-lg w-80 focus:outline-none focus:ring-2 focus:ring-[#5869FF]\">";
    } else {
        echo '<input type="text" name="email" placeholder="Email" value="" class="mt-2 p-2 mb-5 border border-gray-300 rounded-lg w-80 focus:outline-none focus:ring-2 focus:ring-[#5869FF]">';
    }
}


// function check_signup_errors(){
//     if (isset($_SESSION["errors_signup"])) {
//         foreach ($_SESSION["errors_signup"] as $error) {
//             echo "<p>$error</p>";
//         }
//         unset($_SESSION["errors_signup"]);
//     }    
// }