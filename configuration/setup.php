<?php

$host = "localhost";
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "dimaborec";

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";
try {
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected to the database successfully";
    // Make the PDO instance available globally
    $GLOBALS['pdo'] = $pdo;
} catch (PDOException $e) {
    echo "Failed to connect to the database: " . $e->getMessage();
    die();
}
?>