
<?php
include '../../component/user/db_connect.php';

// Xử lý thêm, sửa, xóa bài đăng
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action === 'add') {
        $tenBD = $_POST['tenBD'];
        $hinhanh = $_POST['hinhanh'];
        $mota = $_POST['mota'];
        $nguyenlieu = $_POST['nguyenlieu'];
        $duongdan = $_POST['duongdan'];
        $maNV = $_POST['maNV'];
        $maDM = $_POST['maDM'];

        $stmt = $pdo->prepare("INSERT INTO baidangmonan (tenBD, hinhanh, mota, nguyenlieu, duongdan, maNV, maDM) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$tenBD, $hinhanh, $mota, $nguyenlieu, $duongdan, $maNV, $maDM]);
        echo json_encode(['status' => 'success']);
        exit;
    }

    if ($action === 'delete' && isset($_POST['maBD'])) {
        $maBD = $_POST['maBD'];
        $stmt = $pdo->prepare("UPDATE baidangmonan SET deleted = 1 WHERE maBD = ?");
        $stmt->execute([$maBD]);
        echo json_encode(['status' => 'deleted']);
        exit;
}

    if ($action === 'update' && isset($_POST['maBD'])) {
        $maBD = $_POST['maBD'];
        $tenBD = $_POST['tenBD'];
        $hinhanh = $_POST['hinhanh'];
        $mota = $_POST['mota'];
        $nguyenlieu = $_POST['nguyenlieu'];
        $duongdan = $_POST['duongdan'];
        $maDM = $_POST['maDM'];

        $stmt = $pdo->prepare("UPDATE baidangmonan SET tenBD=?, hinhanh=?, mota=?, nguyenlieu=?, duongdan=?, maDM=? WHERE maBD=?");
        $stmt->execute([$tenBD, $hinhanh, $mota, $nguyenlieu, $duongdan, $maDM, $maBD]);
        echo json_encode(['status' => 'updated']);
        exit;
    }
}

// Truy vấn dữ liệu
$query = "SELECT * FROM baidangmonan";
$stmt = $pdo->prepare($query);
$stmt->execute();
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container">
    <?php include 'sidebar.php'; ?>
    
    <link rel="stylesheet" href="../../css/style/admin/admin_menu.css">

    <div class="content">
        <h2>Thực đơn</h2>
        <button class="sort-btn">⇅ Sắp xếp</button>
        <button class="btn" id="openModalBtn">+ Thêm bài viết</button>
        <button class="btn" id="openTrashBtn" style="background: gray;">THÙNG RÁC</button>

        <div class="menu-container">
            <?php foreach ($posts as $post): ?>
                <div class="menu-column">
                    <div class="menu-header">Video</div>
                    <div class="menu-item-box">
                        <iframe width="100%" height="200" src="<?= htmlspecialchars($post['duongdan']) ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="menu-header">Tên món ăn</div>
                    <div class="menu-item-box"><?= htmlspecialchars($post['tenBD']) ?></div>
                    <div class="menu-header">Ảnh</div>
                    <div class="menu-item-box">
                        <img src="<?= htmlspecialchars($post['hinhanh']) ?>" alt="Image" style="width:100%;">
                    </div>
                    <div class="menu-column1">
                        <div class="menu-header1">Tác vụ</div>
                        <div class="menu-item-box1">
                            <button class="edit-btn" data-id="<?= $post['maBD'] ?>">Edit</button>
                        </div>
                        <div class="menu-item-box1">
                            <button class="delete-btn" data-id="<?= $post['maBD'] ?>">Delete</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Modal Thêm/Sửa -->
<div class="modal" id="addPostModal">
    <div class="modal-content">
        <button class="close-modal-btn" id="closeModalBtn">&times;</button>
        <div class="modal-header" id="modalTitle">THÔNG TIN MÓN ĂN</div>
        <div class="modal-body">
            <form id="addPostForm">
                <input type="hidden" name="maBD" id="maBD">
                <input type="text" name="tenBD" placeholder="Tên món ăn" required>
                <input type="text" name="hinhanh" placeholder="Link ảnh">
                <input type="text" name="duongdan" placeholder="Link Youtube">
                <textarea name="mota" placeholder="Mô tả cách làm..." required></textarea>
                <textarea name="nguyenlieu" placeholder="Nguyên liệu..." required></textarea>
                <input type="text" name="maNV" value="NV001" hidden>
                <input type="number" name="maDM" placeholder="Mã danh mục" required>
                <button type="button" id="saveBtn">Lưu</button>
            </form>
        </div>
        <div class="modal-footer">
            <button id="cancelBtn" style="background: red; color: #fff; padding: 10px 20px;">HỦY</button>
        </div>
    </div>
</div>

<!-- Modal Thùng Rác -->
<div class="modal" id="trashModal">
    <div class="modal-content">
        <button class="close-modal-btn" id="closeTrashBtn">&times;</button>
        <div class="modal-header">THÙNG RÁC</div>
        <div class="modal-body" id="trashList" style="max-height:300px; overflow:auto;"></div>
    </div>
</div>
