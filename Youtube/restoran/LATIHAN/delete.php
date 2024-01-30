<?php 
    require_once "../function.php";
    
    $sql= "DELETE FROM tbkategori WHERE idkategori = $id";
    $result= mysqli_query($koneksi, $sql);
    header("location:http://localhost/Semester-Genap/Youtube/restoran/kategori/select.php")
?>