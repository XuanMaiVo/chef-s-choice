<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký, đăng nhập</title>
    <link rel="stylesheet" href="../../css/style/user/signup_login.css">
    <link rel="stylesheet" href="../../icons/style-icon.css">
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Parkinsans:wght@300..800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container dangky-container">
            <form action="#">
                <h2>ĐĂNG KÝ TÀI KHOẢN</h2>
                <input type="text" name="usernam" id="usernameDK" placeholder="Tên người dùng..." required
                pattern="^[a-zA-Z_ÀÁÂÃÈÉÊẾÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêếìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ]{2,255}$"
                title="Tên gồm 2 - 255 ký tự chữ cái và khoảng trắng">
                <input type="email" name="email" id="emailDK" placeholder="Email..." required
                title="Email không hợp lệ. VD: manh.le@gmail.com">
                <input type="text" name="phone" id="phoneDK" placeholder="Số điện thoại..." required
                pattern="^0[0-9]{9}$|^[+][0-9]{2}[0-9]{8}$"
                title="Phone chỉ chứa 10 ký tự số">
                <div class="password-container">
                    <input type="password" name="password" id="passwordDK" placeholder="Mật khẩu..." required 
                    pattern="^[a-zA-Z0-9]{6,20}$"
                    title="Password gồm 6-20 ký tự số và chữ cái">
                    <span id="close-eye" class="streamline--invisible-2"></span>
                    <span class="hugeicons--eye" id="open-eye"></span>
                </div>

                <p>Đã có tài khoản? <a href="" id="switchToSignUp">Đăng nhập</a></p>
                <button id="btn_dangky">Đăng Ký</button>
            </form>
        </div>
        <div class="form-container dangnhap-container">
            <form action="#">
                <h2>ĐĂNG NHẬP</h2>
                <input type="email" name="email" id="emailDN" placeholder="Email...">
                <input type="password" name="password" id="passwordDN" placeholder="Mật khẩu...">
                <p>Chưa có tài khoản? <a href="#" id="switchToSignIn">Đăng ký</a></p>
                <button id="btn_dangnhap">Đăng Nhập</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h2>CHÀO MỪNG BẠN ĐẾN VỚI CHEF'S CHOICE</h2>
                    <p id="p_right">SỰ LỰA CHỌN THÔNG MINH CHO SỨC KHỎE CỦA BẠN VÀ GIA ĐÌNH</p>
                </div>
                <div class="overlay-panel overlay-left">
                    <h2>CHÀO MỪNG BẠN QUAY LẠI VỚI CHEF'S CHOICE</h2>
                </div>
            </div>
        </div>
    </div>
    <script src="../../js/signup_login_script.js">
        
    </script>
</body>
</html>