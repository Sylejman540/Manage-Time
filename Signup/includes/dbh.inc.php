<?php
// db.php
// Adjust these to match your MySQL credentials
$host   = 'localhost';
$dbname = 'myfirstdatabase';
$user   = 'root';
$pass   = '';
$dsn    = "mysql:host={$host};dbname={$dbname};charset=utf8mb4";

try {
    $pdo = new PDO(
        $dsn,
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    exit('Database error: ' . $e->getMessage());
}
