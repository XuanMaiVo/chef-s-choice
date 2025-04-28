document.addEventListener("DOMContentLoaded", function () {
    let quantityValue, decreaseBtn, increaseBtn;
    let selectedQuantity = 1;
    let stock = 0;
    let currentPage = 1;
    const itemsPerPage = 12;

    function attachOpenModalEvents() {
        document.querySelectorAll(".openModalBtn").forEach(button => {
            button.addEventListener("click", function () {
                const imgSrc = this.getAttribute("data-img");
                const name = this.getAttribute("data-name");
                const price = this.getAttribute("data-price");
                const mota = this.getAttribute("data-mota");
                const masp = this.getAttribute("data-masp");
                stock = parseInt(this.getAttribute("data-soluong"));

                document.getElementById("modalImage").src = imgSrc;
                document.getElementById("modalProductName").innerText = name;
                document.getElementById("modalProductCode").innerText = masp;
                document.getElementById("modalProductPrice").innerText = price;
                document.getElementById("modalProductStock").innerText = "Số lượng còn lại: " + stock;

                const descriptionList = document.getElementById("modalProductDescription");
                descriptionList.innerHTML = '';
                mota.split('\n').forEach(line => {
                    if (line.trim() !== '') {
                        const li = document.createElement("li");
                        li.textContent = line.trim();
                        descriptionList.appendChild(li);
                    }
                });

                selectedQuantity = 1;
                quantityValue.innerText = selectedQuantity;

                document.getElementById("productModal").style.display = "flex";
            });
        });
    }

    function setupQuantityButtons() {
        decreaseBtn.addEventListener("click", function () {
            if (selectedQuantity > 1) {
                selectedQuantity--;
                quantityValue.innerText = selectedQuantity;
            }
        });

        increaseBtn.addEventListener("click", function () {
            if (selectedQuantity < stock) {
                selectedQuantity++;
                quantityValue.innerText = selectedQuantity;
            }
        });
    }

    function performFilterAndSort(sortOrder = '') {
        let selectedLoaiBtn = document.querySelector('.category-buttons button.active');
        let selectedLoai = selectedLoaiBtn ? selectedLoaiBtn.value : "";
        document.getElementById("overlay").style.display = "none"; 
        document.body.style.overflow = "auto"; 

        let selectedPrices = [];
        document.querySelectorAll('input[name="price"]:checked').forEach(checkbox => {
            selectedPrices.push(checkbox.value);
        });

        const data = new FormData();
        data.append('loai', selectedLoai);
        data.append('prices', JSON.stringify(selectedPrices));
        if (sortOrder) data.append('sort', sortOrder);

        fetch('/php/filter_spices.php', {
            method: 'POST',
            body: data
        })
        .then(response => response.text())
        .then(html => {
            document.getElementById("product-list").innerHTML = html;
            attachOpenModalEvents();
            renderProducts(currentPage);
            document.getElementById("filterBox").classList.remove("show");
            document.getElementById("openFilter").classList.remove("active");
        })
        .catch(error => console.error('Lỗi:', error));
    }

    function renderProducts(page) {
        const productItems = Array.from(document.querySelectorAll("#product-list .product-item"));
        const totalProducts = productItems.length;
        const totalPages = Math.ceil(totalProducts / itemsPerPage);

        productItems.forEach(item => item.style.display = "none");

        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;
        productItems.slice(start, end).forEach(item => item.style.display = "flex");

        const pageNumbers = document.getElementById("pageNumbers");
        pageNumbers.innerHTML = '';
        for (let i = 1; i <= totalPages; i++) {
            const btn = document.createElement("button");
            btn.textContent = i;
            btn.classList.add("page-btn");
            if (i === page) btn.classList.add("active");
            btn.addEventListener("click", function () {
                currentPage = i;
                renderProducts(currentPage);
            });
            pageNumbers.appendChild(btn);
        }

        document.getElementById("prevPage").disabled = (page === 1);
        document.getElementById("nextPage").disabled = (page === totalPages);
    }


    document.getElementById("openFilter").addEventListener("click", function () {
        document.getElementById("filterBox").classList.add("show");
        this.classList.toggle("active");
        document.getElementById("overlay").style.display = "block"; 
        document.body.style.overflow = "hidden"; 
    });

    document.getElementById("closeFilter").addEventListener("click", function () {
        document.getElementById("filterBox").classList.remove("show");
        document.getElementById("openFilter").classList.remove("active");
        document.getElementById("overlay").style.display = "none";    
        document.body.style.overflow = "auto";
    });

    document.querySelectorAll(".category-buttons button").forEach(button => {
        button.addEventListener("click", function () {
            document.querySelectorAll(".category-buttons button").forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");
        });
    });

    const sortToggle = document.getElementById("sortToggle");
    const sortOptions = document.getElementById("sortOptions");

    sortToggle.addEventListener("click", function (event) {
        event.stopPropagation();
        sortOptions.classList.toggle("show");
        sortToggle.classList.toggle("active");
        if (sortOptions.classList.contains("show")) {
            const rect = sortToggle.getBoundingClientRect();
            sortOptions.style.top = `${rect.bottom + window.scrollY + 10}px`;
            sortOptions.style.left = `${rect.left + window.scrollX-50}px`;
        }
    });

    document.addEventListener("click", function (event) {
        if (!sortOptions.contains(event.target) && !sortToggle.contains(event.target)) {
            sortOptions.classList.remove("show");
            sortToggle.classList.remove("active");
        }
    });

    document.querySelector(".filter-button").addEventListener("click", function (e) {
        e.preventDefault();
        performFilterAndSort();
    });

    document.querySelectorAll("#sortOptions button").forEach(sortBtn => {
        sortBtn.addEventListener("click", function () {
            const sortOrder = this.getAttribute("data-sort");
            performFilterAndSort(sortOrder);
            sortOptions.classList.remove("show");
            sortToggle.classList.remove("active");
        });
    });

    document.getElementById("add-to-cart").addEventListener("click", function () {
        alert(`Đã thêm ${selectedQuantity} sản phẩm vào giỏ hàng!`);
        document.getElementById("productModal").style.display = "none";
    });

    document.querySelector(".close").addEventListener("click", function () {
        document.getElementById("productModal").style.display = "none";
    });

    window.addEventListener("click", function (event) {
        if (event.target === document.getElementById("productModal")) {
            document.getElementById("productModal").style.display = "none";
        }
    });

    document.getElementById("prevPage").addEventListener("click", function () {
        if (currentPage > 1) {
            currentPage--;
            renderProducts(currentPage);
        }
    });

    document.getElementById("nextPage").addEventListener("click", function () {
        const productItems = Array.from(document.querySelectorAll("#product-list .product-item"));
        const totalPages = Math.ceil(productItems.length / itemsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            renderProducts(currentPage);
        }
    });

    quantityValue = document.getElementById("quantityValue");
    decreaseBtn = document.getElementById("decrease");
    increaseBtn = document.getElementById("increase");

    setupQuantityButtons();
    attachOpenModalEvents();
    renderProducts(currentPage);
});