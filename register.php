<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mikamerah Tutorial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/vendor/jquery-slim.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container col-lg-6 my-5 border">
    <h2 class="py-2 my-3 border-bottom">Form Registrasi</h2>
    <form method="post" action="aksi.php" class="">
        <div class="form-group">
            <label for="uname">Username:</label>
            <input type="text" class="form-control" id="uname" placeholder="Masukkan username" name="uname" required>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Masukkan password" name="pswd" required>
        </div>
        <div class="form-group">
            <label for="pwd">Konfirmasi Password:</label>
            <input type="password" class="form-control" id="copwd" placeholder="Masukkan password" name="copswd" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email" required>
        </div>
        <div class="form-group">
            <label for="tgll">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="tgll" name="tgll" required>
        </div>
        <div class="form-group">
            <label for="jeka">Jenis Kelamin:</label>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" value="L" name="jeka" required>Laki-Laki
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" value="P" name="jeka" required>Perempuan
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" rows="5" id="alamat" name="alamat"></textarea>
        </div>
        <div class="form-group">
            <label for="kota">Kota:</label>
            <input type="text" class="form-control" id="kota" placeholder="masukkan nama kota" name="kota" required>
        </div>
        <div class="form-group">
            <label for="telp">Nomor Telpon:</label>
            <input type="tel" class="form-control" id="telp" placeholder="Masukkan nomor telpon" name="telp" required>
        </div>
        <div class="form-group">
            <label for="paypal">Paypal:</label>
            <input type="text" class="form-control" id="paypal" placeholder="Masukkan id paypal" name="paypal" required>
        </div>
        <div class="form-group">
            Sudah punya akun login di <a href="login.php">sini</a> 
        </div>
        <div class="form-group text-right">
            <button type="submit" name="reg" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

</body>
</html>