<?php 
    //array dimensi
    // $nama = array ("KIKI", "LILI", "TITI", "DIDI", 100, 2.5);
    // var_dump($nama);
    // echo '<br>';
    // echo $nama[5];

    // echo '<br>';

    // for ($i=0; $i < 6; $i++) { 
    //     // echo $i;
    //     echo $nama[$i]. "<br>";
    // }

    // foreach ($nama as $key) {
    //     echo $key. '<br>';
    // }

    //array assosiatif
    // $nama = array(
    //     "KIKI" => "JAKARTA",
    //     "LILI" => "KOREA",
    //     "TITI" => "BANDUNG",
    //     "DIDI" => "BATAK"
    // );

    $nama["kiki"]= "jakarta";
    $nama["lili"]= "korea";
    $nama["titi"]= "bandung";
    $nama["didi"]= "batak";
    $nama["edi"]= "semarang";

    var_dump($nama);

    echo '<br>';

    // echo $nama["KIKI"];

    echo '<br>';

    foreach ($nama as $key => $value) {
        echo $key. ' =>'.$value;
        echo '<br>';
    }
?>