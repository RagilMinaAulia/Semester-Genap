<?php 
    require_once "../function.php";

    $sql= "SELECT*FROM tbkategori";
    
    $result= mysqli_query($koneksi,$sql);

    //var_dump($result);

    $jumlah= mysqli_num_rows($result);
    // echo'<br>';
    // echo $jumlah;

    echo '
        <table border="1px">
        <tr>
            <th>NO</th>
            <th>KATEGORI</th>
        </tr>
    ';
    $no=1;
    if ($jumlah > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>'.$no++.'</td>';
            echo '<td>'.$row['kategori'].'</td>';
            echo'</tr>';
        } 
    }
    echo '</table>';
?>