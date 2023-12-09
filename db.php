<?php
$servername = "172.31.22.43";
$username = "Kanjangad200549499";
$password = "JuiF3WH9qj";
$dbname = "Kanjangad200549499";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
