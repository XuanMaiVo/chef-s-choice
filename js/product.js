document.addEventListener("DOMContentLoaded", function() {
    const addProductBtn = document.getElementById("btn-add-product");
    const productForm = document.getElementById("product-form");
    const closeFormBtn = document.querySelector(".close");
    let addBtn = document.querySelector(".add-btn");

    addProductBtn.addEventListener("click", function() {
        productForm.classList.remove("hidden");

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
    const productForm = document.getElementById("product-form");
    const closeForm = document.querySelector(".close");

    const productIdInput = document.getElementById("product-id");
    const productNameInput = document.getElementById("product-name");
    const productTypeInput = document.getElementById("product-type");
    const productPriceInput = document.getElementById("product-price");
    const productDescInput = document.getElementById("product-desc");
    const saveButton = document.getElementById("save-product");

    editButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const row = this.closest("tr");

            const productName = row.cells[1].textContent;
            const productPrice = row.cells[3].textContent.replace(/\./g, ""); 

            let productType = "Chọn loại sản phẩm"; 
            if (row.closest("#table-gia-vi")) {
                productType = "Gia vị";
            } else if (row.closest("#table-nha-bep")) {
                productType = "Dụng cụ nhà bếp";
            }

            productIdInput.value = "SP00001"; 
            productNameInput.value = productName;
            productTypeInput.value = productType; 
            productPriceInput.value = productPrice;
            productDescInput.value = ""; 

            productForm.classList.remove("hidden");

            // saveButton.textContent = "Cập nhật";
        });
    });

    closeForm.addEventListener("click", function () {
        productForm.classList.add("hidden");
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










