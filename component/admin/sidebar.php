<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Sản phẩm</title>
    <link rel="stylesheet" href="/css/style/admin/sidebar.css">
    <script src="/js/sidebar.js"></script>

</head>
<body>
<?php
    $current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="sidebar">
    <div class="profile">
        <div class="avatar"></div>
        <p>NV Xuân Maii</p>
    </div>
    <ul id="sidebar-menu">
        <li class="<?php echo ($current_page == 'dashboard.php') ? 'active' : ''; ?>">
            <a href="#">Dashboard</a>
        </li>
        <li class="<?php echo ($current_page == 'product.php') ? 'active' : ''; ?>">
            <a href="product.php">Sản phẩm</a>
        </li>
        <li class="<?php echo ($current_page == 'menu.php') ? 'active' : ''; ?>">
            <a href="#">Thực đơn</a>
        </li>
        <li class="<?php echo ($current_page == 'order.php') ? 'active' : ''; ?>">
            <a href="#">Đơn hàng</a>
        </li>
        <li class="<?php echo ($current_page == 'customer.php') ? 'active' : ''; ?>">
            <a href="#">Khách hàng</a>
        </li>
    </ul>
</div>

</body>
</html>