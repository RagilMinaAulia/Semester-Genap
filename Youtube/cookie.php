<?php 

    $cookie_name= 'atok';
    $cookie_value= 'dalang';

    setcookie($cookie_name, $cookie_value);
    

    $cookie_value= 'rambo';

    setcookie($cookie_name, $cookie_value);

    echo $_COOKIE[$cookie_name];

    setcookie("user", "", time() - 3600);
    echo '</br>';

    var_dump($_COOKIE);
?>