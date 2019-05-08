<?php

    $dbhost = "localhost";
    $dbname = "db-login";
    $dbuser = "root";
    $dbpassword = "";

    $koneksi = mysql_connect($dbhost,$dbuser,$dbpassword) or die ("Koneksi Lo Ke Server Error!!!");
    mysql_select_db($dbname,$koneksi) or die ("Koneksi Ke Database Lo Error Juga!!!");

?>