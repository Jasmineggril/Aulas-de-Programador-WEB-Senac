<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "empresa";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
