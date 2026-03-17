<?php
// db-config.php

// Replace these with your InfinityFree MySQL database credentials
$host = 'YOUR_INFINITYFREE_DB_HOST'; // e.g., sql208.ezyro.com
$db   = 'YOUR_INFINITYFREE_DB_NAME'; // e.g., ezyro_12345678_database
$user = 'YOUR_INFINITYFREE_DB_USER'; // e.g., ezyro_12345678
$pass = 'YOUR_INFINITYFREE_DB_PASS'; // Your VistaPanel password
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
