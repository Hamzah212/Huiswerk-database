<?php
$servername = "localhost";
$username = "root";
$password = "1Hamzah/";
$database = "world";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "De connectie is gelukt";
} catch (PDOException $e) {
    echo "Er is een fout opgetreden, namelijk deze fout: " . $e->getMessage();
    echo "Bestand: " . $e->getFile();
    echo "Regel: " . $e->getLine();
}
?>
