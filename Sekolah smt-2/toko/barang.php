<?php 
    $host= "127.0.0.1";
    $user= "root";
    $password="";
    $db= "dbtoko";

    $id= 0;
    $namabarang= "";
    $harga= 0;
    $stock= 0;
    
    $koneksi= new mysqli($host, $user, $password, $db);
    
    if (isset($_GET['ubah'])) {
        $id= $_GET['ubah'];
        $sql= "SELECT*FROM barang WHERE id=".$id;
        $hasil= mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($hasil)>0) {
            $row= mysqli_fetch_array($hasil);
            $id= $row[0];
            $namabarang= $row[1];
            $harga= $row[2];
            $stock= $row[3];
        }
    }

    
?>

<form action="" method="post">
    barang:
    <input type="text" name="namabarang" placeholder="nama barang" value="<?php echo $namabarang?>">
    <br>
    harga:
    <input type="number" name="harga" placeholder="harga barang" value="<?php echo $harga?>">
    <br>
    stock:
    <input type="number" name="stock" placeholder="stock barang" value="<?php echo $stock?>">
    <br>
    <input type="submit" name="simpan" value="simpan">
    <input type="hidden" name="id" value="<?php echo $id?>">
</form>

<?php
    if (isset($_POST["simpan"])) {
        $barang= $_POST["namabarang"];
        $harga= $_POST["harga"];
        $stock= $_POST["stock"];

        if (isset($_POST['id'])) {
            $id= $_POST['id'];
            if ($id==0) {
                $sql= "INSERT INTO barang (namabarang,harga,stock) VALUES ('$barang',$harga,$stock)";
                $hasil= mysqli_query($koneksi,$sql);
            }
            else {
                $sql= "UPDATE barang SET namabarang='$barang', harga=$harga, stock=$stock WHERE id=".$id;
                $hasil= mysqli_query($koneksi,$sql);
            }
        }
    }

    if (isset($_GET['hapus'])) {
        $id= $_GET['hapus'];
        $sql= "DELETE FROM barang WHERE id=".$id;
        $hasil= mysqli_query($koneksi, $sql);
    }
    
    $sql= "SELECT*FROM barang";
    $hasil= mysqli_query($koneksi, $sql);
    echo "<table border=2px>
            <thead>
                <tr>
                    <th>
                        BARANG
                    </th>
                    <th>
                        HARGA
                    </th>
                    <th>
                        STOCK
                    </th>
                    <th>
                        HAPUS
                    </th>
                    <th>
                        UBAH
                    </th>
                </tr>
            </thead>
            <tbody>";
    while ($row=mysqli_fetch_array($hasil)) {
        
        echo "<tr>";
            echo "<td>". $row[1]. "</td>";
            echo "<td>". $row[2]. "</td>";
            echo "<td>". $row[3]. "</td>";
            echo "<td>"."<a href='?hapus=".$row[0]."'>hapus</a>"."</td>";
            echo "<td>"."<a href='?ubah=".$row[0]."'>ubah</a>"."</td>";
        echo "</tr>";
    }
    echo "</tbody>
        </table>";
?>
