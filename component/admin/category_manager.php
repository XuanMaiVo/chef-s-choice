<?php
include '../../component/user/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'add_category') {
        $tenLSP = $_POST['tenLSP'];
        $stmt = $pdo->prepare("INSERT INTO loaisanpham (tenLSP) VALUES (?)");
        $stmt->execute([$tenLSP]);
    }
    
    // Thêm các action khác (edit, delete)
}

$categories = getCategories($pdo);
?>

<!-- Form thêm danh mục -->
<form id="categoryForm">
    <input type="text" name="tenLSP" placeholder="Tên danh mục" required>
    <button type="submit">Thêm danh mục</button>
</form>

<!-- Hiển thị danh sách danh mục -->
<ul>
<?php foreach ($categories as $category): ?>
    <li>
        <?= htmlspecialchars($category['tenLSP']) ?>
        <button class="edit-category" data-id="<?= $category['maLSP'] ?>">Sửa</button>
        <button class="delete-category" data-id="<?= $category['maLSP'] ?>">Xóa</button>
    </li>
<?php endforeach; ?>
</ul>