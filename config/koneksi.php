<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "arsipkita";

    $conn = new mysqli($host, $user, $password, $database);

    // Cek koneksi database
    if ($conn) {
    echo "Koneksi berhasil";
    } else {
        echo "Koneksi gagal: " . mysqli_connect_error();
    }

    // $conn = mysqli_connect("localhost", "root", "", "arsipkita");

    // $sql = "SELECT * FROM users";

    // $result = mysqli_query($conn, $sql);

    // if ($result) {
    //     echo "Database berhasil diakses.";
    // } else {
    //     echo "Error: " . mysqli_error($conn);
    // }
?>