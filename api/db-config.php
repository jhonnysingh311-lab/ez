<?php
// db-config.php

// Replace these with your InfinityFree MySQL database credentials
$host = 'sql212.infinityfree.com'; // MySQL Hostname
$db   = 'if0_41413289_ez'; // Database Name
$user = 'if0_41413289'; // MySQL Username
$pass = 'ezSingh311'; // MySQL Password
$port = '3306';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Database connection failed', 'details' => $e->getMessage()]);
    exit;
}
?>
