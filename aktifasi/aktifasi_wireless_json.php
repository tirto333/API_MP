<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    include_once("koneksi.php");
    $query = "SELECT * FROM aktivasi_wireless ORDER BY NoSuratAktiW";
    $result = $conn->query($query);

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    $json_data = json_encode($rows);

    header('Content-Type: application/json');

    echo json_encode($rows);
}
?>
        <?php
        foreach ($rows as $row) {
            echo $row['NoSuratAktiW'];
        }
        ?>