<?php
$servername = "mysql";
$username = "root";
$password = "";
$dbname = "winkel";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connectie mislukt:" . $conn->connect_error);
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$query = "SELECT * FROM producten";
$statement = $conn->prepare($query);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
 
if ($result) {
    foreach ($result as $row) {
        echo "Product Code: ->45 " . $row["product_code"] . ", Naam: -> shirt " . $row["product_naam"] . ", Prijs: -> 19,99 " . $row["prijs_per_stuk"] . "<br>";
    }
} else {
    echo "Error executing query: " . $stmt1->errorInfo()[2];
}
$conn = null;
?>
</body>
</html>