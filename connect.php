<?php       
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "prova_03.06";

$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) {
    die("conexão falhou: " . $conn->connect_error);
} else {
    echo "conexão bem sucedida";
    
}

