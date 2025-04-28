<?php
include '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $maLSP = $_POST['type'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];



    $imageName = "";
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = '../../assets/images/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $imageName = basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $imageName);
    } else {
        echo "image upload failed";
        exit;
    }

    $sql = "INSERT INTO sanpham (maSP, tenSP, soluong, gia, hinhanh, maLSP, mota)
            VALUES ('$id', '$name', '$quantity', '$price', '$imageName', '$maLSP', '$desc')";

    if (mysqli_query($conn, $sql)) {
        echo "success";
    } else {
        echo "error: " . mysqli_error($conn);
    }
}

?>
