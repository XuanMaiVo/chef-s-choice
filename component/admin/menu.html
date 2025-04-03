<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thực Đơn</title>
    <link rel="stylesheet" href="admin_menu.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    .container {
        display: flex;
        height: 100vh;
    }

    .sidebar {
        width: 250px;
        background: #FFD966;
        padding: 20px;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .sidebar img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: block;
        margin: 0 auto 10px;
    }

    .sidebar h3 {
        margin-top: 10px;
        margin-bottom: 10px;
        color: red;
    }

    .menu-item {
        width: 100%;
        padding: 15px;
        text-align: center;
        transition: background 0.3s;
        border: 1px solid black;
        margin-bottom: 20px;
    }

    .menu-item a {
        text-decoration: none;
        color: black;
        font-size: 18px;
        display: block;
    }

    .menu-item:hover {
        background: white;
    }

    .content {
        flex: 1;
        padding: 20px;
        background: #f4f4f4;
        margin-bottom: 20px;
        gap: 20px;

    }

    .btn {
        background: green;
        color: white;
        padding: 10px;
        border: none;
        cursor: pointer;
        margin-right: 10px;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
        /* Đổ bóng nhẹ */
        transition: box-shadow 0.3s ease-in-out;
        margin-top: 10px;
    }

    .sort-btn {
        background: white;
        border: none;
        padding: 10px;
        cursor: pointer;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
        /* Đổ bóng nhẹ */
        transition: box-shadow 0.3s ease-in-out;
        margin-right: 20px;
        margin-top: 10px;
        margin-left: 30px;
    }

    .menu-container {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        margin-top: 20px;
        margin-left: 30px;
    }

    .menu-column {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 20px;

    }

    .menu-column1 {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: 134px;

    }

    .menu-header {
        background: yellow;
        padding: 10px;
        font-weight: bold;
        text-align: center;
        border: 1px solid black;
        width: 500px;

    }

    .menu-header1 {
        background: yellow;
        padding: 10px;
        font-weight: bold;
        text-align: center;
        border: 1px solid black;
        width: 134px;

    }

    .menu-item-box {
        background: #f9f6d8;
        padding: 15px;
        border: 1px solid black;
        text-align: center;

    }

    .menu-item-box1 {
        background: #f9f6d8;
        padding: 15px;
        border: 1px solid black;
        text-align: center;
        width: 134px;
    }

    .actions {
        display: flex;
        justify-content: center;
        gap: 10px;
        width: 134px;
    }

    .actions button {
        background: none;
        border: none;
        cursor: pointer;
        font-size: 12px;
        box-shadow: gray;
    }

    /* ========== MODAL OVERLAY ========== */
    /* Nền mờ & làm mờ background */
    .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: none;
        /* Ẩn mặc định */
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(3px);
        /* Làm mờ nền */
        background-color: rgba(0, 0, 0, 0.3);
        /* Phủ lớp mờ tối nhẹ */
        z-index: 9999;
    }

    .modal-content {
        background: #fff;
        width: 600px;
        padding: 20px;
        border: 2px solid #ccc;
        border-radius: 5px;
        position: relative;
    }

    /* ========== FORM BÊN TRONG MODAL ========== */
    .modal-header {
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .modal-body {
        display: flex;
        gap: 20px;
    }

    /* Bên trái (Link, Tên món ăn, Nguyên liệu) */
    .left-col {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .left-col input,
    .left-col textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
    }

    /* Bên phải (Các bước thực hiện) */
    .right-col {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .right-col textarea {
        width: 100%;
        height: 120px;
        padding: 8px;
        border: 1px solid #ccc;
    }

    .modal-footer {
        text-align: center;
        margin-top: 20px;
    }

    .modal-footer button {
        background: green;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }

    /* Nút đóng modal ở góc (nếu cần) */
    .close-modal-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
    }

    .blur {
        filter: blur(3px);
    }

    .container.blur {
        filter: blur(3px);
    }

    .confirm-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        backdrop-filter: blur(3px);
        /* Làm mờ nền phía sau */
        background-color: rgba(0, 0, 0, 0.3);
        /* Lớp phủ tối */
        z-index: 99999;
        display: none;
        /* Ẩn mặc định */
        align-items: center;
        justify-content: center;
    }

    .confirm-modal-content {
        background: #fff;
        width: 400px;
        padding: 20px;
        border-radius: 5px;
        text-align: center;
        position: relative;
    }

    .confirm-modal-content h2 {
        margin-bottom: 20px;
    }

    .confirm-buttons {
        display: flex;
        justify-content: center;
        gap: 10px;
    }
</style>

<body>
    <div class="container">
        <div class="sidebar">
            <img src="images.jpg" alt="Profile Image">
            <h3>Ông sếp khó tính</h3>
            <div class="menu-item"><a href="#">Dashboard</a></div>
            <div class="menu-item"><a href="#">Sản phẩm</a></div>
            <div class="menu-item"><a href="#">Thực đơn</a></div>
            <div class="menu-item"><a href="#">Đơn hàng</a></div>
            <div class="menu-item"><a href="#">Khách hàng</a></div>
        </div>

        <div class="content">
            <h2>Thực đơn</h2>
            <button class="sort-btn">⇅ Sắp xếp</button>
            <button class="btn" id="openModalBtn">+ Thêm bài viết</button>
            <button class="btn" id="openTrashBtn" style="background: gray;">THÙNG RÁC</button>

            <div class="menu-container">
                <div class="menu-column">
                    <div class="menu-header">Video</div>
                    <div class="menu-item-box"></div>
                    <div class="menu-item-box"></div>
                    <div class="menu-item-box"></div>
                    <div class="menu-item-box"></div>
                </div>
                <div class="menu-column">
                    <div class="menu-header">Tên món ăn</div>
                    <div class="menu-item-box"></div>
                    <div class="menu-item-box"></div>
                    <div class="menu-item-box"></div>
                    <div class="menu-item-box"></div>
                </div>
                <div class="menu-column1">
                    <div class="menu-header1">Tác vụ</div>
                    <div class="menu-item-box1"></div>
                    <div class="menu-item-box1"></div>
                    <div class="menu-item-box1"></div>
                    <div class="menu-item-box1"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== MODAL THÊM/SỬA MÓN ĂN ========== -->
    <div class="modal" id="addPostModal">
        <div class="modal-content">
            <button class="close-modal-btn" id="closeModalBtn">&times;</button>
            <div class="modal-header" id="modalTitle">THÔNG TIN MÓN ĂN</div>

            <div class="modal-body">
                <!-- Bên trái -->
                <div class="left-col">
                    <input type="text" placeholder="Link Youtube" id="youtubeInput">
                    <input type="text" placeholder="Tên món ăn" id="dishNameInput">

                    <label>NGUYÊN LIỆU</label>
                    <div class="ingredient-container" id="ingredientContainer"></div>
                    <a href="#" style="color: red; font-size:14px; text-decoration: underline; margin-top:5px;"
                        id="addIngredientBtn">+ Nguyên liệu</a>
                </div>

                <!-- Bên phải -->
                <div class="right-col">
                    <label>CÁC BƯỚC THỰC HIỆN</label>
                    <textarea placeholder="Mô tả cách làm..." id="stepsTextarea"></textarea>
                </div>
            </div>

            <div class="modal-footer">
                <button id="saveBtn">LƯU</button>
                <button id="cancelBtn"
                    style="background: red; color: #fff; padding: 10px 20px; margin-left: 10px;">HỦY</button>
            </div>
        </div>
    </div>

    <!-- ========== MODAL THÙNG RÁC ========== -->
    <div class="modal" id="trashModal">
        <div class="modal-content">
            <button class="close-modal-btn" id="closeTrashBtn">&times;</button>
            <div class="modal-header">THÙNG RÁC</div>
            <div class="modal-body" id="trashList" style="max-height:300px; overflow:auto;">
                <!-- JS sẽ render các món đã xóa ở đây -->
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // ========== Biến dùng chung ==========
            let isEditing = false;
            let currentEditItem = null;
            let trashData = []; // Mảng chứa các món đã xóa
            let ingredientIndex = 1; // Để auto-tăng tên nguyên liệu

            // Tham chiếu DOM
            const openModalBtn = document.getElementById('openModalBtn');
            const closeModalBtn = document.getElementById('closeModalBtn');
            const addPostModal = document.getElementById('addPostModal');
            const saveBtn = document.getElementById('saveBtn');
            const cancelBtn = document.getElementById('cancelBtn');
            const modalTitle = document.getElementById('modalTitle');

            const youtubeInput = document.getElementById('youtubeInput');
            const dishNameInput = document.getElementById('dishNameInput');
            const stepsTextarea = document.getElementById('stepsTextarea');

            const addIngredientBtn = document.getElementById('addIngredientBtn');
            const ingredientContainer = document.getElementById('ingredientContainer');

            // Thùng rác
            const trashModal = document.getElementById('trashModal');
            const openTrashBtn = document.getElementById('openTrashBtn');
            const closeTrashBtn = document.getElementById('closeTrashBtn');
            const trashList = document.getElementById('trashList');

            // ========== Xử lý thêm nguyên liệu ==========
            addIngredientBtn.addEventListener('click', (e) => {
                e.preventDefault();
                addIngredient();
            });

            function addIngredient() {
                // Tạo 1 div chứa input + nút xóa
                const ingredientItem = document.createElement('div');
                ingredientItem.classList.add('ingredient-item');
                ingredientItem.style.marginBottom = '10px';

                // Tạo input
                const input = document.createElement('input');
                input.type = 'text';
                input.value = `NGUYÊN LIỆU ${ingredientIndex++}`;
                input.style.width = '80%';
                input.style.padding = '5px';
                input.style.marginRight = '5px';

                // Tạo nút xóa
                const removeBtn = document.createElement('button');
                removeBtn.textContent = '-';
                removeBtn.style.cursor = 'pointer';
                removeBtn.style.padding = '5px 10px';

                // Sự kiện xóa
                removeBtn.addEventListener('click', () => {
                    ingredientContainer.removeChild(ingredientItem);
                });

                ingredientItem.appendChild(input);
                ingredientItem.appendChild(removeBtn);
                ingredientContainer.appendChild(ingredientItem);
            }

            // ========== Mở / Đóng modal Thêm/Sửa ==========
            openModalBtn.addEventListener('click', () => {
                isEditing = false;
                currentEditItem = null;

                modalTitle.innerText = 'THÔNG TIN MÓN ĂN';
                saveBtn.innerText = 'LƯU';

                // Xóa trắng các ô
                youtubeInput.value = '';
                dishNameInput.value = '';
                stepsTextarea.value = '';
                ingredientContainer.innerHTML = '';
                ingredientIndex = 1;

                addPostModal.style.display = 'flex';
            });

            closeModalBtn.addEventListener('click', () => {
                addPostModal.style.display = 'none';
            });

            cancelBtn.addEventListener('click', () => {
                addPostModal.style.display = 'none';
            });

            // ========== Lưu / Sửa ==========
            saveBtn.addEventListener('click', () => {
                const linkVal = youtubeInput.value.trim();
                const nameVal = dishNameInput.value.trim();
                const stepsVal = stepsTextarea.value.trim();

                if (!linkVal || !nameVal) {
                    alert('Vui lòng nhập đủ thông tin (Link, Tên món)!');
                    return;
                }

                // Thu thập nguyên liệu (nếu muốn lưu)
                const ingredients = [];
                ingredientContainer.querySelectorAll('input').forEach(inp => {
                    ingredients.push(inp.value);
                });

                if (isEditing && currentEditItem) {
                    // Sửa
                    currentEditItem.videoLink.href = linkVal;
                    currentEditItem.videoLink.innerText = linkVal;
                    currentEditItem.nameBox.innerText = nameVal;
                    // Lưu steps, ingredients,... vào object (nếu muốn hiển thị đâu đó)
                    currentEditItem.steps = stepsVal;
                    currentEditItem.ingredients = ingredients;

                    currentEditItem = null;
                    isEditing = false;
                    saveBtn.innerText = 'LƯU';
                } else {
                    // Thêm mới
                    addMenuItem(nameVal, linkVal, stepsVal, ingredients);
                }

                addPostModal.style.display = 'none';
            });

            // ========== Hàm Thêm Món Mới ==========
            function addMenuItem(name, link, steps, ingredients) {
                const videoColumn = document.querySelector('.menu-column');
                const nameColumn = document.querySelectorAll('.menu-column')[1];
                const actionColumn = document.querySelector('.menu-column1');

                // Tạo ô video
                const videoBox = document.createElement('div');
                videoBox.classList.add('menu-item-box');
                const videoLink = document.createElement('a');
                videoLink.href = link;
                videoLink.target = '_blank';
                videoLink.innerText = link;
                videoBox.appendChild(videoLink);
                videoColumn.insertBefore(videoBox, videoColumn.children[1]);

                // Tạo ô tên món
                const nameBox = document.createElement('div');
                nameBox.classList.add('menu-item-box');
                nameBox.innerText = name;
                nameColumn.insertBefore(nameBox, nameColumn.children[1]);

                // Tạo ô tác vụ
                const actionBox = document.createElement('div');
                actionBox.classList.add('menu-item-box', 'actions');

                // Nút chỉnh sửa
                const editBtn = document.createElement('button');
                editBtn.innerText = '✏️';
                editBtn.addEventListener('click', () => {
                    isEditing = true;
                    currentEditItem = {
                        videoBox, videoLink, nameBox, actionBox,
                        steps, ingredients
                    };

                    modalTitle.innerText = 'SỬA MÓN ĂN';
                    saveBtn.innerText = 'SỬA';

                    // Điền dữ liệu cũ
                    youtubeInput.value = videoLink.href;
                    dishNameInput.value = nameBox.innerText;
                    stepsTextarea.value = steps || '';

                    // Xóa cũ + nạp lại ingredient
                    ingredientContainer.innerHTML = '';
                    ingredientIndex = 1;
                    if (ingredients && ingredients.length > 0) {
                        ingredients.forEach(ing => {
                            const ingredientItem = document.createElement('div');
                            ingredientItem.classList.add('ingredient-item');
                            ingredientItem.style.marginBottom = '10px';

                            const input = document.createElement('input');
                            input.type = 'text';
                            input.value = ing;
                            input.style.width = '80%';
                            input.style.padding = '5px';
                            input.style.marginRight = '5px';

                            const removeBtn = document.createElement('button');
                            removeBtn.textContent = '-';
                            removeBtn.style.cursor = 'pointer';
                            removeBtn.style.padding = '5px 10px';
                            removeBtn.addEventListener('click', () => {
                                ingredientContainer.removeChild(ingredientItem);
                            });

                            ingredientItem.appendChild(input);
                            ingredientItem.appendChild(removeBtn);
                            ingredientContainer.appendChild(ingredientItem);
                            ingredientIndex++;
                        });
                    }

                    // Hiển thị modal
                    addPostModal.style.display = 'flex';
                });

                // Nút xóa → thùng rác
                const deleteBtn = document.createElement('button');
                deleteBtn.innerText = '🗑️';
                deleteBtn.addEventListener('click', () => {
                    // Lưu vào trashData
                    trashData.push({
                        name: name,
                        link: link,
                        steps: steps,
                        ingredients: ingredients
                    });
                    // Xóa khỏi giao diện
                    videoBox.remove();
                    nameBox.remove();
                    actionBox.remove();
                });

                actionBox.appendChild(editBtn);
                actionBox.appendChild(deleteBtn);
                actionColumn.insertBefore(actionBox, actionColumn.children[1]);
            }

            // ========== Thùng Rác ==========
            openTrashBtn.addEventListener('click', () => {
                trashModal.style.display = 'flex';
                renderTrashList();
            });

            closeTrashBtn.addEventListener('click', () => {
                trashModal.style.display = 'none';
            });

            function renderTrashList() {
                trashList.innerHTML = '';
                if (trashData.length === 0) {
                    trashList.innerHTML = '<p>Thùng rác trống</p>';
                    return;
                }

                trashData.forEach((item, index) => {
                    // item: { name, link, steps, ingredients }
                    const row = document.createElement('div');
                    row.style.border = '1px solid #ccc';
                    row.style.padding = '10px';
                    row.style.marginBottom = '10px';

                    // Thông tin món
                    const info = document.createElement('p');
                    info.innerText = `Món: ${item.name}\nLink: ${item.link}`;
                    row.appendChild(info);

                    // Nút khôi phục
                    const restoreBtn = document.createElement('button');
                    restoreBtn.innerText = 'Khôi phục';
                    restoreBtn.style.marginRight = '10px';
                    restoreBtn.addEventListener('click', () => {
                        // Thêm lại vào giao diện
                        addMenuItem(item.name, item.link, item.steps, item.ingredients);
                        // Xóa khỏi trashData
                        trashData.splice(index, 1);
                        renderTrashList();
                    });
                    row.appendChild(restoreBtn);

                    // Nút xóa hẳn
                    const deleteForeverBtn = document.createElement('button');
                    deleteForeverBtn.innerText = 'Xóa hẳn';
                    deleteForeverBtn.style.background = 'red';
                    deleteForeverBtn.style.color = '#fff';
                    deleteForeverBtn.addEventListener('click', () => {
                        trashData.splice(index, 1);
                        renderTrashList();
                    });
                    row.appendChild(deleteForeverBtn);

                    trashList.appendChild(row);
                });
            }

            // Xóa các hàng trống ban đầu
            document.querySelectorAll('.menu-item-box, .menu-item-box1').forEach(box => box.innerHTML = '');
        });
        // Mảng toàn cục lưu danh sách món ăn
        let menuItems = [];

        // Hàm lưu vào localStorage
        function saveMenuToLocalStorage() {
            localStorage.setItem('menuItems', JSON.stringify(menuItems));
        }

        // Hàm load dữ liệu từ localStorage
        function loadMenuFromLocalStorage() {
            const storedData = localStorage.getItem('menuItems');
            if (storedData) {
                menuItems = JSON.parse(storedData);
                // Hiển thị các món ăn đã lưu lên giao diện
                menuItems.forEach(item => {
                    addMenuItemToDOM(item);
                });
            }
        }

        // Ví dụ hàm thêm món ăn mới (cập nhật giao diện và mảng)
        function addMenuItem(name, link, steps, ingredients) {
            // Tạo món ăn mới trong mảng
            const newItem = { name, link, steps, ingredients };
            menuItems.push(newItem);
            saveMenuToLocalStorage(); // Lưu lại sau khi thêm

            // Hiển thị món ăn trên giao diện
            addMenuItemToDOM(newItem);
        }

        // Hàm hiển thị món ăn lên giao diện (ví dụ đơn giản)
        function addMenuItemToDOM(item) {
            // Giả sử bạn có các cột đã được định nghĩa:
            const videoColumn = document.querySelector('.menu-column');
            const nameColumn = document.querySelectorAll('.menu-column')[1];
            const actionColumn = document.querySelector('.menu-column1');

            // Tạo phần tử hiển thị video
            const videoBox = document.createElement('div');
            videoBox.classList.add('menu-item-box');
            const videoLink = document.createElement('a');
            videoLink.href = item.link;
            videoLink.target = '_blank';
            videoLink.innerText = item.link;
            videoBox.appendChild(videoLink);
            videoColumn.insertBefore(videoBox, videoColumn.children[1]);

            // Tạo phần tử hiển thị tên món ăn
            const nameBox = document.createElement('div');
            nameBox.classList.add('menu-item-box');
            nameBox.innerText = item.name;
            nameColumn.insertBefore(nameBox, nameColumn.children[1]);

            // Tạo phần tử tác vụ (ví dụ nút xóa, chỉnh sửa, v.v.)
            const actionBox = document.createElement('div');
            actionBox.classList.add('menu-item-box', 'actions');
            // ... thêm các nút vào actionBox theo ý muốn
            actionColumn.insertBefore(actionBox, actionColumn.children[1]);
        }

        // Khi trang được tải
        document.addEventListener('DOMContentLoaded', () => {
            loadMenuFromLocalStorage();
        });


    </script>
</body>

</html>