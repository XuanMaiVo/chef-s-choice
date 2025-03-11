        const switchToSignUp = document.getElementById('switchToSignUp');
        const switchToSignIn = document.getElementById('switchToSignIn');
        const container = document.getElementById('container');
        const closeEye = document.getElementById('close-eye');
        const openEye = document.getElementById('open-eye');
        const passwordField = document.getElementById('passwordDK');
        const emailField = document.getElementById('emailDK');
        const phoneField = document.getElementById('phoneDK');

        // Khi nhấn vào link "Đăng ký"
        switchToSignUp.addEventListener('click', (e) => {
            e.preventDefault();
            container.classList.add('right-panel-active');
        });

        // Khi nhấn vào link "Đăng nhập"
        switchToSignIn.addEventListener('click', (e) => {
            e.preventDefault();
            container.classList.remove('right-panel-active');
        });

        //Khi ấn con mắt đóng
        closeEye.addEventListener('click', (e) => {
            e.preventDefault();
            passwordField.type = "text";
            closeEye.style.display = "none";
            openEye.style.display = "block";
        });
        openEye.addEventListener('click', (e) => {
            e.preventDefault();
            passwordField.type = "password";
            closeEye.style.display = "block";
            openEye.style.display = "none";
        });
        //form đăng ký
//Mật khẩu 8 ký tự
//Sđt: 10 số, bắt đầu bằng 0
//Tên không được chứa số
//Email có đuôi @gmail.com

        

