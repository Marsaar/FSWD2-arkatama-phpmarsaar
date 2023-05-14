<?php
    session_start();
    //Redirect ke Login.php jika masih belum Login
    if (!isset($_SESSION['name'])) {
        header("Location: login.php");
    }
    //Tombol ke Tabel Users
    if (isset($_POST['submit'])) {
        header("Location: tableuser.php");
    }
    //Tombol Logout
    if (isset($_POST['submit1'])) {
        header("Location: logout.php");
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
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-fluid py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="">
                    <div class="card-body p-5 text-center">
                        <form action="" method="POST">
                            <h2 class="fw-bold text-uppercase">Login Berhasil!</h2>
                            <p class="text-black-50"><?php echo "<p>Selamat Datang, " . $_SESSION['name'] ."!". "</p>"; ?></p>
                            <br>
                            <button type="submit" class="btn btn-info" name="submit">Index</button>
                            <button type="submit" class="btn btn-info" name="submit1">Log Out</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>