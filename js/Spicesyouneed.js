document.addEventListener("DOMContentLoaded", function () {
    const openFilter = document.getElementById("openFilter");
    const closeFilter = document.getElementById("closeFilter");
    const filterBox = document.getElementById("filterBox");
    const filterBtn = document.getElementById("openFilter");

    openFilter.addEventListener("click", function () {
        filterBox.classList.add("show");
        filterBtn.classList.toggle("active");
    });

    closeFilter.addEventListener("click", function () {
        filterBox.classList.remove("show");
        filterBtn.classList.remove("active"); 

    });
    
});

document.addEventListener("DOMContentLoaded", function () {
    const sortToggle = document.getElementById("sortToggle");
    const sortOptions = document.getElementById("sortOptions");
    const sortBtn = document.getElementById("sortToggle");


    if (sortToggle && sortOptions) {
        sortToggle.addEventListener("click", function (event) {
            event.stopPropagation(); 
            sortBtn.classList.toggle("active");
            sortOptions.classList.toggle("show"); 
        });

        document.addEventListener("click", function (event) {
            if (!sortOptions.contains(event.target) && !sortToggle.contains(event.target)) {
                sortBtn.classList.remove("active");
                sortOptions.classList.remove("show");
            }
        });
    } else {
        console.error("Không tìm thấy phần tử sortToggle hoặc sortOptions");
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const sortButton = document.getElementById("sortToggle");
    const sortOptions = document.getElementById("sortOptions");

    // Luôn đặt sortOptions ngay dưới nút sortToggle
    function positionSortOptions() {
        const rect = sortButton.getBoundingClientRect();
        sortOptions.style.top = `${rect.bottom +  window.scrollY+20}px`; 
        sortOptions.style.left = `${rect.left-50}px`; 
    }

    // Gọi khi load trang
    positionSortOptions();

    // Đảm bảo vị trí đúng khi resize màn hình
    window.addEventListener("resize", positionSortOptions);
});

document.addEventListener("DOMContentLoaded", function () {
    const products = [
        { id: 1, name: "Màu dầu điều", price: "200.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 2, name: "Sản phẩm 2", price: "350.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 3, name: "Sản phẩm 3", price: "500.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 4, name: "Sản phẩm 4", price: "150.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 5, name: "Sản phẩm 5", price: "180.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 6, name: "Sản phẩm 6", price: "230.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 7, name: "Sản phẩm 7", price: "400.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 8, name: "Sản phẩm 8", price: "220.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 9, name: "Sản phẩm 9", price: "200.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 10, name: "Sản phẩm 10", price: "350.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 11, name: "Sản phẩm 11", price: "500.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 12, name: "Sản phẩm 12", price: "150.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 13, name: "Sản phẩm 13", price: "180.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 14, name: "Sản phẩm 14", price: "230.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 15, name: "Sản phẩm 15", price: "400.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 16, name: "Sản phẩm 16", price: "220.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 1, name: "Màu dầu điều", price: "200.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 2, name: "Sản phẩm 2", price: "350.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 3, name: "Sản phẩm 3", price: "500.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 4, name: "Sản phẩm 4", price: "150.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 5, name: "Sản phẩm 5", price: "180.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 6, name: "Sản phẩm 6", price: "230.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 7, name: "Sản phẩm 7", price: "400.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 8, name: "Sản phẩm 8", price: "220.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 9, name: "Sản phẩm 9", price: "200.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 10, name: "Sản phẩm 10", price: "350.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 11, name: "Sản phẩm 11", price: "500.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 12, name: "Sản phẩm 12", price: "150.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 13, name: "Sản phẩm 13", price: "180.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 14, name: "Sản phẩm 14", price: "230.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 15, name: "Sản phẩm 15", price: "400.000đ", img: "../assets/images/mau_dau_dieu.png" },
        { id: 16, name: "Sản phẩm 16", price: "220.000đ", img: "../assets/images/mau_dau_dieu.png" },
    ];
    const itemsPerPage = 12;
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

    document.querySelector(".close").addEventListener("click", function () {
        document.getElementById("productModal").style.display = "none";
    });

    window.addEventListener("click", function (event) {
        if (event.target === document.getElementById("productModal")) {
            document.getElementById("productModal").style.display = "none";
        }
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

    updateUI();

});
