<?php
    include 'connection.php';
    
    $name = $_POST['nama'];
    $role = $_POST['role'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $avatar = $_POST['avatar'];

    mysqli_query($conn, "insert into users(email, name, role, avatar, phone, address, password) values('$email','$name','$role','$avatar','$phone','$address','$password')");
?>