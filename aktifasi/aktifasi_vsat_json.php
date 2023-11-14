<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    include_once("koneksi.php");
    $query = "SELECT * FROM aktifasi_vsat ORDER BY nosurataktivasi";
    $result = $conn->query($query);

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    $json_data = json_encode($rows);

    header('Content-Type: application/json');

    foreach ($rows as $row) {
        echo $row['nosurataktivasi'];
    }
}