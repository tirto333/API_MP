<?php
include_once("koneksi.php");

try {
    $itemsPerPage = 100;

    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    $offset = ($currentPage - 1) * $itemsPerPage;

    $query = "SELECT * FROM req_surveyfo LIMIT $itemsPerPage OFFSET $offset";
    $result = $conn->query($query);

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    $totalQuery = "SELECT COUNT(*) FROM req_surveyfo";
    $totalResult = $conn->query($totalQuery);
    $totalRows = $totalResult->fetchColumn();

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<html>
<head>
    <title>Data Survey FO</title>
</head>
<body>
    <table width='100%' border=1>
        <tr>
            <th>No SPK Survey FO</th>
            <th>Nama Pelanggan</th>
        </tr>
        <?php
        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>" . $row['NoSuratfo'] . "</td>";
            echo "<td>" . $row['CustName'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <div class="pagination">
        <?php
        $totalPages = ceil($totalRows / $itemsPerPage);

        if ($currentPage > 1) {
            echo "<a href='?page=" . ($currentPage - 1) . "'>Previous</a>";
        }

        for ($i = 1; $i <= $totalPages; $i++) {
            echo "<a href='?page=$i'>$i</a> ";
        }

        if ($currentPage < $totalPages) {
            echo "<a href='?page=" . ($currentPage + 1) . "'>Next</a>";
        }
        ?>
    </div>
</body>
</html>
