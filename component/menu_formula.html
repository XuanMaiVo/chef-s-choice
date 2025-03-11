<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thực đơn</title>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <div class="logo"><img src="images/chef's_choice_logo.png" alt="Chef's Choice"></div>
        <div class="search-bar">
            <input type="text" placeholder="TÌM KIẾM SẢN PHẨM...">
            <button>🔍</button>
        </div>
        <div class="auth-buttons">
            <button class="register">ĐĂNG KÍ</button>
            <button class="login">ĐĂNG NHẬP</button>
            <button class="cart-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="57" background-color="white" display="flex"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M17 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2M1 2v2h2l3.6 7.59l-1.36 2.45c-.15.28-.24.61-.24.96a2 2 0 0 0 2 2h12v-2H7.42a.25.25 0 0 1-.25-.25q0-.075.03-.12L8.1 13h7.45c.75 0 1.41-.42 1.75-1.03l3.58-6.47c.07-.16.12-.33.12-.5a1 1 0 0 0-1-1H5.21l-.94-2M7 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2" />
                </svg>
            </button>
        </div>
    </header>

    <nav>
        <button>Trang chủ</button>
        <div class="dropdown">
            <button class="dropdown-btn">Thực đơn <span>▼</span></button>
            <ul class="dropdown-menu">
                <li data-category="all">Danh mục thực đơn</li>
                <li data-category="suggestions" class="highlight">Món ngon gợi ý</li>
                <li data-category="favorites">Món bạn yêu thích</li>
            </ul>
        </div>
        <button>Gia vị bạn cần</button>
        <button>Dụng cụ nhà bếp</button>
    </nav>
    <section class="banner1">
        <img src="images/bannerfooter.png" alt="Banner footer">
    </section>

    <section class="trending">
        <h2 id="category-title">DANH MỤC THỰC ĐƠN</h2>
        <div class="filter">
            <div class="left-buttons">
                <button class="active1" data-category="all">Tất cả món ăn</button>
                <button data-category="suggestions">Món ngon gợi ý</button>
                <button data-category="favorites">Món bạn yêu thích</button>
            </div>
            <div class="filter-dropdown">
                <button class="filter-btn">Bộ lọc</button>
                </button>
                <div class="filter-menu">
                    <ul>
                        <li class="active" data-category="mon-chien">Món chiên</li>
                        <li data-category="mon-xao">Món xào</li>
                        <li data-category="mon-lau">Món lẩu</li>
                        <li data-category="mon-nuong">Món nướng</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="product" id="product-list"></div>
        <div class="pagination" id="pagination"></div>
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <h2>Chef's Choice</h2>
            </div>
            <div class="footer-text">
                <p>2025 Chef's Choice VN by MTHP Group</p>
            </div>
            <div class="social-icons">
                <img src="images/tiktok.png" alt="TikTok">
                <img src="images/facebook.png" alt="Facebook">
                <img src="images/zalo.png" alt="Zalo">
                <img src="images/youtube.png" alt="YouTube">
            </div>
        </div>
    </footer>

    <script>
        const allItems = [
            { img: 'images/banhxeomientrung.png', name: 'Bánh xèo miền Trung' },
            { img: 'images/banhxeomientrung.png', name: 'Bánh xèo miền Trung' },
            { img: 'images/banhxeomientrung.png', name: 'Bánh xèo miền Trung' },
            { img: 'images/banhxeomientrung.png', name: 'Bánh xèo miền Trung' },
            { img: 'images/banhxeomientrung.png', name: 'Bánh xèo miền Trung' },
            { img: 'images/banhxeomientrung.png', name: 'Bánh xèo miền Trung' }
        ];
        const suggestions = [
            { img: 'images/banhxeomientrung.png', name: 'Bánh xèo miền Trung' },
            { img: 'images/banhxeomientrung.png', name: 'Bánh xèo miền Trung' },
        ];
        const favorites = [
            { img: 'images/banhxeomientrung.png', name: 'Bánh xèo miền Trung' },
            { img: 'images/banhxeomientrung.png', name: 'Bánh xèo miền Trung' },
            { img: 'images/banhxeomientrung.png', name: 'Bánh xèo miền Trung' }
        ];

        const itemsPerPage = 9;
        let currentPage = 1;
        let currentCategory = 'all'; // Danh mục hiện tại (tất cả món ăn mặc định)

        const productList = document.getElementById("product-list");
        const pagination = document.getElementById("pagination");
        const filterButtons = document.querySelectorAll(".filter button");
        const categoryTitle = document.getElementById("category-title");

        function renderPage(page, category) {
            const items = getItemsByCategory(category); // Lấy sản phẩm theo danh mục
            const totalPages = Math.ceil(items.length / itemsPerPage);
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const pageItems = items.slice(start, end);

            productList.innerHTML = "";
            pageItems.forEach(item => {
                const div = document.createElement("div");
                div.classList.add("item");
                div.innerHTML = `
                    <img src="${item.img}" alt="${item.name}">
                    <h3>${item.name}</h3>
                    <div class="button-group">
                        <button class="detail-btn">XEM CHI TIẾT</button>
                        <button class="save-btn">LƯU</button>
                    </div>
                `;
                productList.appendChild(div);
            });
            renderPagination(totalPages);
        }

        function getItemsByCategory(category) {
            switch (category) {
                case 'suggestions':
                    return suggestions;
                case 'favorites':
                    return favorites;
                default:
                    return allItems;
            }
        }

        // Hàm hiển thị phân trang với số trang liên tiếp
        function renderPagination(totalPages) {
            pagination.innerHTML = "";

            const prevBtn = document.createElement("button");
            prevBtn.innerHTML = "&laquo;";
            prevBtn.disabled = currentPage === 1;
            prevBtn.addEventListener("click", () => {
                if (currentPage > 1) {
                    currentPage--;
                    renderPage(currentPage, currentCategory);
                }
            });
            pagination.appendChild(prevBtn);

            // Hiển thị tối đa 3 trang liên tiếp
            const startPage = Math.max(1, currentPage - 1);
            const endPage = Math.min(totalPages, currentPage + 1);

            for (let i = startPage; i <= endPage; i++) {
                const pageBtn = document.createElement("button");
                pageBtn.textContent = i;
                pageBtn.classList.toggle("active", i === currentPage);
                pageBtn.addEventListener("click", () => {
                    currentPage = i;
                    renderPage(currentPage, currentCategory);
                });
                pagination.appendChild(pageBtn);
            }

            const nextBtn = document.createElement("button");
            nextBtn.innerHTML = "&raquo;";
            nextBtn.disabled = currentPage === totalPages;
            nextBtn.addEventListener("click", () => {
                if (currentPage < totalPages) {
                    currentPage++;
                    renderPage(currentPage, currentCategory);
                }
            });
            pagination.appendChild(nextBtn);
        }

        // Xử lý sự kiện khi nhấn vào các nút filter
        filterButtons.forEach(button => {
            button.addEventListener("click", () => {
                currentCategory = button.getAttribute("data-category");
                currentPage = 1;  // Khi thay đổi danh mục, quay lại trang 1
                renderPage(currentPage, currentCategory);

                // Cập nhật kiểu dáng cho nút đã chọn
                filterButtons.forEach(b => b.classList.remove("active"));
                button.classList.add("active");

                // Thay đổi tiêu đề <h2> theo danh mục đã chọn
                switch (currentCategory) {
                    case 'suggestions':
                        categoryTitle.textContent = "MÓN NGON GỢI Ý";
                        break;
                    case 'favorites':
                        categoryTitle.textContent = "MÓN BẠN YÊU THÍCH";
                        break;
                    default:
                        categoryTitle.textContent = "DANH MỤC THỰC ĐƠN";
                }
            });
        });

        // Khởi tạo trang đầu tiên khi tải trang
        renderPage(currentPage, currentCategory);

        document.addEventListener("DOMContentLoaded", function () {
            const dropdownBtn = document.querySelector(".dropdown-btn");
            const dropdownMenu = document.querySelector(".dropdown-menu");
            const menuItems = document.querySelectorAll(".dropdown-menu li"); // Các mục trong dropdown

            dropdownBtn.addEventListener("click", function (event) {
                event.stopPropagation();
                dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
            });

            document.addEventListener("click", function () {
                dropdownMenu.style.display = "none";
            });

            // Khi chọn mục trong menu dropdown
            menuItems.forEach(item => {
                item.addEventListener("click", function () {
                    const category = item.getAttribute("data-category");
                    currentCategory = category;
                    currentPage = 1; // Khi đổi danh mục, quay lại trang đầu tiên
                    renderPage(currentPage, currentCategory);

                    // Cập nhật tiêu đề danh mục
                    switch (currentCategory) {
                        case 'suggestions':
                            categoryTitle.textContent = "MÓN NGON GỢI Ý";
                            break;
                        case 'favorites':
                            categoryTitle.textContent = "MÓN BẠN YÊU THÍCH";
                            break;
                        default:
                            categoryTitle.textContent = "DANH MỤC THỰC ĐƠN";
                    }

                    dropdownMenu.style.display = "none"; // Đóng dropdown sau khi chọn
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            const filterBtn = document.querySelector(".filter-btn");
            const filterMenu = document.querySelector(".filter-menu");
            const filterItems = document.querySelectorAll(".filter-menu li");
            const categoryTitle = document.getElementById("category-title");
            const leftButtons = document.querySelectorAll(".left-buttons button");

            // Mở & đóng menu bộ lọc
            filterBtn.addEventListener("click", function (event) {
                event.stopPropagation();
                filterMenu.style.display = filterMenu.style.display === "block" ? "none" : "block";
            });

            // Ẩn menu khi click bên ngoài
            document.addEventListener("click", function () {
                filterMenu.style.display = "none";
            });

            // Xử lý khi chọn danh mục từ menu dropdown
            filterItems.forEach(item => {
                item.addEventListener("click", function () {
                    filterItems.forEach(i => i.classList.remove("active"));
                    item.classList.add("active");

                    const category = item.getAttribute("data-category");
                    categoryTitle.textContent = `DANH MỤC: ${item.textContent}`;
                    filterMenu.style.display = "none"; // Đóng menu
                    console.log("Chọn danh mục:", category);
                });
            });

            // Xử lý khi nhấn vào danh mục chính
            leftButtons.forEach(button => {
                button.addEventListener("click", function () {
                    leftButtons.forEach(b => b.classList.remove("active1"));
                    button.classList.add("active1");

                    const category = button.getAttribute("data-category");
                    categoryTitle.textContent = button.textContent.toUpperCase();
                    console.log("Danh mục chính:", category);
                });
            });
        });

    </script>

</body>

</html>