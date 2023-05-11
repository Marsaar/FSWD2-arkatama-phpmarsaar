<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = 'sinauo';

//Connection
$conn = new mysqli($servername, $username, $password, $database);
//Connection Checking
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>