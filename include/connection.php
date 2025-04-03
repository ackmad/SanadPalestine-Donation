<?php
$host = getenv('DB_HOST');      // Mengambil nilai DB_HOST dari environment variables
$username = getenv('DB_USER');  // Mengambil nilai DB_USER dari environment variables
$password = getenv('DB_PASSWORD'); // Mengambil nilai DB_PASSWORD dari environment variables
$dbname = getenv('DB_NAME');    // Mengambil nilai DB_NAME dari environment variables

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
