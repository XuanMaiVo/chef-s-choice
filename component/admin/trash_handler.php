<?php
include '../../component/user/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'restore' && isset($_POST['maBD'])) {
        // Logic khôi phục bài đăng từ thùng rác
        $stmt = $pdo->prepare("UPDATE baidangmonan SET deleted = 0 WHERE maBD = ?");
        $stmt->execute([$_POST['maBD']]);
        echo json_encode(['status' => 'restored']);
        exit;
    }
}

// Lấy danh sách bài đăng đã xóa
$stmt = $pdo->query("SELECT * FROM baidangmonan WHERE deleted = 1");
$trashItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($trashItems);
?>