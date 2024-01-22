<?php 
    // $nama= array('lala', 'nini', 'siti', 100);
    // var_dump($nama);

    // echo '<br>';
    // foreach ($nama as $key) {
    //     echo $key. '<br>';    
    // }

    $nama= array(
        "lala" => "sidoarjo",
        "nini" => "palembang",
        "siti" => "papua"
    );
    var_dump($nama);
    echo '<br>';
    foreach ($nama as $key => $value) {
        echo $key. '-'. $value;
        echo '<br>';
    }
?>