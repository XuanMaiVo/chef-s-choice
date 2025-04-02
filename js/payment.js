// Hàm để cập nhật tổng tiền và phí vận chuyển
function updateTotal() {
    let totalPrice = 0;
    let shippingFee = 10000; // Giả sử phí vận chuyển là 10.000 đ

    // Lấy tất cả các dòng sản phẩm trong đơn hàng
    const items = document.querySelectorAll('.payment-items .payment-item');

    items.forEach(item => {
        // Lấy giá tiền của sản phẩm
        let price = parseInt(item.querySelector('.p-item-product-price').innerText);
        let quantity = 1; // Giả sử mỗi sản phẩm có số lượng là 1 (có thể thay đổi theo số lượng thực tế)

        totalPrice += price * quantity;
    });

    // Cập nhật tổng tiền thanh toán và phí vận chuyển
    document.querySelector('.payment-total-price__').innerText = totalPrice + shippingFee;
    document.querySelector('.payment-cost-transfer__txt').innerText = shippingFee;
}

// Hàm để lấy danh sách tỉnh
function loadProvinces() {
    const provinces = ["Hà Nội", "TP Hồ Chí Minh", "Đà Nẵng"]; // Dữ liệu tỉnh có thể thay đổi
    const provinceSelect = document.getElementById('province');

    provinces.forEach(province => {
        const option = document.createElement('option');
        option.value = province;
        option.innerText = province;
        provinceSelect.appendChild(option);
    });
}

// Hàm để lấy danh sách quận khi chọn tỉnh
function loadDistricts(province) {
    const districts = {
        "Hà Nội": ["Cầu Giấy", "Ba Đình", "Hà Đông"],
        "TP Hồ Chí Minh": ["Quận 1", "Quận 2", "Quận 3"],
        "Đà Nẵng": ["Sơn Trà", "Hải Châu", "Cẩm Lệ"]
    };

    const districtSelect = document.getElementById('district');
    districtSelect.innerHTML = '<option value="" disabled selected>Chọn quận/huyện</option>';

    districts[province].forEach(district => {
        const option = document.createElement('option');
        option.value = district;
        option.innerText = district;
        districtSelect.appendChild(option);
    });
}

// Khi tỉnh được chọn, cập nhật các quận tương ứng
document.getElementById('province').addEventListener('change', function() {
    loadDistricts(this.value);
});

// Lắng nghe sự kiện khi người dùng click vào "Đặt hàng"
document.querySelector('.payment-continue-btn').addEventListener('click', function() {
    // Lấy thông tin từ các trường nhập liệu
    let email = document.querySelector('input[type="email"]').value;
    let name = document.querySelector('input[type="text"]:nth-of-type(1)').value;
    let phone = document.querySelector('input[type="text"]:nth-of-type(2)').value;
    let province = document.querySelector('#province').value;
    let district = document.querySelector('#district').value;
    let address = document.querySelector('input[type="text"]:nth-of-type(3)').value;

    // Kiểm tra các trường đã được điền đầy đủ chưa
    if (email === "" || name === "" || phone === "" || province === "" || district === "" || address === "") {
        alert("Vui lòng điền đầy đủ thông tin!");
    } else {
        alert("Đặt hàng thành công!");
        // Bạn có thể thêm các thao tác gửi thông tin lên server ở đây nếu cần
    }
});

// Quay lại giỏ hàng
document.querySelector('.p-return-cart-btn').addEventListener('click', function() {
    window.location.href = '/cart'; // Điều hướng về trang giỏ hàng
});

// Quay về trang chủ
document.querySelector('.p-return-home-btn').addEventListener('click', function() {
    window.location.href = '/'; // Điều hướng về trang chủ
});

// Gọi hàm loadProvinces và updateTotal khi trang được tải
window.addEventListener('load', function() {
    loadProvinces();
    updateTotal();
});
