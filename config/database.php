<?php
// database.php - Database connection
$host = 'localhost';
$dbname = 'solar_maintenance';
$username = 'root';  // Default for XAMPP, change as needed
$password = '';      // Default for XAMPP, change as needed

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>
