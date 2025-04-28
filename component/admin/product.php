<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Sản phẩm</title>
    <link rel="stylesheet" href="/css/style/admin/product.css">
    <script src="/js/product.js"></script>
</head>
<body>
    <div class="container">
    <?php include '../admin/sidebar.php'; ?>
    <div class="main-content">
                <h2>Sản phẩm</h2>
                <div class="top-bar">
                    <div class="search-bar">
                        <input type="text" id="search-input" placeholder="Nhập tên sản phẩm...">
                        <button id="search-btn" class="search-btn">🔍</button>
                    </div>
                    <div class="dropdown">
                        <button class="filter-btn">Loại sản phẩm ⌵</button>
                            <ul class="dropdown-menu">
                                <li>Gia vị</li>
                                <li>Dụng cụ nhà bếp</li>
                                <li>Tất cả sản phẩm</li>
                            </ul>
                        <button id="btn-add-product" class="add-btn">➕ Thêm sản phẩm</button>
                        <div id="product-form" class="form-container hidden">
                            <span class="close">&times;</span>
                            <div class="form">
                                <div class="form-left">
                                    <input type="file" id="product-image" accept="image/*" hidden> 
                                    <div id="image-container">
                                        <img id="preview-image" src="" alt="Xem trước ảnh" class="hidden">
                                        <p id="image-label">📷 ẢNH</p> 
                                    </div>
                                    <h4 for="product-image">Hình ảnh sản phẩm</h4>
                                </div>
                                <div class="form-right">
                                    <h3>THÔNG TIN SẢN PHẨM</h3>
                                    <label for="product-id">Mã sản phẩm:</label>
                                    <input type="text" id="product-id" value=" " readonly>
                            
                                    <label for="product-name">Tên sản phẩm:</label>
                                    <input type="text" id="product-name">
                                    <label for="product-quantity">Số lượng:</label>
                                    <input type="number" id="product-quantity" name="product-quantity" min="0" required>
                                    <label for="product-type">Loại sản phẩm:</label>
                                    <select id="product-type">
                                        <option value="">Chọn loại sản phẩm</option>
                                        <?php
                                        include '../../config/config.php';
                                        $sql = "SELECT maLSP, tenLSP FROM loaisanpham";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='" . htmlspecialchars($row['maLSP']) . "'>" . htmlspecialchars($row['tenLSP']) . "</option>";
                                        }
                                        ?>
                                    </select>
                                    <label for="product-price">Giá sản phẩm:</label>
                                    <input type="number" id="product-price" min="0" required>
                            
                                    <label for="product-desc">Mô tả:</label>
                                    <textarea id="product-desc"></textarea>
                                    <div class="save-container">
                                        <button id="save-product">Thêm</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="edit-product-form" class="form-container hidden">
                            <span class="close-edit">&times;</span>
                            <div class="form">
                                <div class="form-left">
                                    <input type="file" id="edit-product-image" accept="image/*" hidden> 
                                    <div id="edit-image-container">
                                        <img id="edit-preview-image" src="" alt="Xem trước ảnh" class="hidden">
                                        <p id="edit-image-label">📷 ẢNH</p> 
                                    </div>
                                    <h4>Hình ảnh sản phẩm</h4>
                                </div>
                                <div class="form-right">
                                    <h3>CHỈNH SỬA SẢN PHẨM</h3>
                                    <label for="edit-product-id">Mã sản phẩm:</label>
                                    <input type="text" id="edit-product-id" readonly>

                                    <label for="edit-product-name">Tên sản phẩm:</label>
                                    <input type="text" id="edit-product-name">

                                    <label for="edit-product-quantity">Số lượng:</label>
                                    <input type="number" id="edit-product-quantity" min="0">

                                    <label for="edit-product-type">Loại sản phẩm:</label>
                                    <select id="edit-product-type">
                                        <?php
                                        include '../../config/config.php';
                                        $sql = "SELECT maLSP, tenLSP FROM loaisanpham";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='" . htmlspecialchars($row['maLSP']) . "'>" . htmlspecialchars($row['tenLSP']) . "</option>";
                                        }
                                        ?>
                                    </select>

                                    <label for="edit-product-price">Giá sản phẩm:</label>
                                    <input type="number" id="edit-product-price" min="0">

                                    <label for="edit-product-desc">Mô tả:</label>
                                    <textarea id="edit-product-desc"></textarea>

                                    <div class="save-container">
                                        <button id="update-product">Cập nhật</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <table id="table-gia-vi" class="product-table hidden">
                    <thead>
                        <tr>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include '../../config/config.php'; 
                        $sql = "SELECT * FROM sanpham WHERE maLSP LIKE 'GV%'";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr data-id='" . $row['maSP'] . "' data-img='" . $row['hinhanh'] . "'>";
                            echo "<td><img src='../../assets/images/" . $row['hinhanh'] . "' alt='' width='50'></td>";
                            echo "<td>" . htmlspecialchars($row['tenSP']) . "</td>";
                            echo "<td>" . $row['soluong'] . "</td>";
                            echo "<td>" . number_format($row['gia'], 0, ',', '.') . "</td>";
                            echo "<td class='actions'>
                                    <button class='delete-btn'>🗑️</button>
                                    <button class='edit-btn'>✏️</button>
                                  </td>";
                            echo "</tr>";
                        }
                        
                    ?>
                    </tbody>
                </table>

                <table id="table-nha-bep" class="product-table hidden">
                    <thead>
                        <tr>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = "SELECT * FROM sanpham WHERE maLSP LIKE 'DC%'";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr data-id='" . $row['maSP'] . "' data-img='" . $row['hinhanh'] . "'>";
                            echo "<td><img src='../../assets/images/" . $row['hinhanh'] . "' alt='' width='50'></td>";
                            echo "<td>" . htmlspecialchars($row['tenSP']) . "</td>";
                            echo "<td>" . $row['soluong'] . "</td>";
                            echo "<td>" . number_format($row['gia'], 0, ',', '.') . "</td>";
                            echo "<td class='actions'>
                                    <button class='delete-btn'>🗑️</button>
                                    <button class='edit-btn'>✏️</button>
                                </td>";
                            echo "</tr>";
                        }
                    ?>
                    </tbody>
                </table>
                <div id="confirm-dialog">
                    <img src="../../assets/images/Error.png" alt="Cảnh báo" class="warning-icon">
                    <p id="confirm-message">BẠN CÓ CHẮC MUỐN XÓA SẢN PHẨM NÀY</p>
                    <div class="dialog-buttons">
                        <button id="confirm-agree">ĐỒNG Ý</button>
                        <button id="confirm-cancel">HỦY BỎ</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
