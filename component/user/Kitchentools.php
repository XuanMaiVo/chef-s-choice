<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DỤNG CỤ NHÀ BẾP</title>
    <link rel="stylesheet" href="../../css/style/user/Kitchentools.css">

</head>
<body>
    <?php
            include("../../component/user/header.php");  
            include("../../component/user/banner.php");  
            include("../../component/user/navbar.php");  
        ?>
    <section class="products">
        <h2>DỤNG CỤ NHÀ BẾP</h2>
        <div class="buttons">
            <button id="openFilter" class="filter-btn">
                <img src="../../assets/images/filter-6553.png" alt="Bộ lọc"> BỘ LỌC
            </button>
        <div id="overlay" style="display:none;"></div>
        <div id="filterBox" class="filter-container">
            <h3>LOẠI SẢN PHẨM</h3>
            <div class="category-buttons">
                <button value="DC001">NỒI</button>
                <button value="DC002">CHẢO</button>
                <button value="DC003">BẾP</button>
                <button value="DC004">CHÉN</button>
                <button value="DC005">LY</button>
                <button value="DC006">ĐĨA</button>
            </div>
    
            <h3>GIÁ</h3>
            <div class="price-filters">
                <label><input type="checkbox" name="price" value="0-500000"> 0 - 500,000</label>
                <label><input type="checkbox" name="price" value="500000-10000000"> 500,000 - 1,000,000</label>
                <label><input type="checkbox" name="price" value="1000000-50000000"> 1,000,000 - 5,000,000</label>
                <label><input type="checkbox" name="price" value="5000000-80000000"> 5.000,000 - 8,000,000</label>
                <label><input type="checkbox" name="price" value="8000000-100000000"> 8,000,000 - 10,000,000</label>
                <label><input type="checkbox" name="price" value="0-10000000"> 0 - 10,000,000</label>
            </div>
                <div class="filter-group">
                    <button class="filter-button">LỌC</button>
                    <button id="closeFilter" class="close-button">ĐÓNG</button>
                </div>
            </div>
    
            <button id="sortToggle" class="sort-btn">
                <img src="../../assets/images/up-and-down-black-outline-circle-arrows-20701.png" alt="Sắp xếp"> SẮP XẾP
            </button>
            
            <div id="sortOptions" class="sort-container">
                <button data-sort="asc">Sắp xếp giá tăng dần <img src="../../assets/images/prime--sort-amount-up.png"></button>
                <button data-sort="desc">Sắp xếp giá giảm dần <img src="../../assets/images/prime--sort-amount-down.png"></button>
            </div>
        </div>

        <div class="product-container">
            <div id="product-list">
                <?php
                require_once("../../config/config.php");

                $query = "SELECT * FROM sanpham WHERE maLSP LIKE 'DC%'";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="product-item">';
                        echo '    <button class="openModalBtn" ';
                        echo '            data-img="../../assets/images/' . htmlspecialchars($row['hinhanh']) . '" ';
                        echo '            data-name="' . htmlspecialchars($row['tenSP']) . '" ';
                        echo '            data-price="' . number_format($row['gia'], 0, ",", ".") . 'đ" ';
                        echo '            data-mota="' . htmlspecialchars($row['mota']) . '" ';
                        echo '            data-soluong="' . htmlspecialchars($row['soluong']) . '" ';
                        echo '            data-masp="' . htmlspecialchars($row['maSP']) . '" >';
                        echo '        <img src="../../assets/images/' . htmlspecialchars($row['hinhanh']) . '" alt="' . htmlspecialchars($row['tenSP']) . '">';
                        echo '    </button>';
                        echo '    <p>' . htmlspecialchars($row['tenSP']) . '</p>';
                        echo '    <span>' . number_format($row['gia'], 0, ",", ".") . 'đ</span>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>Không có sản phẩm nào!</p>';
                }
                ?>
            </div>
        </div>

        <div id="productModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="product-detail">
                    <div class="product-image">
                        <img id="modalImage" src="" alt="Sản phẩm">
                    </div>
                    <div class="product-info">
                        <h2 id="modalProductName">Tên sản phẩm</h2>
                        
                        <p>Thương hiệu (Mã sản phẩm): <strong id="modalProductCode">Đang cập nhật</strong></p>
                        
                        <p class="price" id="modalProductPrice">Giá</p>
                        
                        <ul id="modalProductDescription">
                            <li>Đang cập nhật mô tả...</li>
                        </ul>

                        <i><p class="stock" id="modalProductStock">Số lượng còn lại: đang cập nhật</p></i>

                        <div class="quantity">
                            <span>Số lượng:</span>
                            <button class="qty-btn" id="decrease">−</button>
                            <span id="quantityValue">1</span>
                            <button class="qty-btn" id="increase">+</button>
                        </div>

                        <button class="add-to-cart" id="add-to-cart">Thêm vào giỏ hàng</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="pagination">
            <button id="prevPage">&laquo;</button>
            <span id="pageNumbers"></span>
            <button id="nextPage">&raquo;</button>
        </div>
    </section>
    <script src="../../js/Kitchentools.js"></script>
    <?php
    include("../../component/user/footer.php");     
    ?>
</body>
</html>
