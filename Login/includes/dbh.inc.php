<?php
$host       = 'localhost';
$dbname     = 'myfirstdatabase';
$dbusername = 'root';
$dbpassword = '';

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // throw exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // nice default fetch
        PDO::ATTR_EMULATE_PREPARES   => false,                  // real prepared stmts
    ]);

    echo '✅ Database connection successful.';
} catch (PDOException $e) {
    // Never echo raw errors in production—log them instead
    echo '❌ Connection failed: ' . $e->getMessage();
}
