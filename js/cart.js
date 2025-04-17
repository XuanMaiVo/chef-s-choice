document.addEventListener("DOMContentLoaded", function () {

    renderCart(cart, renderCartItem, ".cart-table-container");

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
        window.location.href = "/chef'schoice/chef-s-choice/component/user/payment.php";
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

const cart =[
    { id : 1, name: "Bun bo hue", price: 10000, quantity: 1, image: "/chef%27schoice/chef-s-choice/assets/images/bun-bo-hue.jpg"},
    { id : 2, name: "Chen 12 cm", price: 10000, quantity: 1, image: "/chef%27schoice/chef-s-choice/assets/images/chen-12cm.png"},
    { id : 3, name: "Salad ca ngu", price: 10000, quantity: 1, image: "/chef%27schoice/chef-s-choice/assets/images/salad-ca-ngu.jpg"},
    { id : 4, name: "Sa te tom 100g", price: 10000, quantity: 1, image: "/chef%27schoice/chef-s-choice/assets/images/Sa_te_Tom_100g.png"},
    { id : 5, name: "Sot cam 200g", price: 10000, quantity: 1, image: "/chef%27schoice/chef-s-choice/assets/images/sot-cam-200g.png"},
]

// function renderGioHang(cart, hamRenderItem, wrapperSelector = ".menuGioHang") {
//     const wrapper = document.querySelector(wrapperSelector);
//     if (!wrapper) {
//       console.log("khong tim duoc wrapper cua gio hang");
//       return;
//     }
//     wrapper.innerHTML = "";
//     if (cart.length === 0) {
//       wrapper.appendChild(document.createTextNode("Thêm sản phẩm vào giỏ hàng!"));
//       return;
//     }
//     const gioHang = document.createElement("table");
//     gioHang.classList.add("cart-table");
//     const muc = document.createElement("thead");
//     const anh = document.createElement("th");
//     anh.scope = "col";
//     muc.appendChild(anh);
//     const ten = document.createElement("th");
//     ten.scope = "col";
//     ten.textContent = "Tên sản phẩm";
//     muc.appendChild(ten);
//     const gia = document.createElement("th");
//     gia.scope = "col";
//     gia.textContent = "Giá";
//     muc.appendChild(gia);
//     const soLuong = document.createElement("th");
//     soLuong.scope = "col";
//     soLuong.textContent = "Số lượng";
//     muc.appendChild(soLuong);
//     const tong = document.createElement("th");
//     tong.scope = "col";
//     tong.textContent = "Tổng";
//     muc.appendChild(tong);
//     const xoa = document.createElement("th");
//     xoa.scope = "col";
//     muc.appendChild(xoa);
//     gioHang.appendChild(muc);
//     const danhSach = document.createElement("tbody");
//     for (const item of cart) {
//       danhSach.appendChild(hamRenderItem(item, cart));
//     }
//     const space1 = document.createElement("td");
//     const space2 = document.createElement("td");
//     space2.textContent = "Tổng tiền";
//     const space3 = document.createElement("td");
//     const space4 = document.createElement("td");
//     const space5 = document.createElement("td");
//     space5.classList.add("final-total-cost");
  
//     const space6 = document.createElement("td");
//     danhSach.appendChild(space1);
//     danhSach.appendChild(space2);
//     danhSach.appendChild(space3);
//     danhSach.appendChild(space4);
//     danhSach.appendChild(space5);
//     danhSach.appendChild(space6);
//     gioHang.appendChild(danhSach);
//     wrapper.appendChild(gioHang);
//     //capNhatFinalTotalCost(cart);
//   }

//   function renderItemGioHang(item, cart) {
//     const sanpham = timSanPham(item["san-pham"]);
//     if (!sanpham) {
//       console.log("khong tim thay san pham trong gio hang");
//       return;
//     }
//     const rowCart = document.createElement("tr");
//     const hinhAnh = document.createElement("td");
//     hinhAnh.style.position = "relative";
//     const anhSanPham = document.createElement("img");
//     anhSanPham.src = "/images/" + sanpham["image-file"];
//     anhSanPham.classList.add("tiny-image");
//     hinhAnh.appendChild(anhSanPham);
  
//     // Tạo tooltip chứa hình ảnh lớn hơn
//     const tooltip = document.createElement("div");
//     tooltip.classList.add("tooltip");
  
//     const largeImage = document.createElement("img");
//     largeImage.src = "/images/" + sanpham["image-file"];
//     largeImage.classList.add("lagre-image");
//     tooltip.appendChild(largeImage);
//     hinhAnh.appendChild(tooltip);
  
//     // Xử lý hover để hiển thị tooltip
//     anhSanPham.addEventListener("mouseenter", () => {
//       tooltip.style.display = "block";
//     });
//     anhSanPham.addEventListener("mouseleave", () => {
//       tooltip.style.display = "none";
//     });
  
//     rowCart.appendChild(hinhAnh);
//     const ten = document.createElement("td");
//     ten.textContent = sanpham["name"];
//     rowCart.appendChild(ten);
//     const gia = document.createElement("td");
//     gia.textContent = sanpham["price"];
//     rowCart.appendChild(gia);
//     const soLuong = document.createElement("td");
//     const soLuongChiTiet = document.createElement("input");
//     soLuongChiTiet.type = "number";
//     soLuongChiTiet.min = 1;
//     soLuongChiTiet.max = 100;
//     soLuongChiTiet.value = item["so-luong"];
//     soLuongChiTiet.addEventListener("input", () => {
//       item["so-luong"] = parseInt(soLuongChiTiet.value, 10);
//       tong.textContent = (
//         sanpham["price-n"] * soLuongChiTiet.value
//       ).toLocaleString("vi-VN", { style: "currency", currency: "VND" });
//       console.log(cart);
//       capNhatCart(cart);
//     });
//     soLuong.appendChild(soLuongChiTiet);
//     rowCart.appendChild(soLuong);
//     const tong = document.createElement("td");
//     tong.classList.add("total-cost");
//     tong.textContent = (sanpham["price-n"] * item["so-luong"]).toLocaleString(
//       "vi-VN",
//       { style: "currency", currency: "VND" }
//     );
//     rowCart.appendChild(tong);
//     const xoa = document.createElement("td");
//     const xoaKhoiCart = document.createElement("button");
//     xoaKhoiCart.type = "button";
//     const iconXoaKhoiCart = document.createElement("i");
//     iconXoaKhoiCart.classList.add("fas");
//     iconXoaKhoiCart.classList.add("fa-trash");
//     xoaKhoiCart.appendChild(iconXoaKhoiCart);
//     xoaKhoiCart.addEventListener("click", () => {
//       const index = cart.findIndex((i) => i["san-pham"] === item["san-pham"]);
//       if (index !== 1) {
//         cart.splice(index, 1);
//       }
//       console.log(cart);
//       capNhatCart(cart);
//     });
//     xoa.appendChild(xoaKhoiCart);
//     rowCart.appendChild(xoa);
//     return rowCart;
//   }

function renderCart(cart, renderItemCart, wrapperSelector = ".cart-table-container") {
    const wrapper = document.querySelector(wrapperSelector);
    if (!wrapper) {
        console.log("Không tìm thấy wrapper của giỏ hàng");
        return;
    }
    wrapper.innerHTML = ""; // Xóa nội dung cũ
    if (cart.length === 0) {
        wrapper.appendChild(document.createTextNode("Giỏ hàng trống!"));
        return;
    }
    const cartTable = document.createElement("table");
    cartTable.classList.add("cart-middle-table");

    const cartTableAttributes = document.createElement("thead");
    cartTableAttributes.classList.add("cart-table__attributes");
    const headerRow = document.createElement("tr");
    const headers = ["Hình ảnh", "Tên sản phẩm", "Giá", "Số lượng", "Tổng", "Xóa"];
    headers.forEach(headerText => {
        const th = document.createElement("th");
        th.textContent = headerText;
        headerRow.appendChild(th);
    });
    cartTableAttributes.appendChild(headerRow);
    cartTable.appendChild(cartTableAttributes);

    const cartTableItems = document.createElement("tbody");
    cartTableItems.classList.add("cart-table__items");
    cart.forEach(item => {
        cartTableItems.appendChild(renderItemCart(item, cart));
    });
    cartTable.appendChild(cartTableItems);

    wrapper.appendChild(cartTable);
}
function renderCartItem(item) {
    const row = document.createElement("tr");

    const cartImage = document.createElement("td");
    cartImage.classList.add("cart-image");
    const image = document.createElement("img");
    image.src = item.image;
    image.alt = item.name;
    image.classList.add("cart-image__img");
    cartImage.appendChild(image);
    row.appendChild(cartImage);

    const cartName = document.createElement("td");
    cartName.classList.add("cart-name");
    cartName.textContent = item.name;
    row.appendChild(cartName);

    const cartPrice = document.createElement("td");
    cartPrice.classList.add("cart-price");
    cartPrice.textContent = item.price.toLocaleString("vi-VN", { style: "currency", currency: "VND" });
    row.appendChild(cartPrice);

    const cartQuantity = document.createElement("td");
    cartQuantity.classList.add("cart-quatity");

    const plusButton = document.createElement("i");
    plusButton.classList.add("fas", "fa-plus-circle");
    plusButton.addEventListener("click",() => {
        quantityInput.value = parseInt(quantityInput.value) + 1;
        item.quantity = parseInt(quantityInput.value,10);
        updateItemPrice(quantityInput);
        updateTotalPrice();
    });
    cartQuantity.appendChild(plusButton);
    
    const quantityInput = document.createElement("input");
    quantityInput.type = "number";
    quantityInput.id = "cart-quantity__input";
    quantityInput.value = item.quantity;
    quantityInput.min = 1;
    quantityInput.max = 100;
    quantityInput.addEventListener("input",() => {
        item.quantity = parseInt(quantityInput.value,10);
        updateItemPrice(quantityInput);
        updateTotalPrice();
    });
    cartQuantity.appendChild(quantityInput);

    const minusButton = document.createElement("i");
    minusButton.classList.add("fas", "fa-minus-circle");
    minusButton.addEventListener("click",() => {
        quantityInput.value = parseInt(quantityInput.value) - 1;
        item.quantity = parseInt(quantityInput.value,10);
        updateItemPrice(quantityInput);
        updateTotalPrice();
    });
    cartQuantity.appendChild(minusButton);
    row.appendChild(cartQuantity);

    const totalCell = document.createElement("td");
    totalCell.textContent = (item.price * item.quantity).toLocaleString("vi-VN", { style: "currency", currency: "VND" });
    totalCell.classList.add("cart-price-of-item");
    row.appendChild(totalCell);

    const deleteCell = document.createElement("td");
    const deleteButton = document.createElement("i");
    deleteButton.classList.add("fas", "fa-trash");
    deleteCell.appendChild(deleteButton);
    row.appendChild(deleteCell);

    return row;
}

