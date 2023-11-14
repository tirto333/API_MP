<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $response = ['message' => 'Ini adalah endpoint GET'];
    echo json_encode($response);
}
?>