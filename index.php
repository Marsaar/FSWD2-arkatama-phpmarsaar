<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Biodata</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/javascript/bootstrap.bundle.min.js"></script>
</head>
<body>
    <form method="POST" action="pages/biodata.php">
    <div class="container">
        <h2 class="alert bg-black text-center text-light mt-3">FORMULIR BIODATA</h2>
        <form>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap Anda">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tmplahir" class="form-control" placeholder="Masukan Tempat Lahir Anda">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgllahir" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat Lengkap Anda">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <div class="form-check-inline">
                            <input type="radio" class="form-check-input" name="kelamin" class="form-control" value="Laki-Laki" checked="">
                            <label>Laki-Laki</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="radio" class="form-check-input" name="kelamin" class="form-control" value="Perempuan">
                            <label>Perempuan</label>
                        </div>
                    </div>
                </div>  
            </div>

            <div class="form-group">
                <label>Riwayat pendidikan</label>
                <textarea name="riwayat" class="form-control" placeholder="Tuliskan Riwayat Pendidikan Anda" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label>Hobby</label>
                <input type="text" name="hobi" class="form-control" placeholder="Masukan Hobi Anda">
            </div><br>

            <button type="submit" name="submit" class="btn btn-success" value="Submit">Submit</button>
            <button type="reset" name="reset" class="btn btn-danger" value="reset">Reset</button>
        </form>
    <div>
    
</body>
</html> 