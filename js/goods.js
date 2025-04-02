document.addEventListener("DOMContentLoaded", function () {
    const orderList = document.querySelector(".order-list");
    const searchInput = document.querySelector(".goods-search__input");
    const sortButton = document.querySelector(".goods-sort");
    let sortCriteria = "id";
    const orders = [
        { id: "001", name: "Nguyen Van A", address: "123 Le Loi", status: "cho-xac-nhan" },
        { id: "002", name: "Tran Thi B", address: "456 Tran Phu", status: "dang-chuan-bi-hang" },
        { id: "003", name: "Pham Van C", address: "789 Nguyen Trai", status: "dang-giao-hang" },
        { id: "004", name: "Bui Van F", address: "678 Ly Thuong Kiet", status: "dang-chuan-bi-hang" },
        { id: "005", name: "Le Thi D", address: "234 Ba Trieu", status: "cho-xac-nhan" },
        { id: "006", name: "Nguyen Van E", address: "567 Hai Ba Trung", status: "da-thanh-toan" },
    ];

    // Lưu vào sessionStorage
    if (!sessionStorage.getItem("orders")) {
        sessionStorage.setItem("orders", JSON.stringify(orders));
    }

    function renderOrders() {
        orderList.innerHTML = "";
        const storedOrders = JSON.parse(sessionStorage.getItem("orders")) || [];
        storedOrders.forEach(order => {
            const orderElement = document.createElement("div");
            orderElement.classList.add("order-items");
            orderElement.innerHTML = `
                <div class="order-item order-id">${order.id}</div>
                <div class="order-item customer-name">${order.name}</div>
                <div class="order-item customer-address">${order.address}</div>
                <select class="order-status" data-id="${order.id}">
                    <option value="cho-xac-nhan" ${order.status === "cho-xac-nhan" ? "selected" : ""}>Chờ xác nhận</option>
                    <option value="dang-chuan-bi-hang" ${order.status === "dang-chuan-bi-hang" ? "selected" : ""}>Đang chuẩn bị</option>
                    <option value="dang-giao-hang" ${order.status === "dang-giao-hang" ? "selected" : ""}>Đang giao hàng</option>
                    <option value="da-thanh-toan" ${order.status === "da-thanh-toan" ? "selected" : ""}>Đã thanh toán</option>
                </select>
            `;
            orderList.appendChild(orderElement);
        });
    }

    // Cập nhật trạng thái đơn hàng
    orderList.addEventListener("change", function (event) {
        if (event.target.classList.contains("order-status")) {
            const orderId = event.target.getAttribute("data-id");
            const newStatus = event.target.value;
            let storedOrders = JSON.parse(sessionStorage.getItem("orders"));
            storedOrders = storedOrders.map(order => {
                if (order.id === orderId) {
                    order.status = newStatus;
                }
                return order;
            });
            sessionStorage.setItem("orders", JSON.stringify(storedOrders));
        }
    });

    // Tìm kiếm đơn hàng
    // searchInput.addEventListener("input", function () {
    //     const searchTerm = searchInput.value.toLowerCase();
    //     const storedOrders = JSON.parse(sessionStorage.getItem("orders")) || [];
    //     const filteredOrders = storedOrders.filter(order => 
    //         order.id.includes(searchTerm) ||
    //          order.name.toLowerCase().includes(searchTerm) ||
    //          order.address.toLowerCase().trim().includes(searchTerm) ||
    //          order.status.toLowerCase().trim().includes(searchTerm)
    //     );
    //     orderList.innerHTML = "";
    //     filteredOrders.forEach(order => {
    //         const orderElement = document.createElement("div");
    //         orderElement.classList.add("order-items");
    //         orderElement.innerHTML = `
    //             <div class="order-item order-id">${order.id}</div>
    //             <div class="order-item customer-name">${order.name}</div>
    //             <div class="order-item customer-address">${order.address}</div>
    //             <select class="order-status" data-id="${order.id}">
    //                 <option value="cho-xac-nhan" ${order.status === "cho-xac-nhan" ? "selected" : ""}>Chờ xác nhận</option>
    //                 <option value="dang-chuan-bi-hang" ${order.status === "dang-chuan-bi-hang" ? "selected" : ""}>Đang chuẩn bị</option>
    //                 <option value="dang-giao-hang" ${order.status === "dang-giao-hang" ? "selected" : ""}>Đang giao hàng</option>
    //                 <option value="da-thanh-toan" ${order.status === "da-thanh-toan" ? "selected" : ""}>Đã thanh toán</option>
    //             </select>
    //         `;
    //         orderList.appendChild(orderElement);
    //     });
    // });

    searchInput.addEventListener("input", function () {
        const searchTerm = searchInput.value.toLowerCase();
        const storedOrders = JSON.parse(sessionStorage.getItem("orders")) || [];
        
        // Lọc và ưu tiên theo id, name, address, status
        const filteredOrders = storedOrders.filter(order => 
            order.id.includes(searchTerm) ||
            order.name.toLowerCase().includes(searchTerm) ||
            order.address.toLowerCase().trim().includes(searchTerm) ||
            order.status.toLowerCase().trim().includes(searchTerm)
        );
    
        // Sắp xếp các đơn hàng ưu tiên theo id, name, address, status
        filteredOrders.sort((a, b) => {
            const aMatches = [a.id, a.name, a.address, a.status].map(field => field.toLowerCase().includes(searchTerm)).indexOf(true);
            const bMatches = [b.id, b.name, b.address, b.status].map(field => field.toLowerCase().includes(searchTerm)).indexOf(true);
    
            return aMatches - bMatches; // Ưu tiên các đơn hàng chứa ký tự tìm kiếm sớm nhất
        });
    
        // Cập nhật lại giao diện
        orderList.innerHTML = "";
        filteredOrders.forEach(order => {
            const orderElement = document.createElement("div");
            orderElement.classList.add("order-items");
    
            // Bôi màu xanh các từ khóa trùng khớp
            orderElement.innerHTML = `
                <div class="order-item order-id">${highlightText(order.id, searchTerm)}</div>
                <div class="order-item customer-name">${highlightText(order.name, searchTerm)}</div>
                <div class="order-item customer-address">${highlightText(order.address, searchTerm)}</div>
                <select class="order-status" data-id="${order.id}">
                    <option value="cho-xac-nhan" ${order.status === "cho-xac-nhan" ? "selected" : ""}>Chờ xác nhận</option>
                    <option value="dang-chuan-bi-hang" ${order.status === "dang-chuan-bi-hang" ? "selected" : ""}>Đang chuẩn bị</option>
                    <option value="dang-giao-hang" ${order.status === "dang-giao-hang" ? "selected" : ""}>Đang giao hàng</option>
                    <option value="da-thanh-toan" ${order.status === "da-thanh-toan" ? "selected" : ""}>Đã thanh toán</option>
                </select>
            `;
            orderList.appendChild(orderElement);
        });
    });
    
    // Hàm để bôi màu xanh các từ khóa trùng khớp
    function highlightText(text, searchTerm) {
        if (!searchTerm) return text; // Nếu không có từ khóa tìm kiếm, trả về text gốc
        const regex = new RegExp(`(${searchTerm})`, 'gi'); // Tìm kiếm không phân biệt chữ hoa/thường
        return text.replace(regex, '<span class="highlight">$1</span>'); // Thêm thẻ span với class 'highlight' để bôi màu
    }
    

    renderOrders();

    // function sortOrders(criteria) {
    //     let storedOrders = JSON.parse(sessionStorage.getItem("orders")) || [];
    //     storedOrders.sort((a, b) => {
    //         if (a[criteria] < b[criteria]) return -1;
    //         if (a[criteria] > b[criteria]) return 1;
    //         return 0;
    //     });
    //     sessionStorage.setItem("orders", JSON.stringify(storedOrders));
    //     renderOrders();
    // }

    // sortButton.addEventListener("click", function () {
    //     const criteriaOptions = ["id", "name", "address", "status"];
    //     sortCriteria = criteriaOptions[(criteriaOptions.indexOf(sortCriteria) + 1) % criteriaOptions.length];
    //     sortOrders(sortCriteria);
    // });

    function sortOrders(criteria) {
        let storedOrders = JSON.parse(sessionStorage.getItem("orders")) || [];
        storedOrders.sort((a, b) => {
            if (a[criteria] < b[criteria]) return -1;
            if (a[criteria] > b[criteria]) return 1;
            return 0;
        });
        sessionStorage.setItem("orders", JSON.stringify(storedOrders));
        renderOrders();
    }

    sortButton.addEventListener("click", function () {
        const criteriaOptions = ["id", "name", "address", "status"];
        sortCriteria = criteriaOptions[(criteriaOptions.indexOf(sortCriteria) + 1) % criteriaOptions.length];
        sortOrders(sortCriteria);
    });

    renderOrders();

});
