<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Kiểm tra file ảnh
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        die("File không phải là ảnh.");
    }

    // Giới hạn kích thước file (5MB)
    if ($_FILES["image"]["size"] > 5000000) {
        die("File quá lớn. Tối đa 5MB.");
    }

    // Cho phép một số định dạng file
    if (!in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif'])) {
        die("Chỉ chấp nhận JPG, JPEG, PNG & GIF.");
    }

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        echo json_encode(['location' => $targetFile]);
    } else {
        echo "Có lỗi khi upload file.";
    }
    exit;
}
?>