<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sisfomhs_db";

    // membuat koneksi dengan database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // mengecek apakah koneksi berhasil dibuat
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Koneksi berhasil";
    }
?>