<h3>Registrasi Pelanggan</h3>
<div class="from-group">
    <form action="" method="post">
        <div class="from-group w-50">
            <label for="">Pelanggan:</label>
            <input type="text" name="pelanggan" required placeholder="Nama anda" class="form-control">
        </div>
        <div class="from-group w-50">
            <label for="">Alamat:</label>
            <input type="text" name="alamat" required placeholder="Alamat anda" class="form-control">
        </div>
        <div class="from-group w-50">
            <label for="">Telepon:</label>
            <input type="text" name="telepon" required placeholder="Nomor telepon" class="form-control">
        </div>
        <div class="from-group w-50">
            <label for="">Emai:</label>
            <input type="email" name="email" required placeholder="Email" class="form-control">
        </div>
        <div class="from-group w-50">
            <label for="">Password:</label>
            <input type="password" name="password" required placeholder="Password" class="form-control">
        </div>
        <div class="from-group w-50">
            <label for="">Konfirmasi Password:</label>
            <input type="password" name="konfirmasi" required placeholder="Password" class="form-control">
        </div>
        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
        </div>
    </form>
</div>

<?php 
    if (isset($_POST['simpan'])) {
        $pelanggan= $_POST['pelanggan'];
        $alamat= $_POST['alamat'];
        $telepon= $_POST['telepon'];
        $email= $_POST['email'];
        $password= $_POST['password'];
        $konfirmasi= $_POST['konfirmasi'];

        if ($password == $konfirmasi) {
            $sql= "INSERT INTO tblpelanggan VALUES ('','$pelanggan', '$alamat', '$telepon', '$email', '$password', 1)";
            $db->runSQL($sql);
            header("location:?f=home&m=info");
        }else {
            echo "<h2>Konfirmasi Password Salah</h2>";
        }
    }
?>