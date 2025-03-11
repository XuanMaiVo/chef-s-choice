const btnDonHang = document.getElementById("donhang");
const settingContent = document.getElementById("setting-content");
const chiTietDHContainer = document.getElementById("chi-tiet-don-hang-container");

        btnDonHang.addEventListener("click", function() {
            settingContent.classList.toggle("hidden");
            if (chiTietDHContainer.style.display === "flex") {
                chiTietDHContainer.style.display = "none";
                btnDonHang.style.backgroundColor = "#d9d9d9";    // Ẩn đi nếu đang hiện
            } else {
                chiTietDHContainer.style.display = "flex"; 
                btnDonHang.style.backgroundColor = "#ffd700";   // Hiện lên nếu đang ẩn           
            }
             
        });


const userName = document.getElementById('user-name');
const userEmail = document.getElementById('user-email');
const userPhone = document.getElementById('user-phone');

const editName = document.getElementById('edit-name');
const editEmail = document.getElementById('edit-email');
const editPhone = document.getElementById('edit-phone');


editName.addEventListener('click', (e) => {
    e.preventDefault();
    userName.disabled = false;
    userName.focus();
});
userName.addEventListener("blur", function() {
    userName.disabled = true;
});


editEmail.addEventListener('click', (e) => {
    e.preventDefault();
    userEmail.disabled = false;
    userEmail.focus();
});
userEmail.addEventListener("blur", function() {
    userEmail.disabled = true;
});


editPhone.addEventListener('click', (e) => {
    e.preventDefault();
    userPhone.disabled = false;
    userPhone.focus();
});
userPhone.addEventListener("blur", function() {
    userPhone.disabled = true;
});