<h3>Insert Kategori</h3>
<div class="from-group">
    <form action="" method="post">
        <div class="from-group w-50">
            <label for="">Nama Kategori:</label>
            <input type="text" name="kategori" required placeholder="ketik" class="form-control">
        </div>
        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
        </div>
    </form>
</div>

<?php 
    if (isset($_POST['simpan'])) {
        $kategori= $_POST['kategori'];
        $sql= "INSERT INTO tbkategori VALUES ('','$kategori')";
        $db->runSQL($sql);
        header("location:?f=kategori&m=select");
    }
?>