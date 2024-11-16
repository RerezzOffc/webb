<?php
// /includes/db.php
$servername = "localhost";
$username = "root";
$password = "";
$database = "database";  // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
