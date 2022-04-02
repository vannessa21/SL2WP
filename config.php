<?php
    $server= "localhost";
    $username = "root";
    $password = "";
    $db_name = "registrasi";

    $connection = mysqli_connect($server, $username, $password, $db_name);

    if ($connection){
       // echo "Koneksi berhasil";
    }
    else{
        echo "Koneksi gagal".mysqli_connect_error();
    }
?>