<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tambah User</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/javascript/bootstrap.bundle.min.js"></script>
    <style>
        .body{
            min-height: 100vh;
            background-color: #FFE53B;
            background-image: linear-gradient(147deg, #FFE53B 0%, #FF2525 100%);
        }
    </style>
</head>
<body>
    <form method="POST" action="action.php">
    <div class="container">
        <h2 class="alert bg-black text-center text-light mt-3">TAMBAH USER</h2>
        <form>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
            </div>
            <br>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Role</label><br>
                        <select class="form-select" id="inputGroupSelect04" name="role">
                            <option value="staff">Staff</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Isikan Password User">
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Isikan Email User">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>No. Telp</label>
                        <input type="text" name="phone" class="form-control" placeholder="Isikan Nomor Telepon User">
                    </div>
                </div>
            </div>
            <br>

            <div class="form-group">
                <label>Alamat Lengkap</label>
                <textarea name="address" class="form-control" placeholder="Tuliskan Alamat Lengkap User" rows="3"></textarea>
            </div>
            <br>

            
            <div class="form-group">
                <label>Unggah Foto</label>
                <input type="file" name="avatar" class="form-control">
            </div>
            <br>

            <button type="submit" name="save" class="btn btn-success" value="SUBMIT">Submit</button>
            
        </form>
    </div>
    
    
</body>
</html> 