<?php
// Connection details
$host = 'localhost'; // Use the service name from docker-compose.yml
$port = '5432'; // Default PostgreSQL port
$dbname = 'postgres'; // From POSTGRES_DB in docker-compose.yml
$user = 'postgres'; // From POSTGRES_USER
$password = 'eno1wlp3s0#497$'; // From POSTGRES_PASSWORD

try {
    // Create a new PDO connection
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    // Set the error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to the PostgreSQL database successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

