<h1>Zodiak</h1>
<form action="" method="get">
<input type="number" name="tgl" placeholder="Tanggal">
<input type="number" name="bln" placeholder="Bulan">
<input type="submit" name="tombol" value="Hasil">
</form>

<?php 
$tgl=$_GET["tgl"];
$bln=$_GET["bln"];
if ($bln==1) {
    if ($tgl > 0 && $tgl < 20) {
        echo '<h2>'."Capricorn".'<h2>';
    }
    if ($tgl > 19 && $tgl < 32) {
        echo '<h2>'."Aquarius".'<h2>';
    }
}

if ($bln==2) {
    if ($tgl > 0 && $tgl < 20) {
        echo '<h2>'."Aquarius".'<h2>';
    }
    if ($tgl > 19 && $tgl < 32) {
        echo '<h2>'."Pisces".'<h2>';
    }
}

if ($bln==3) {
    if ($tgl > 0 && $tgl < 20) {
        echo '<h2>'."Pisces".'<h2>';
    }
    if ($tgl > 19 && $tgl < 32) {
        echo '<h2>'."Aries".'<h2>';
    }
}

if ($bln==4) {
    if ($tgl > 0 && $tgl < 20) {
        echo '<h2>'."Aries".'<h2>';
    }
    if ($tgl > 19 && $tgl < 32) {
        echo '<h2>'."Taurus".'<h2>';
    }
}

if ($bln==5) {
    if ($tgl > 0 && $tgl < 20) {
        echo '<h2>'."Taurus".'<h2>';
    }
    if ($tgl > 19 && $tgl < 32) {
        echo '<h2>'."Gemini".'<h2>';
    }
}

if ($bln==6) {
    if ($tgl > 0 && $tgl < 20) {
        echo '<h2>'."Gemini".'<h2>';
    }
    if ($tgl > 19 && $tgl < 32) {
        echo '<h2>'."Cancer".'<h2>';
    }
}

if ($bln==7) {
    if ($tgl > 0 && $tgl < 20) {
        echo '<h2>'."Cancer".'<h2>';
    }
    if ($tgl > 19 && $tgl < 32) {
        echo '<h2>'."Leo".'<h2>';
    }
}

if ($bln==8) {
    if ($tgl > 0 && $tgl < 20) {
        echo '<h2>'."Leo".'<h2>';
    }
    if ($tgl > 19 && $tgl < 32) {
        echo '<h2>'."Virgo".'<h2>';
    }
}

if ($bln==9) {
    if ($tgl > 0 && $tgl < 20) {
        echo '<h2>'."Virgo".'<h2>';
    }
    if ($tgl > 19 && $tgl < 32) {
        echo '<h2>'."Libra".'<h2>';
    }
}

if ($bln==10) {
    if ($tgl > 0 && $tgl < 20) {
        echo '<h2>'."Libra".'<h2>';
    }
    if ($tgl > 19 && $tgl < 32) {
        echo '<h2>'."Scorpio".'<h2>';
    }
}

if ($bln==11) {
    if ($tgl > 0 && $tgl < 20) {
        echo '<h2>'."Scorpio".'<h2>';
    }
    if ($tgl > 19 && $tgl < 32) {
        echo '<h2>'."Sagitarius".'<h2>';
    }
}

if ($bln==12) {
    if ($tgl > 0 && $tgl < 20) {
        echo '<h2>'."Sagitarius".'<h2>';
    }
    if ($tgl > 19 && $tgl < 32) {
        echo '<h2>'."Capricorn".'<h2>';
    }
}
?>