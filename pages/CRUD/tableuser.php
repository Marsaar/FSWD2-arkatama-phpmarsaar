<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/javascript/bootstrap.bundle.min.js"></script>
    <title>Tabel User</title>
</head>
<body>
    <h1>Data Pengguna</h1>
        <table class="table">
        <thead class="table-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Aksi</th>
            <th scope="col">Avatar</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Role</th>
            </tr>
        </thead>
        
        <?php
            include 'connection.php';
            $fetchdata = mysqli_query($conn, 
                        "SELECT avatar, name, email, phone, role FROM users");
                        while ($view = mysqli_fetch_array($fetchdata)){
                        $num = 0;
                        $num++;  
                         ?>
                            <tbody>
                            <tr>
                                <td><?php echo $num ?></td>
                                <td>
                                    <button type='button' class='btn btn-primary'>Detail</button>
                                    <button type='button' class='btn btn-warning' ><a href="updateuser.php?id=<?php echo $data['id'] ?>">Edit</a></button>
                                    <button type='button' class='btn btn-danger'>Hapus</button>
                                </td>
                                <td><?php echo $view['avatar'] ?></td>
                                <td><?php echo $view['name'] ?></td>
                                <td><?php echo $view['email'] ?></td>
                                <td><?php echo $view['phone'] ?></td>
                                <td><?php echo $view['role'] ?></td>
                            </tr>
                            </tbody>;
        <?php
                        }
        ?>
        </table>
    
</body>
</html>