<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    include_once("koneksi.php");
    $query = "SELECT * FROM req_survey ORDER BY NoSurat";
    $result = $conn->query($query);

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    $json_data = json_encode($rows);

    header('Content-Type: application/json');

    echo json_encode($rows);
}
?>
        <?php
        foreach ($rows as $row) {
            echo $row['NoSurat'];
        }
        ?>