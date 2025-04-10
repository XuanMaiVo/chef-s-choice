<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn hàng</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />
    <link href="/chef-s-choice/css/style/admin/goods.css" rel="stylesheet" />
</head>
<body>
    <aside class="sidebar">
        <div class="goods-accounts">
            <div class="account-avatar"></div>
            <h3 class="account-name">NV Xuan Maii</h3>
        </div>
        <div class="menu-dashboard">
            <ul>
                <li>Dashboard</li>
                <li>Products</li>
                <li>Menu</li>
                <li>Orders</li>
                <li>Customers</li>
            </ul>
        </div>
    </aside>
    <div class="goods-content">
        <h3 class="goods-title">Đơn hàng</h3>
        <div class="goods-actions">
            <div class="goods-search">
                <input type="text" placeholder="Nhập mã đơn hàng, tên khách hàng..." class="goods-search__input">
                <button class="goods-search__icon">
                    <i class="fas fa-search"></i>
                </button> 
            </div>
            <!-- <button class="goods-sort">
                <i class="fas fa-sort"></i>
                &nbsp;
                Sắp xếp
            </button> -->
            <select class="goods-sort">
                <option value="">
                    <i class="fas fa-sort"></i>
                    &nbsp;
                    Sắp xếp
                </option>
                <option value="id">Sắp xếp theo ID</option>
                <option value="name">Sắp xếp theo Tên</option>
                <option value="address">Sắp xếp theo Địa chỉ</option>
                <option value="status">Sắp xếp theo Trạng thái</option>
            </select>
            
        </div>
        <div class="order-wrapper">
            <div class="order-attributes">
                <div class="order-attributes-item order-id">Mã đơn hàng</div>
                <div class="order-attributes-item customer-name">Tên khách hàng</div>
                <div class="order-attributes-item customer-address">Địa chỉ</div>
                <div class="order-attributes-item order-status">Tình trạng đơn hàng</div>
            </div>
            <div class="order-list">
                <div class="order-items">
                    <div class="order-item order-id"></div>
                    <div class="order-item customer-name"></div>
                    <div class="order-item customer-address"></div>
                    <select class="order-status">
                        <option value="cho-xac-nhan">Chờ xác nhận</option>
                        <option value="dang-chuan-bi-hang">Đang chuẩn bị</option>
                        <option value="dang-giao-hang">Đang giao hàng</option>
                        <option value="da-thanh-toan">Đã thanh toán</option>
                    </select>
                </div>
                <div class="order-items">
                    <div class="order-item order-id"></div>
                    <div class="order-item customer-name"></div>
                    <div class="order-item customer-address"></div>
                    <select class="order-status">
                        <option value="cho-xac-nhan">Chờ xác nhận</option>
                        <option value="dang-chuan-bi-hang">Đang chuẩn bị</option>
                        <option value="dang-giao-hang">Đang giao hàng</option>
                        <option value="da-thanh-toan">Đã thanh toán</option>
                    </select>
                </div>
                <div class="order-items">
                    <div class="order-item order-id"></div>
                    <div class="order-item customer-name"></div>
                    <div class="order-item customer-address"></div>
                    <select class="order-status">
                        <option value="cho-xac-nhan">Chờ xác nhận</option>
                        <option value="dang-chuan-bi-hang">Đang chuẩn bị</option>
                        <option value="dang-giao-hang">Đang giao hàng</option>
                        <option value="da-thanh-toan">Đã thanh toán</option>
                    </select>
                </div>
                
            </div>
        </div>
    </div>
    <script src="/chef-s-choice/js/goods.js"></script>
</body>

</html>