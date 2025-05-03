<?php
   require_once 'includes/config.session.inc.php';
   require_once 'includes/signup.view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="images/logo.png">
    <title>TimeWise | Open Your Account</title>
</head>
<body class="bg-gray-100">
    <h1 class="text-4xl font-bold text-center mb-10 mt-10">
        Sign <span class="text-blue-500">Up</span>
    </h1>

    <!-- Signup Form -->
    <form class="flex flex-col items-center mt-20" action="includes/signup.inc.php" method="post">
        <?php signup_inputs(); ?>
        <button type="submit" name="submit" class="bg-blue-500 w-[260px] text-white font-bold p-2 rounded-lg mb-5 hover:bg-blue-800">
            Submit
        </button>
    </form>

    <!-- Link to Login -->
    <p class="text-center mt-5 text-gray-600">
        Already have an account? 
        <a href="/Manage Time/Login/index.php" class="text-blue-500 font-semibold hover:underline">Log In</a>
    </p>

    <!-- Display Signup Errors -->
    <?php if (isset($_SESSION['signup_error'])): ?>
        <p class="text-red-500 text-center mt-5">
            <?php 
                echo $_SESSION['signup_error']; 
                unset($_SESSION['signup_error']); 
            ?>
        </p>
    <?php endif; ?>

</body>
</html>
