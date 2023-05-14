<?php
    include 'connection.php';
    
    if(!$conn){
        die("connect to this database failed due to". mysqli_connect_error());
    }

    error_reporting(0);

    session_start();
    /* jika berhasil mendapatkan name,
    maka akan beralih ke halaman hasillogin.php */
    if (isset($_SESSION['name'])) {
        header("Location: hasillogin.php");
    }
    /* source code mendapatkan akses masuk aplikasi
    dengan menggunakan email dan password
    untuk mendapatkan nama users yang terdaftar */
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
         
        $sql = "SELECT * FROM users WHERE email='$email' 
        and password='$password'";
        $result = mysqli_query($conn, $sql);

        $cek= mysqli_num_rows($result);
        if ($cek > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['name'] = $row['name'];
            header("Location: hasillogin.php");
        }else{
            echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/javascript/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <br>
        <div class="container-fluid py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="">
                        <div class="card-body p-5 text-center">
                            <h2 class="fw-bold mb-2 text-uppercase">Log In</h2>
                            <p class="text-white-50 mb-5">Please enter your Email and password!</p>
                            <form action="" method="POST" class="form">
                                <div class="form-outline mb-4">
                                    <input name="email" type="email" placeholder="Email Address" class="form-control form-control-lg" value="<?php echo $email; ?>" required> </div>
                                <div class="form-outline mb-4">
                                    <input name="password" type="password" placeholder="Password" class="form-control form-control-lg" value="<?php echo $password; ?>" required> </div>
                                <div class="form-outline mb-4 d-grid gap-2">
                                    <button name="submit" type="submit" class="btn btn-info" >Login </button>
                                </div>
                                <div>
                                    <p class="mb-2"> Don't have an account? <a class="text-white-50 fw-bold" href="signup.php">Sign up</a></p>
                                </div>
                                <hr class="my-4"> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>

