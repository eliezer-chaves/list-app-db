<?php
$host = 'junction.proxy.rlwy.net';
$db = 'railway';
$user = 'root';
$pass = 'dWaytKoRcQfhwtDqkfoEqQnQFcTYOvkr';
$port = '37762';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;port=$port", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
