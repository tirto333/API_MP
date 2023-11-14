<?php
ini_set('memory_limit', '512M');
$servername = "27.123.220.167";
$database   = "crm-phpmaker";
$username   = "tibu";
$password   = "T1bu123@@";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Koneksi Berhasil";
} catch (PDOException $e) {
    die("Koneksi Gagal: " . $e->getMessage());
}

?>