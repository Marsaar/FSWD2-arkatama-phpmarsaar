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
//echo "Connected successfully <br>";

//Call Insert Function
/*
echo insertProd($conn, $servername, $username, $password, $database);
echo insertCat($conn, $servername, $username, $password, $database);
*/

//Insert categories Function
function insertCat($conn, $servername, $username, $password, $database){
    $sql =  "
            INSERT INTO categories(name, created_at, updated_at) 
            VALUES ('Kategori 11','2023-04-03 06:30:17','2023-04-03 06:30:17')
            ";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}
//Insert products Function
function insertProd($conn, $servername, $username, $password, $database){
    
    $sql =  "
            INSERT INTO products(name, category_id, description, price, status, created_at, updated_at, created_by)
            VALUES ('Produk 31', 9,'Lorem, ipsum dolor sit amet', 20000 ,'accepted','2023-04-03 06:30:17','2023-04-03 06:30:17', 1)
            ";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}

?>