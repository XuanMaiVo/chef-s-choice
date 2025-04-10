<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết công thức</title>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <div class="logo"><img src="images/chef's_choice_logo.png" alt="Chef's Choice"></div>
        <div class="search-bar">
            <input type="text" placeholder="TÌM KIẾM SẢN PHẨM...">
            <button>🔍</button>
        </div>
        <div class="auth-buttons">
            <button class="register">ĐĂNG KÍ</button>
            <button class="login">ĐĂNG NHẬP</button>
            <button class="cart-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="57" background-color="white" display="flex"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M17 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2M1 2v2h2l3.6 7.59l-1.36 2.45c-.15.28-.24.61-.24.96a2 2 0 0 0 2 2h12v-2H7.42a.25.25 0 0 1-.25-.25q0-.075.03-.12L8.1 13h7.45c.75 0 1.41-.42 1.75-1.03l3.58-6.47c.07-.16.12-.33.12-.5a1 1 0 0 0-1-1H5.21l-.94-2M7 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2" />
                </svg>
            </button>
        </div>
    </header>

    <nav>
        <button>Trang chủ</button>
        <div class="dropdown">
            <button class="dropdown-btn1">Thực đơn <span>▼</span></button>
            <ul class="dropdown-menu">
                <li>Danh mục thực đơn</li>
                <li class="highlight">Món ngon gợi ý</li>
                <li>Món bạn yêu thích</li>
            </ul>
        </div>
        <button>Gia vị bạn cần</button>
        <button>Dụng cụ nhà bếp</button>
    </nav>
    <section class="banner1">
        <img src="images/bannerfooter.png" alt="Banner footer">
    </section>
    <section class="recipe">
        <div class="recipe-container">
            <div class="recipe-image">
                <img src="images/banhxeomientrung.png" alt="Bánh xèo miền Trung">
            </div>
            <div class="ingredients">
                <h3>Nguyên liệu:</h3>
                <ul>
                    <li><strong>Bột gạo:</strong> 200g</li>
                    <li><strong>Nước lọc:</strong> 250ml</li>
                    <li><strong>Nước cốt dừa:</strong> 50ml</li>
                    <li><strong>Bột nghệ:</strong> 1/2 thìa cà phê</li>
                    <li><strong>Thịt bò:</strong> 200g</li>
                    <li><strong>Tôm:</strong> 200g</li>
                    <li><strong>Hành lá:</strong> 1 cây</li>
                    <li><strong>Giá đỗ:</strong> 100g</li>
                    <li><strong>Hành tây, nấm, sắn, xà lách…</strong></li>
                    <li><strong>Gia vị:</strong> Muối, tiêu, dầu ăn, hạt nêm, đường</li>
                </ul>
            </div>
        </div>
        <div class="instructions">
            <h3>Các bước thực hiện:</h3>
            <h4>Bước 1: Chuẩn bị nguyên liệu</h4>
            <p>Rửa sạch hành tây, giá đỗ, hành lá, rau sống… sau đó ngâm nước muối loãng rồi rửa lại lần nữa.</p>
            <p>Tôm cắt bỏ đầu, bóc vỏ, lấy chỉ đen, rửa sạch và thái mỏng.</p>
            <p>Thịt bò rửa sạch, thái lát mỏng.</p>
            <p>Hành lá cắt nhỏ, để riêng phần đầu hành và thân hành.</p>

            <h4>Bước 2: Pha bột bánh</h4>
            <p>Trộn bột gạo, bột nghệ, muối vào tô. Sau đó, cho thêm nước, nước cốt dừa vào khuấy đều.</p>
            <p>Thêm hành lá cắt nhỏ vào hỗn hợp bột, khuấy đều cho đến khi hỗn hợp mịn, không bị vón cục.</p>
            <p>Để bột nghỉ khoảng 30 phút để bột ngấm đều.</p>

            <h4>Bước 3: Xào nhân bánh</h4>
            <p>Bắc chảo lên bếp, cho dầu ăn vào phi thơm hành tím.</p>
            <p>Cho thịt bò vào xào nhanh trên lửa lớn, nêm một ít gia vị rồi để riêng.</p>
            <p>Tiếp tục xào tôm với hành tây và một ít dầu ăn.</p>

            <h4>Bước 4: Đổ bánh</h4>
            <p>Làm nóng chảo, cho một ít dầu ăn vào, tráng đều mặt chảo.</p>
            <p>Múc một muỗng bột đổ vào chảo, nghiêng chảo để bột lan đều.</p>
            <p>Đậy nắp và để bánh chín vàng giòn khoảng 2 phút.</p>
            <p>Mở nắp, cho nhân tôm, thịt bò, giá đỗ vào rồi gập đôi bánh lại.</p>
            <p>Chiên thêm khoảng 1 phút rồi lấy bánh ra, đặt lên giấy thấm dầu.</p>

            <h4>Bước 5: Thưởng thức</h4>
            <p>Bánh xèo ăn kèm với rau sống, dưa leo và nước mắm chua ngọt.</p>
        </div>
    </section>




    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <h2>Chef's Choice</h2>
            </div>
            <div class="footer-text">
                <p>2025 Chef's Choice VN by MTHP Group</p>
            </div>
            <div class="social-icons">
                <img src="images/tiktok.png" alt="TikTok">
                <img src="images/facebook.png" alt="Facebook">
                <img src="images/zalo.png" alt="Zalo">
                <img src="images/youtube.png" alt="YouTube">
            </div>
        </div>

    </footer>

    <script>

    </script>

</body>

</html>