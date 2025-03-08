function toggleDropdown() {
    document.querySelector('.user-dropdown').classList.toggle('open');
}

// Danh sách sản phẩm giả lập
document.addEventListener("DOMContentLoaded", function () {
    const itemsPerPage = 12; // Số sản phẩm mỗi trang
    let currentPage = 1;
    const totalPages = Math.ceil(products.length / itemsPerPage);

    const productList = document.getElementById("product-list");
    const pageNumbers = document.getElementById("pageNumbers");
    const prevPageBtn = document.getElementById("prevPage");
    const nextPageBtn = document.getElementById("nextPage");

    function renderProducts(page) {
        productList.innerHTML = "";
        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;
        const paginatedProducts = products.slice(start, end);
    
        paginatedProducts.forEach(product => {
            const productHTML = `
                <div class="product-item">
                    <button class="openModalBtn" data-id="${product.id}">
                        <img src="${product.img}" alt="${product.name}">
                    </button>
                    <p>${product.name}</p>
                    <span>${product.price}</span>
                    <button>Thêm vào giỏ</button>
                </div>
            `;
            productList.innerHTML += productHTML;
        });
    
        // Gán sự kiện mở modal cho tất cả nút
        document.querySelectorAll(".openModalBtn").forEach(button => {
            button.addEventListener("click", function () {
                const productId = this.getAttribute("data-id");
                viewProduct(productId);
            });
        });
    }
    function viewProduct(productId) {
        const product = products.find(p => p.id == productId);
        if (!product) return;
    
        document.querySelector(".product-image img").src = product.img;
        document.querySelector(".product-info h2").innerText = product.name;
        document.querySelector(".product-info .price").innerText = product.price;
    
        document.getElementById("productModal").style.display = "flex";
    }
    
    // Đóng modal khi nhấn vào nút đóng hoặc bên ngoài modal
    document.querySelector(".close").addEventListener("click", function () {
        document.getElementById("productModal").style.display = "none";
    });
    window.addEventListener("click", function (event) {
        if (event.target === document.getElementById("productModal")) {
            document.getElementById("productModal").style.display = "none";
        }
    });
    
    
    document.addEventListener("DOMContentLoaded", function () {
        const modal = document.getElementById("productModal");
        const openModal = document.getElementById("openModal");
        const closeModal = document.querySelector(".close");
        const quantityValue = document.getElementById("quantityValue");
        const decreaseBtn = document.getElementById("decrease");
        const increaseBtn = document.getElementById("increase");
    
        let quantity = 1;
    
        // Mở popup
        openModal.addEventListener("click", function () {
            modal.style.display = "flex";
        });
    
        // Đóng popup khi nhấn nút X
        closeModal.addEventListener("click", function () {
            modal.style.display = "none";
        });
    
        // Đóng popup khi nhấn ra ngoài modal
        window.addEventListener("click", function (event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    
        // Tăng số lượng
        increaseBtn.addEventListener("click", function () {
            quantity++;
            quantityValue.textContent = quantity;
        });
    
        // Giảm số lượng (không nhỏ hơn 1)
        decreaseBtn.addEventListener("click", function () {
            if (quantity > 1) {
                quantity--;
                quantityValue.textContent = quantity;
            }
        });
    });
    



    function renderPagination() {
        pageNumbers.innerHTML = "";
        for (let i = 1; i <= totalPages; i++) {
            const btn = document.createElement("button");
            btn.innerText = i;
            btn.classList.add("page-btn");
            if (i === currentPage) {
                btn.classList.add("active");
            }
            btn.addEventListener("click", function () {
                currentPage = i;
                updateUI();
            });
            pageNumbers.appendChild(btn);
        }
    }

    function updateUI() {
        renderProducts(currentPage);
        renderPagination();

        prevPageBtn.disabled = currentPage === 1;
        nextPageBtn.disabled = currentPage === totalPages;
    }

    prevPageBtn.addEventListener("click", function () {
        if (currentPage > 1) {
            currentPage--;
            updateUI();
        }
    });

    nextPageBtn.addEventListener("click", function () {
        if (currentPage < totalPages) {
            currentPage++;
            updateUI();
        }
    });

    updateUI(); // Khởi chạy lần đầu
});


    // Hiển thị modal

    //Hiển thị số trang
    // Lấy phần tử span có id="pageNumbers"
    const pageNumbers = document.getElementById("pageNumbers");

    // Tạo số trang (ví dụ: 1 - 5)
    let pages = "";
    for (let i = 1; i <= 5; i++) {
        pages += `<button class="page-btn">${i}</button>`;
    }

    // Gán vào HTML
    pageNumbers.innerHTML = pages;


// Bật/Tắt phần bộ lọc
document.addEventListener("DOMContentLoaded", function () {
    const openFilter = document.getElementById("openFilter");
    const closeFilter = document.getElementById("closeFilter");
    const filterBox = document.getElementById("filterBox");
    const filterBtn = document.getElementById("openFilter");
    // const overlay = document.getElementById("overlay");

    // Mở bộ lọc
    openFilter.addEventListener("click", function () {
        filterBox.classList.add("show");
        filterBtn.classList.toggle("active");
        // overlay.style.display = "block"; // Hiện overlay
    });

    // Đóng bộ lọc
    closeFilter.addEventListener("click", function () {
        filterBox.classList.remove("show");
        filterBtn.classList.remove("active"); 
        // overlay.style.display = "none"; // Ẩn overlay

    });
    
    // Chặn click bên ngoài bộ lọc (chỉ thao tác được trong bộ lọc)
    // closeFilter.addEventListener("click", closeFilterBox);
    // overlay.addEventListener("click", closeFilterBox);
});

document.addEventListener("DOMContentLoaded", function () {
    const sortToggle = document.getElementById("sortToggle"); // Nút SẮP XẾP
    const sortOptions = document.getElementById("sortOptions"); // Menu sắp xếp
    const sortText = document.getElementById("sortText"); // Nội dung hiển thị trên nút
    const sortBtn = document.getElementById("sortToggle");

    // Toggle menu khi nhấn vào nút SẮP XẾP
    sortToggle.addEventListener("click", function (event) {
        event.stopPropagation(); // Ngăn không cho event lan lên document
        sortOptions.classList.toggle("hidden");
        sortBtn.classList.toggle("active");
    });

    // Ẩn menu khi click ra ngoài
    document.addEventListener("click", function (event) {
        if (!sortOptions.contains(event.target) && !sortToggle.contains(event.target)) {
            sortOptions.classList.add("hidden");
        }
    });

    // Xử lý khi nhấn vào một tùy chọn
    document.querySelectorAll("#sortOptions button").forEach(button => {
        button.addEventListener("click", function () {
            const selectedText = this.innerText; // Lấy nội dung của nút được chọn
            sortText.innerText = selectedText; // Cập nhật nội dung của nút SẮP XẾP
            sortOptions.classList.add("hidden"); // Ẩn menu sau khi chọn
        });
    });
});


// Chuyển đổi giá từ "200.000đ" -> 200000
// function convertPrice(priceStr) {
//     return parseInt(priceStr.replace(/\./g, "").replace("đ", ""));
// }

// Hàm sắp xếp
// function sortProducts(order) {
//     products.sort((a, b) => {
//         let priceA = convertPrice(a.price);
//         let priceB = convertPrice(b.price);
//         return order === "asc" ? priceA - priceB : priceB - priceA;
//     });

//     renderProducts();
// }

// Hàm hiển thị sản phẩm
// function renderProducts() {
//     let productList = document.getElementById("product-list");
//     productList.innerHTML = "";
//     products.forEach(product => {
//         productList.innerHTML += `
//             <div class="product">
//                 <img src="${product.img}" alt="${product.name}">
//                 <h3>${product.name}</h3>
//                 <p>${product.price}</p>
//             </div>
//         `;
//     });
// }

// Hiển thị sản phẩm ban đầu
// renderProducts();

// document.getElementById("sortBtn").addEventListener("click", function(event) {
//     let sortOptions = document.getElementById("sortOptions");
//     sortOptions.classList.toggle("hidden");
    
    // Căn chỉnh vị trí menu
    // let rect = event.target.getBoundingClientRect();
    // sortOptions.style.top = rect.bottom + 10 +"px";
    // sortOptions.style.left = rect.left + 20+ "px";
    // sortOptions.style.left = rect.left + "px"; // Giữ vị trí ngang đúng với nút

// });




