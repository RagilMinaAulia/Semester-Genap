<h1>Belajar PHP</h1>
<form action="" method="get">
Nama:
<input type="text" name="nama" placeholder="Masukkan">
<input type="submit" name="tombol" value="Kirim">
</form>
<a href="?coba=rpl&siswa=ragil">Klik</a>
<br>
<?php
if (isset($_GET["siswa"])) {
    $isi=$_GET["siswa"];
    echo '<h2>'.$isi.'</h2>';
}

function persegi($s){
    $sisi=$s*$s;
    return $sisi;
}
echo "Luas persegi= ".persegi(5).'<br>';

function segitiga($alas,$tinggi){
    $ls=$alas*$tinggi;
    return $ls;
}
echo "Luas segitiga= ".segitiga(3,6).'<br>';

function lingkaran($jar,$tinggi){
    $ll=3.14*$jar*$tinggi;
    return $ll;
}
echo "Luas lingkaran= ".lingkaran(7,14).'<br>';

function tabung($r,$t){
    $lt=3.14*$r*$r*$t;
    return $lt;
}
echo "Luas tabung= ".tabung(7,7,14).'<br>';
?>
<p>belajar PHP</p>