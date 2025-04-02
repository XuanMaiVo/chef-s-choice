document.addEventListener("DOMContentLoaded", function () {
    updateTotalPrice();

    // Cập nhật số lượng sản phẩm
    document.querySelectorAll(".cart-quatity i").forEach(button => {
        button.addEventListener("click", function () {
            let input = this.parentElement.querySelector("input");
            let quantity = parseInt(input.value);
            if (this.classList.contains("fa-plus-circle")) {
                input.value = quantity + 1;
            } else if (this.classList.contains("fa-minus-circle") && quantity > 1) {
                input.value = quantity - 1;
            }
            updateItemPrice(this);
            updateTotalPrice();
        });
    });

    // Xóa sản phẩm
    document.querySelectorAll(".cart-delete-button i").forEach(button => {
        button.addEventListener("click", function () {
            this.closest("tr").remove();
            updateTotalPrice();
        });
    });

    // Tiến hành thanh toán
    document.querySelector(".cart-middle__continue__btn").addEventListener("click", function () {
        alert("Chuyển đến trang thanh toán!");
        window.location.href = "/payment.html";
    });
});

function updateItemPrice(button) {
    let row = button.closest("tr");
    let price = parseInt(row.querySelector(".cart-price").textContent);
    let quantity = parseInt(row.querySelector("#cart-quantity__input").value);
    row.querySelector(".cart-price-of-item").textContent = price * quantity;
}

function updateTotalPrice() {
    let total = 0;
    document.querySelectorAll(".cart-price-of-item").forEach(item => {
        total += parseInt(item.textContent);
    });
    document.querySelector(".cart-total-price__txt").textContent = total;
}
