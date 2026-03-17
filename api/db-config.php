<?php
// db-config.php

// Replace these with your InfinityFree MySQL database credentials
$host = 'sql113.infinityfree.com'; // MySQL Hostname
$db   = 'if0_41413351_spro'; // Database Name
$user = 'if0_41413351'; // MySQL Username
$pass = 'sproSingh311'; // MySQL Password
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
