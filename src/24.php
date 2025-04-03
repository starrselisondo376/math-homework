<?php 
// Your PHP code goes here...

$pdo = new PDO('mysql:host=localhost;dbname=testdb', 'root', '');
$stmt = $pdo->prepare("SELECT * FROM table_name WHERE condition");
$stmt->execute();

while ($row = $stmt->fetch()) {
    echo "Name: " . $row['name'] . "<br>";
}
?>
