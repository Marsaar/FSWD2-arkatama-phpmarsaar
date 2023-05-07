<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/javascript/bootstrap.bundle.min.js"></script>
    <style>
        body{
            min-height: 100vh;
            background-color: #FFE53B;
            background-image: linear-gradient(147deg, #FFE53B 0%, #FF2525 100%);
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container py-5">
        <header class="text-center text-white">
        <h1 class="display-4">Table Join Products & Categories</h1>
        <p class="lead mb-0">Pengerjaan Task 17 no.2 PHP Basics Arkatama, Menampilkan table join pada web menggunakan HTML, CSS, MySql & PHP.</p>
        <p class="font-italic"> By
            <a href="#" class="text-white">
            <u>Marsa Aushaf Rafi</u>
            </a>
        </p>
        </header>
        <div class="row py-5">
        <div class="col-lg-10 mx-auto">
            <div class="card rounded shadow border-0">
            <div class="card-body p-5 bg-white rounded">
                <div class="table-responsive">
                    <table style="width:100%" class="table table-striped table-bordered table-hover">
                        <thead class="text-white bg-dark">
                            <tr>
                                <th>Id Barang</th>
                                <th>Nama Barang</th>
                                <th>Kategori Barang</th>
                            </tr>
                        </thead>

                        <?php
                        //temporary file name "index.php"
                        include "index.php";
                        $fetchdata = mysqli_query($conn, 
                        "SELECT l.id AS id_produk, l.name AS nama_produk, r.name AS nama_kategori 
                        FROM products l 
                        INNER JOIN categories r ON l.category_id = r.id ORDER BY `id_produk` ASC LIMIT 30");
                        while ($view = mysqli_fetch_array($fetchdata)){
                            echo "
                            <tbody>
                            <tr>
                                <td>$view[id_produk]</td>
                                <td>$view[nama_produk]</td>
                                <td>$view[nama_kategori]</td>
                            </tr>
                            </tbody>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>