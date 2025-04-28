<?php
include '../config/config.php';

$sql = "SELECT maSP FROM sanpham ORDER BY maSP DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

$newId = "SP001"; 
if ($row = mysqli_fetch_assoc($result)) {
    $lastId = $row['maSP']; 
    $number = intval(substr($lastId, 2)) + 1; 
    $newId = "SP" . str_pad($number, 3, "0", STR_PAD_LEFT); 
}

echo $newId;
?>
