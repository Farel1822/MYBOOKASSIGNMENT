<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "book_db";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi ke database berhasil!";
$conn->close();
?>