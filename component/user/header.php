<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="../../css/style/user/header.css">
</head>
<body>

<header>
    <div class="logo">
        <img src="../../assets/images/chef's_choice_logo.png" alt="Chef's Choice">
    </div>
    <div class="search-bar">
        <input type="text" placeholder="Tìm kiếm sản phẩm...">
        <button>🔍</button>
    </div>
    <div class="user-cart-container">
        <div class="user-dropdown">
            <div class="user-icon" onclick="toggleDropdown()">
                <img src="../../assets/images/user-yellow-circle-20550.png" alt="User Icon">
                <img src="../../assets/images/down-chevron-yellow-gradient-16168.png" alt="Dropdown Arrow">
            </div>
            <div class="dropdown-menu">
                <a href="account.php">Thông tin tài khoản</a>
                <hr>
                <a href="signup_login.php" class="logout">
                    Đăng xuất 
                    <img src="../../assets/images/yellow-shopping-cart-10916.png" alt="Logout">
                </a>
            </div>
        </div>
        <div class="cart-icon">
            <img src="../../assets/images/black-shopping-cart-10933.png" alt="Cart">
        </div>
    </div>
</header>

<script src="../../js/header.js"></script>
</body>
</html>
