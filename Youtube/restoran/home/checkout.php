<?php 
    if (isset($_GET['total'])) {
        $total= $_GET['total'];
        echo $total;
        echo '<br>';
        echo idorder();
        echo '<br>';
        insertorder(idorder(), $_SESSION['idpelanggan'], '2024-2-21', $total);
    }

    function idorder(){
        global$db;
        $sql= "SELECT idorder FROM tblorder ORDER BY idorder DESC";
        $jumlah= $db->rowCOUNT($sql);
        if ($jumlah == 0) {
            $id= 1;
        }else {
            $item= $db->getITEM($sql);
            $id= $item['idorder']+1;
        }
        return $id;
    }

    function insertorder($idorder, $idpelanggan, $tglorder, $total){
        global $db;
        $sql= "INSERT INTO tblorder VALUES ($idorder, $idpelanggan, '$tglorder', $total, 0, 0, 0)";
        $db->runSQL($sql);
    }
?>