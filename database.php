<?php

$dsn = 'mysql:dbname=lemon;host=localhost;port=3306;charset=utf8';
$username = "arthur";
$password = "arthur";

try {
    $conn = new PDO($dsn, $username, $password);
} catch (Exception $e) {
    die("<br>Erreur : " . $e->getMessage());
}
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$sql = "SELECT * FROM users";
foreach ($conn->query($sql) as $row) {
    print $row['name'] . "\t";
    print $row['firstname'] . "\n";
}
