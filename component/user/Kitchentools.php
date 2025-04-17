<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchen Tools</title>
    <link rel="stylesheet" href="/css/style/user/Spicesyouneed.css">

</head>
<body>
    <?php
        include("header.php");
        include("banner.php");
        include("navbar.php");
    ?>
    <section class="products">
        <h2>DỤNG CỤ NHÀ BẾP</h2>
        <div class="buttons">
            <button id="openFilter" class="filter-btn">
                <img src="/assets/images/filter-6553.png" alt="Bộ lọc"> BỘ LỌC
            </button>
        <div id="filterBox" class="filter-container">
            <h3>LOẠI SẢN PHẨM</h3>
            <div class="category-buttons">
                <button>NỒI</button>
                <button>CHẢO</button>
                <button>BẾP</button>
                <button>CHÉN</button>
                <button>LY</button>
                <button>ĐĨA</button>
            </div>
    
            <h3>GIÁ</h3>
            <div class="price-filters">
                <label><input type="checkbox"> 0 - 500,000</label>
                <label><input type="checkbox"> 500,000 - 1,000,000</label>
                <label><input type="checkbox"> 1,000,000 - 5,000,000</label>
                <label><input type="checkbox"> 5.000,000 - 8,000,000</label>
                <label><input type="checkbox"> 8,000,000 - 10,000,000</label>
                <label><input type="checkbox"> 0 - 10,000,000</label>
            </div>
                <div class="filter-group">
                    <button class="filter-button">LỌC</button>
                    <button id="closeFilter" class="close-button">ĐÓNG</button>
                </div>
            </div>
    
            <button id="sortToggle" class="sort-btn">
                <img src="/assets/images/up-and-down-black-outline-circle-arrows-20701.png" alt="Sắp xếp"> SẮP XẾP
            </button>
            
            <div id="sortOptions" class="sort-container ">
                <button onclick="sortProducts('asc')">Sắp xếp giá tăng dần <img src="/assets/images/prime--sort-amount-up.png"></button>
                <button onclick="sortProducts('desc')">Sắp xếp giá giảm dần <img src="/assets/images/prime--sort-amount-down.png"></button>
            </div>
        </div>

        <div class="product-container">
            <div id="product-list"></div>
        </div>

        <div id="productModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="product-detail">
                    <div class="product-image">
                        <img id="modalImage" src="" alt="Sản phẩm">
                    </div>
                    <div class="product-info">
                        <h2>LY 390ML</h2>
                        <p>Thương hiệu: <strong>Luminarc - Pháp</strong></p>
                        <p>Mã sản phẩm: Đang cập nhật</p>
                        <p class="price"> </p>
                        <ul>
                            <li>Chất liệu thủy tinh cao cấp</li>
                            <li>An toàn cho sức khỏe</li>
                            <li>Sử dụng an toàn trong máy rửa bát</li>
                            <li>Dung tích: 390ML</li>
                            <li>Đóng gói: 6 chiếc/bộ</li>
                        </ul>

                        <div class="quantity">
                            <span>Số lượng:</span>
                            <button class="qty-btn" id="decrease">−</button>
                            <span id="quantityValue">1</span>
                            <button class="qty-btn" id="increase">+</button>
                        </div>
                        <button class="add-to-cart" id="add-to-cart" >Thêm vào giỏ hàng</button>
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
    <script src="/js/Spicesyouneed.js"></script>
    <?php
    include("footer.php");     
    ?>
</body>
</html>
