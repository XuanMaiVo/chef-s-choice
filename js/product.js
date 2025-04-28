document.addEventListener("DOMContentLoaded", function() {
    const addProductBtn = document.getElementById("btn-add-product");
    const productForm = document.getElementById("product-form");
    const closeFormBtn = document.querySelector(".close");
    let addBtn = document.querySelector(".add-btn");

    addProductBtn.addEventListener("click", function() {
        currentAction = "add";
        fetch('../../php/get_new_product_id.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById("product-id").value = data; 
            productForm.classList.remove("hidden");
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
    
    addBtn.addEventListener("click", function () {
        addBtn.classList.toggle("active"); 
    });

    closeFormBtn.addEventListener("click", function () {
        productForm.classList.add("hidden");
        addBtn.classList.remove("active");
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const imageUpload = document.getElementById("product-image");
    const imagePreview = document.getElementById("preview-image");
    const imageLabel = document.getElementById("image-label");
    const imageContainer = document.getElementById("image-container");

    imageContainer.addEventListener("click", function() {
        imageUpload.click();
    });

    imageUpload.addEventListener("change", function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = "block"; 
                imageLabel.style.display = "none"; 
            };
            reader.readAsDataURL(file);
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const dropdown = document.querySelector(".dropdown");
    const filterBtn = document.querySelector(".filter-btn");
    const dropdownMenu = document.querySelector(".dropdown-menu");
    const giaViTable = document.getElementById("table-gia-vi");
    const nhaBepTable = document.getElementById("table-nha-bep");

    if (dropdown && filterBtn && dropdownMenu && giaViTable && nhaBepTable) {
        giaViTable.style.display = "table";
        nhaBepTable.style.display = "table";

        filterBtn.addEventListener("click", function (event) {
            event.stopPropagation(); 
            dropdown.classList.toggle("active");
            filterBtn.classList.toggle("active");
        });

        dropdownMenu.children[0].addEventListener("click", function () {
            giaViTable.style.display = "table";
            nhaBepTable.style.display = "none";
            dropdown.classList.remove("active");
            filterBtn.classList.remove("active");
        });

        dropdownMenu.children[1].addEventListener("click", function () {
            giaViTable.style.display = "none";
            nhaBepTable.style.display = "table";
            dropdown.classList.remove("active");
            filterBtn.classList.remove("active");
        });

        dropdownMenu.children[2].addEventListener("click", function () {
            giaViTable.style.display = "table";
            nhaBepTable.style.display = "table";
            dropdown.classList.remove("active");
            filterBtn.classList.remove("active");
        });

        document.addEventListener("click", function (event) {
            if (!dropdown.contains(event.target) && !filterBtn.contains(event.target)) {
                dropdown.classList.remove("active");
                filterBtn.classList.remove("active");
            }
        });
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const editButtons = document.querySelectorAll(".edit-btn");
    const editProductForm = document.getElementById("edit-product-form");
    const closeEditForm = document.querySelector(".close-edit");

    editButtons.forEach(button => {
        button.addEventListener("click", function () {
            const row = this.closest("tr");
            const productId = row.getAttribute("data-id");

            fetch(`../../php/get_product_detail.php?id=${productId}`)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    document.getElementById("edit-product-id").value = data.maSP;
                    document.getElementById("edit-product-name").value = data.tenSP;
                    document.getElementById("edit-product-quantity").value = data.soluong;
                    document.getElementById("edit-product-type").value = data.maLSP;
                    document.getElementById("edit-product-price").value = data.gia;
                    document.getElementById("edit-product-desc").value = data.mota;
                    document.getElementById("edit-product-image").value = "";


                    if (data.hinhanh) {
                        const previewImage = document.getElementById("edit-preview-image");
                        previewImage.src = '../../assets/images/' + data.hinhanh;
                        previewImage.style.display = "block";   
                        document.getElementById("edit-image-label").style.display = "none";
                    }
                    

                    editProductForm.classList.remove("hidden");
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    });

    closeEditForm.addEventListener("click", function () {
        editProductForm.classList.add("hidden");
    });
    
});

document.addEventListener("DOMContentLoaded", function() {
    const editImageUpload = document.getElementById("edit-product-image");
    const editImagePreview = document.getElementById("edit-preview-image");
    const editImageLabel = document.getElementById("edit-image-label");
    const editImageContainer = document.getElementById("edit-image-container");

    editImageContainer.addEventListener("click", function() {
        editImageUpload.click();
    });

    editImageUpload.addEventListener("change", function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                editImagePreview.src = e.target.result;
                editImagePreview.style.display = "block"; 
                editImageLabel.style.display = "none"; 
            };
            reader.readAsDataURL(file);
        }
    });
});


document.addEventListener("DOMContentLoaded", function() {
    const updateProductBtn = document.getElementById("update-product");

    updateProductBtn.addEventListener("click", function () {
        const id = document.getElementById("edit-product-id").value.trim();
        const name = document.getElementById("edit-product-name").value.trim();
        const quantity = document.getElementById("edit-product-quantity").value.trim();
        const type = document.getElementById("edit-product-type").value.trim();
        const price = document.getElementById("edit-product-price").value.trim();
        const desc = document.getElementById("edit-product-desc").value.trim();
        const imageInput = document.getElementById("edit-product-image");
        const imageFile = imageInput.files[0];
    
        const formData = new FormData();
        formData.append('id', id);
        formData.append('name', name);
        formData.append('quantity', quantity);
        formData.append('type', type);
        formData.append('price', price);
        formData.append('desc', desc);
        if (imageFile) {
            formData.append('image', imageFile);
        }
    
        fetch('../../php/update_product.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if (data.trim() === "success") {
                alert("Cập nhật sản phẩm thành công!");
                location.reload();
            } else {
                alert("Lỗi: " + data);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});   

document.addEventListener("DOMContentLoaded", function() {
    const saveProductBtn = document.getElementById("save-product");

    saveProductBtn.addEventListener("click", function () {
        const id = document.getElementById("product-id").value.trim();
        const name = document.getElementById("product-name").value.trim();
        const quantity = document.getElementById("product-quantity").value.trim();
        const type = document.getElementById("product-type").value.trim();
        const price = document.getElementById("product-price").value.trim();
        const desc = document.getElementById("product-desc").value.trim();
        const imageInput = document.getElementById("product-image");
        const imageFile = imageInput.files[0];

        if (!name || !type || !price || !imageFile) {
            alert("Vui lòng nhập đầy đủ thông tin sản phẩm!");
            return;
        }

        
        const formData = new FormData();
        formData.append('id', id);
        formData.append('name', name);
        formData.append('quantity',quantity);
        formData.append('type', type);
        formData.append('price', price);
        formData.append('desc', desc);
        formData.append('image', imageFile);

        const url = currentAction === "add" ? '../../php/add_product.php' : '../../php/update_product.php';

        fetch(url, {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if (data === "success") {
                alert("Thêm sản phẩm thành công!");
                location.reload(); 
            } else {
                alert("Lỗi: " + data);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const deleteButtons = document.querySelectorAll(".delete-btn");
    const confirmDialog = document.getElementById("confirm-dialog");
    const confirmMessage = document.getElementById("confirm-message");
    const confirmAgree = document.getElementById("confirm-agree");
    const confirmCancel = document.getElementById("confirm-cancel");

    let selectedRow = null; 

    deleteButtons.forEach((button) => {
        button.addEventListener("click", function () {
            selectedRow = this.closest("tr"); 
            const table = selectedRow.closest("table");

            let productType = "sản phẩm này";
            if (table.id === "table-gia-vi") {
                productType = "sản phẩm gia vị này";
            } else if (table.id === "table-nha-bep") {
                productType = "sản phẩm dụng cụ nhà bếp này";
            }

            confirmMessage.textContent = `Bạn có chắc muốn xóa ${productType}?`;

            confirmDialog.style.display = "block";
        });
    });

    confirmAgree.addEventListener("click", function () {
        if (selectedRow) {
            selectedRow.remove(); 
        }
        confirmDialog.style.display = "none"; 
    });

    confirmCancel.addEventListener("click", function () {
        confirmDialog.style.display = "none"; 
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("search-input");
    const searchBtn = document.getElementById("search-btn");

    function searchProducts() {
        const searchTerm = searchInput.value.trim().toLowerCase();

        const rowsGiaVi = document.querySelectorAll("#table-gia-vi tbody tr");
        const rowsNhaBep = document.querySelectorAll("#table-nha-bep tbody tr");

        rowsGiaVi.forEach(row => {
            const tenSanPham = row.cells[1].textContent.toLowerCase();
            if (tenSanPham.includes(searchTerm) ) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });

        rowsNhaBep.forEach(row => {
            const tenSanPham = row.cells[1].textContent.toLowerCase();
            if (tenSanPham.includes(searchTerm) ) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    }

    searchBtn.addEventListener("click", function () {
        searchProducts();
    });

    searchInput.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            event.preventDefault(); 
            searchProducts();
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const deleteButtons = document.querySelectorAll(".delete-btn");
    const confirmDialog = document.getElementById("confirm-dialog");
    const confirmMessage = document.getElementById("confirm-message");
    const confirmAgree = document.getElementById("confirm-agree");
    const confirmCancel = document.getElementById("confirm-cancel");

    let selectedRow = null; 
    let selectedProductId = null;

    deleteButtons.forEach((button) => {
        button.addEventListener("click", function () {
            selectedRow = this.closest("tr"); 
            selectedProductId = selectedRow.getAttribute("data-id"); 

            confirmMessage.textContent = `Bạn có chắc muốn xóa sản phẩm này không?`;
            confirmDialog.style.display = "block";
        });
    });

    confirmAgree.addEventListener("click", function () {
        if (selectedRow && selectedProductId) {
            fetch('../../php/delete_product.php', {
                method: 'POST',
                body: new URLSearchParams({
                    id: selectedProductId
                })
            })
            .then(response => response.text())
            .then(data => {
                if (data.trim() === "success") {
                    alert("Xóa sản phẩm thành công!");
                    selectedRow.remove(); 
                } else {
                    alert("Lỗi xóa: " + data);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
        confirmDialog.style.display = "none"; 
    });

    confirmCancel.addEventListener("click", function () {
        confirmDialog.style.display = "none"; 
    });
});








