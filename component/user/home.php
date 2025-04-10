<!-- filepath: c:\xampp\htdocs\chef-s-choice\component\user\home.php -->
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef's Choice</title>
    <link rel="stylesheet" href="../../css/style/user/home.css"> <!-- Sửa đường dẫn CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="logo"><img src="../../assets/images/chef's_choice_logo.png" alt="Chef's Choice"></div> <!-- Sửa đường dẫn hình ảnh -->
        <div class="search-bar">
            <input type="text" placeholder="TÌM KIẾM SẢN PHẨM...">
            <button>🔍</button>
        </div>
        <div class="auth-buttons">
            <button class="register">ĐĂNG KÍ</button>
            <button class="login">ĐĂNG NHẬP</button>
            <button class="cart-button"></button>
        </div>
    </header>
    <nav>
        <button class="active">Trang chủ</button>
        <div class="dropdown">
            <button class="dropdown-btn">Thực đơn <span>▼</span></button>
            <ul class="dropdown-menu">
                <li>Danh mục thực đơn</li>
                <li class="highlight">Món ngon gợi ý</li>
                <li>Món bạn yêu thích</li>
            </ul>
        </div>
        <button>Gia vị bạn cần</button>
        <button>Dụng cụ nhà bếp</button>
    </nav>
    <section class="banner">
        <img src="../../assets/images/DIY.png" alt="DIY FOOD IDEAS"> <!-- Sửa đường dẫn hình ảnh -->
    </section>
    <hr style="width: 50%; margin: 20px auto; border: 2px solid black;">
    <section class="trending">
        <h2>MÓN NGON XU HƯỚNG</h2>
        <div class="product">
            <div class="item1">
                <img src="../../assets/images/banhxeomientrung.png" alt="Bánh xèo miền Trung"> <!-- Sửa đường dẫn hình ảnh -->
                <h3>Bánh xèo miền Trung</h3>
            </div>
            <div class="item1">
                <img src="../../assets/images/banhxeomientrung.png" alt="Bánh xèo miền Trung"> <!-- Sửa đường dẫn hình ảnh -->
                <h3>Bánh xèo miền Trung</h3>
            </div>
            <div class="item1">
                <img src="../../assets/images/banhxeomientrung.png" alt="Bánh xèo miền Trung"> <!-- Sửa đường dẫn hình ảnh -->
                <h3>Bánh xèo miền Trung</h3>
            </div>
            <div class="item1">
                <img src="../../assets/images/banhxeomientrung.png" alt="Bánh xèo miền Trung"> <!-- Sửa đường dẫn hình ảnh -->
                <h3>Bánh xèo miền Trung</h3>
            </div>
        </div>
    </section>
    <hr style="width: 50%; margin: 20px auto; border: 2px solid black;">
    <section class="new-items">
        <h2>MÓN MỚI RA LÒ</h2>
        <div class="product">
            <div class="item">
                <img src="../../assets/images/banhxeomientrung.png" alt="Bánh xèo miền Trung"> <!-- Sửa đường dẫn hình ảnh -->
                <h3>Bánh xèo miền Trung</h3>
                <div class="button-group">
                    <button class="detail-btn">XEM CHI TIẾT</button>
                    <button class="save-btn">LƯU</button>
                </div>
            </div>
            <div class="item">
                <img src="../../assets/images/banhxeomientrung.png" alt="Bánh xèo miền Trung"> <!-- Sửa đường dẫn hình ảnh -->
                <h3>Bánh xèo miền Trung</h3>
                <div class="button-group">
                    <button class="detail-btn">XEM CHI TIẾT</button>
                    <button class="save-btn">LƯU</button>
                </div>
            </div>
            <div class="item">
                <img src="../../assets/images/banhxeomientrung.png" alt="Bánh xèo miền Trung"> <!-- Sửa đường dẫn hình ảnh -->
                <h3>Bánh xèo miền Trung</h3>
                <div class="button-group">
                    <button class="detail-btn">XEM CHI TIẾT</button>
                    <button class="save-btn">LƯU</button>
                </div>
            </div>
        </div>
    </section>
    <div class="more">
        <button class="more-btn">XEM THÊM...</button>
    </div>
    <div class="banner1">
        <img src="../../assets/images/bannerfooter.png" alt="Banner Footer"> <!-- Sửa đường dẫn hình ảnh -->
    </div>
    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <h2>Chef's Choice</h2>
            </div>
            <div class="footer-text">
                <p>2025 Chef's Choice VN by MTHP Group</p>
            </div>
            <div class="social-icons">
                <img src="../../assets/images/tiktok.png" alt="TikTok"> <!-- Sửa đường dẫn hình ảnh -->
                <img src="../../assets/images/facebook.png" alt="Facebook"> <!-- Sửa đường dẫn hình ảnh -->
                <img src="../../assets/images/zalo.png" alt="Zalo"> <!-- Sửa đường dẫn hình ảnh -->
                <img src="../../assets/images/youtube.png" alt="YouTube"> <!-- Sửa đường dẫn hình ảnh -->
            </div>
        </div>
    </footer>
    <section id="dish-detail" style="display: none;">
        <button id="back-button">Quay lại</button>
        <div id="dish-detail-content"></div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const dropdownBtn = document.querySelector(".dropdown-btn");
            const dropdownMenu = document.querySelector(".dropdown-menu");

            dropdownBtn.addEventListener("click", function (event) {
                event.stopPropagation();
                dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
            });

            document.addEventListener("click", function () {
                dropdownMenu.style.display = "none";
            });
        });
    </script>
</body>

</html>