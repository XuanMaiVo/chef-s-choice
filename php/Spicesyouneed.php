<title>Chef's Choice</title>

<?php include '../php/header.php'; ?>
<?php include '../php/navbar.php'; ?>

<section class="banner">
    <img src="../assets/images/bannerfooter.png" alt="Banner chính">
</section>

<section class="products">
    <h2>GIA VỊ BẠN CẦN</h2>
    <div class="buttons">
        <button id="openFilter" class="filter-btn">
            <img src="../assets/images/filter-6553.png" alt="Bộ lọc"> BỘ LỌC
        </button>
    <!-- Bộ lọc -->
    <div id="filterBox" class="filter-container">
        <h3>LOẠI SẢN PHẨM</h3>
        <div class="category-buttons">
            <button>GIA VỊ TỰ NHIÊN</button>
            <button>SỐT CHẤM</button>
            <button>SA TẾ</button>
            <button>GIA VỊ NẤU VÀ ƯỚP</button>
        </div>
        <h3>GIÁ</h3>
        <div class="price-filters">
            <label><input type="checkbox"> 0 - 30,000</label>
            <label><input type="checkbox"> 30,000 - 50,000</label>
            <label><input type="checkbox"> 50,000 - 100,000</label>
            <label><input type="checkbox"> 100,000 - 200,000</label>
            <label><input type="checkbox"> 200,000 - 500,000</label>
        </div>
        <div class="filter-group ">
        <!-- Nút Lọc -->
        <button class="filter-button">LỌC</button>
        <!-- Nút đóng -->
        <button id="closeFilter" class="close-button">ĐÓNG</button>
        </div>
    </div>

        <button  id="sortToggle" class="sort-btn">
            <span id="sortText"><img src="../assets/images/up-and-down-black-outline-circle-arrows-20701.png" alt="Sắp xếp"> SẮP XẾP</span>
        </button>
        <div id="sortOptions" class="sort-container hidden">
        <button onclick="sortProducts('asc')">Sắp xếp giá tăng dần <img src="../assets/images/prime--sort-amount-up.png"></button>
        <button onclick="sortProducts('desc')">Sắp xếp giá giảm dần <img src="../assets/images/prime--sort-amount-down.png"></button>
        </div>
    </div>
    <div class="product-container">
        <div id="product-list"></div>
    </div>
    <script>
        // Danh sách sản phẩm giả lập
        const products = [
            { id: 1, name: "Màu dầu điều", price: "200.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 2, name: "Sản phẩm 2", price: "350.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 3, name: "Sản phẩm 3", price: "500.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 4, name: "Sản phẩm 4", price: "150.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 5, name: "Sản phẩm 5", price: "180.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 6, name: "Sản phẩm 6", price: "230.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 7, name: "Sản phẩm 7", price: "400.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 8, name: "Sản phẩm 8", price: "220.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 9, name: "Sản phẩm 9", price: "200.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 10, name: "Sản phẩm 10", price: "350.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 11, name: "Sản phẩm 11", price: "500.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 12, name: "Sản phẩm 12", price: "150.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 13, name: "Sản phẩm 13", price: "180.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 14, name: "Sản phẩm 14", price: "230.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 15, name: "Sản phẩm 15", price: "400.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 16, name: "Sản phẩm 16", price: "220.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 1, name: "Màu dầu điều", price: "200.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 2, name: "Sản phẩm 2", price: "350.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 3, name: "Sản phẩm 3", price: "500.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 4, name: "Sản phẩm 4", price: "150.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 5, name: "Sản phẩm 5", price: "180.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 6, name: "Sản phẩm 6", price: "230.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 7, name: "Sản phẩm 7", price: "400.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 8, name: "Sản phẩm 8", price: "220.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 9, name: "Sản phẩm 9", price: "200.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 10, name: "Sản phẩm 10", price: "350.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 11, name: "Sản phẩm 11", price: "500.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 12, name: "Sản phẩm 12", price: "150.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 13, name: "Sản phẩm 13", price: "180.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 14, name: "Sản phẩm 14", price: "230.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 15, name: "Sản phẩm 15", price: "400.000đ", img: "../assets/images/mau_dau_dieu.png" },
            { id: 16, name: "Sản phẩm 16", price: "220.000đ", img: "../assets/images/mau_dau_dieu.png" },
        ];
    </script>

    <!-- Popup hiển thị sản phẩm -->
    <div id="productModal" class="modal">
            <div class="modal-content">
                <!-- Nút đóng -->
                <span class="close">&times;</span>

                <!-- Chi tiết sản phẩm -->
                <div class="product-detail">
                    <!-- Ảnh sản phẩm -->
                    <div class="product-image">
                        <img src="ly-390ml.jpg" alt="Ly 390ML">
                    </div>

                    <!-- Thông tin sản phẩm -->
                    <div class="product-info">
                        <h2>LY 390ML</h2>
                        <p>Thương hiệu: <strong>Màu dầu điều</strong></p>
                        <p>Mã sản phẩm: Đang cập nhật</p>
                        <p class="price"> </p>
                        <ul>
                            <li>Dùng tạo màu tự nhiên</li>
                            <li>An toàn cho sức khỏe</li>
                            <li>đáp ứng nhu cầu cho đại đa số người tiêu dùng</li>
                            <li>Dung tích: 100ML</li>
                            <li>Đóng gói: 1 chai/bộ</li>
                        </ul>

                        <!-- Chọn số lượng -->
                        <div class="quantity">
                            <span>Số lượng:</span>
                            <button class="qty-btn" id="decrease">−</button>
                            <span id="quantityValue">1</span>
                            <button class="qty-btn" id="increase">+</button>
                        </div>

                        <!-- Nút thêm vào giỏ hàng -->
                        <button class="add-to-cart">Thêm vào giỏ hàng</button>
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

<?php include '../php/footer.php'; ?>
<script src="/js/script.js"></script>
<link rel="stylesheet" href="../css/style/user/style.css">
