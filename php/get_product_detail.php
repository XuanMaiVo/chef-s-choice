<?php
include '../config/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM sanpham WHERE maSP = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        header('Content-Type: application/json'); 
        echo json_encode($row);
    } else {
        echo json_encode([]);
    }
}
?>
