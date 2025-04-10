<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="/chef-s-choice/css/style/user/cart.css">
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />
</head>
<body>
    <div class="cart-header">
        <div class="cart-header__logo">
            <img src="/chef-s-choice/assets/images/chef's_choice_logo.png" alt="logo">
        </div>
        <div class="cart-header__content">
            <div class="cart-header__actions">
                <div class="cart-header__search">
                    <input type="text" placeholder="Tìm kiếm sản phẩm" class="cart-header__search__input">
                    <button class="cart-header__search-button"><i class="fas fa-search"></i></button>
                </div>
                <div class="cart-header__features">
                    <button type="button" class="cart-header__featrues__icons">
                        <i class="fas fa-user"></i>
                    </button>
                    <button type="button" class="cart-header__featrues__icons">
                        <i class="fas fa-check"></i>
                    </button>
                    <button type="button" class="cart-header__featrues__cart">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>
            </div>
            <div class="cart-header__navbar">
                <div class="cart-header_nav-item">Trang chủ</div>
                <div class="cart-header_nav-item">
                    Thực đơn
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="cart-header_nav-item">Gia vị bạn cần</div>
                <div class="cart-header_nav-item">Dụng cụ nhà bếp</div>
                <div class="cart-header_nav-item selected_cnav-item">Giỏ hàng</div>
            </div>
        </div>
    </div>
    <div class="cart-middle">
        <div class="cart-table-container">
            <table class="cart-middle-table">
                <thead class='cart-table__attributes'>
                    <tr>
                        <th class="cart-table__attribute">Ảnh sản phẩm</th>
                        <th class="cart-table__attribute">Tên sản phẩm</th>
                        <th class="cart-table__attribute">Giá tiền</th>
                        <th class="cart-table__attribute">Số lượng</th>
                        <th class="cart-table__attribute">Thành tiền</th>
                        <th class="cart-table__attribute">Xóa</th>
                    </tr>
                </thead>
                <tbody class="cart-table__items">
                    <tr>
                        <td class="cart-image">
                            <img src="/chef-s-choice/assets/images/ly-thuy-tinh.png" alt="ly" class="cart-image__img">
                        </td>
                        <td class="cart-name">Ly 330ml</td>
                        <td class="cart-price">10000</td>
                        <td class="cart-quatity">
                            <i class="fas fa-minus-circle"></i>
                            <input type="text" value="1" min="1" max="100" id="cart-quantity__input">
                            <i class="fas fa-plus-circle"></i>
                        </td>
                        <td class="cart-price-of-item">10000</td>
                        <td class="cart-delete-button">
                            <i class="fas fa-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="cart-image">
                            <img src="/chef-s-choice/assets/images/ly-thuy-tinh.png" alt="ly" class="cart-image__img">
                        </td>
                        <td class="cart-name">Ly 330ml</td>
                        <td class="cart-price">10000</td>
                        <td class="cart-quatity">
                            <i class="fas fa-minus-circle"></i>
                            <input type="text" value="1" min="1" max="100" id="cart-quantity__input">
                            <i class="fas fa-plus-circle"></i>
                        </td>
                        <td class="cart-price-of-item">10000</td>
                        <td class="cart-delete-button">
                            <i class="fas fa-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="cart-image">
                            <img src="/chef-s-choice/assets/images/ly-thuy-tinh.png" alt="ly" class="cart-image__img">
                        </td>
                        <td class="cart-name">Ly 330ml</td>
                        <td class="cart-price">10000</td>
                        <td class="cart-quatity">
                            <i class="fas fa-minus-circle"></i>
                            <input type="text" value="1" min="1" max="100" id="cart-quantity__input">
                            <i class="fas fa-plus-circle"></i>
                        </td>
                        <td class="cart-price-of-item">10000</td>
                        <td class="cart-delete-button">
                            <i class="fas fa-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="cart-image">
                            <img src="/chef-s-choice/assets/images/ly-thuy-tinh.png" alt="ly" class="cart-image__img">
                        </td>
                        <td class="cart-name">Ly 330ml</td>
                        <td class="cart-price">10000</td>
                        <td class="cart-quatity">
                            <i class="fas fa-minus-circle"></i>
                            <input type="text" value="1" min="1" max="100" id="cart-quantity__input">
                            <i class="fas fa-plus-circle"></i>
                        </td>
                        <td class="cart-price-of-item">10000</td>
                        <td class="cart-delete-button">
                            <i class="fas fa-trash"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="cart-total-price">
            Tổng thanh toán: &nbsp;
            <h5 class="cart-total-price__txt">10000</h5>
        </div>
        <div class="cart-middle__button-group">
            <button class="cart-middle__return__btn">Tiếp tục mua hàng</button>
            <button class="cart-middle__continue__btn">Tiến hành thanh toán</button>
        </div>
    </div>
    <div class="cart-footer">
        <div class="cart-footer-name">Chef's Choice</div>
        <div class="cart-footer-info">2025 Chef's Choice VN by MTHP Group</div>
    </div>

    <dialog id="cart-notification-dialog">
        <div class="cnoti-message">
            <img src="" alt="" class="cnoti-image">
            <h5 class="cnoti-text"></h5>
        </div>
        <div class="cnoti-btn-group">
            <button id="cnoti-return-btn"></button>
            <button id="cnoti-continue-btn"></button>
        </div>
    </dialog>
    <script src="/chef-s-choice/js/addtocart.js"></script>
    <script src="/chef-s-choice/js/cart.js"></script>
</body>
</html>