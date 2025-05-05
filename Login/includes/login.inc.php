<?php
// login.inc.php
session_start();

require_once __DIR__ . '/dbh.inc.php';  // sets up $pdo

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../login.php');
    exit;
}

$email    = trim($_POST['email']    ?? '');
$password = $_POST['password'] ?? '';

// 1) Basic validation
if ($email === '' || $password === '') {
    $_SESSION['login_error'] = 'Please fill in all fields.';
    header('Location: ../login.php');
    exit;
}

// 2) Fetch user by email
$stmt = $pdo->prepare('SELECT id, password FROM users WHERE email = ?');
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);


// 3) Success — store user ID in session
$_SESSION['user_id']    = (int)$user['id'];
// you can also store email or username if you like:
// $_SESSION['user_email'] = $email;

// 4) Redirect into your app
header('Location: /Manage Time/main-page/main.php?login=success');
exit;