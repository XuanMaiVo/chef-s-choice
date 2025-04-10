<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Sản phẩm</title>
    <link rel="stylesheet" href="../../css/style/admin/product.css">
    <script src="../../js/product.js"></script>
</head>
<body>
    <div class="container">
        <iframe src="sidebar.html" id="sidebar-container" frameborder="0"></iframe>
        <div class="main-content">
                <h2>Sản phẩm</h2>
                <div class="top-bar">
                    <div class="search-bar">
                        <input type="text" placeholder="Nhập mã sản phẩm, tên sản phẩm...">
                        <button class="search-btn">🔍</button>
                    </div>
                    <div class="dropdown">
                        <button class="filter-btn">Loại sản phẩm ⌵</button>
                            <ul class="dropdown-menu">  
                                <li>Gia vị</li>
                                <li>Dụng cụ nhà bếp</li>
                            </ul>
                        <button id="btn-add-product" class="add-btn">➕ Thêm sản phẩm</button>
                        <div id="product-form" class="form-container hidden">
                            <span class="close">&times;</span>
                            <div class="form">
                                <div class="form-left">
                                    <input type="file" id="product-image" accept="image/*" hidden> 
                                    <div id="image-container">
                                        <img id="preview-image" src="" alt="Xem trước ảnh" class="hidden">
                                        <p id="image-label">📷 ẢNH</p> 
                                    </div>
                                    <h4 for="product-image">Hình ảnh sản phẩm</h4>
                                </div>
                                <div class="form-right">
                                    <h3>THÔNG TIN SẢN PHẨM</h3>
                                    <label for="product-id">Mã sản phẩm:</label>
                                    <input type="text" id="product-id" value="SP00001" readonly>
                            
                                    <label for="product-name">Tên sản phẩm:</label>
                                    <input type="text" id="product-name">
                            
                                    <label for="product-type">Loại sản phẩm:</label>
                                    <select id="product-type">
                                        <option>Chọn loại sản phẩm</option>
                                        <option>Gia vị</option>
                                        <option>Dụng cụ nhà bếp</option>
                                    </select>
                            
                                    <label for="product-price">Giá sản phẩm:</label>
                                    <input type="number" id="product-price">
                            
                                    <label for="product-desc">Mô tả:</label>
                                    <textarea id="product-desc"></textarea>
                                    <div class="save-container">
                                        <button id="save-product">Lưu</button>
                                    </div>
                                </div>
                            </div>
                        </div>                                    
                </div>      
                <table id="table-gia-vi" class="product-table hidden">
                    <thead>
                        <tr>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="img-placeholder"></td>
                            <td>Muối tiêu</td>
                            <td>20</td>
                            <td>15.000</td>
                            <td class="actions">
                                <button class="delete-btn">🗑️</button>
                                <button class="edit-btn">✏️</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table id="table-nha-bep" class="product-table hidden">
                    <thead>
                        <tr>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="img-placeholder"></td>
                            <td>Chảo chống dính</td>
                            <td>5</td>
                            <td>250.000</td>
                            <td class="actions">
                                <button class="delete-btn">🗑️</button>
                                <button class="edit-btn">✏️</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div id="confirm-dialog">
                    <img src="../../assets/images/Error.png" alt="Cảnh báo" class="warning-icon">
                    <p id="confirm-message">BẠN CÓ CHẮC MUỐN XÓA SẢN PHẨM NÀY</p>
                    <div class="dialog-buttons">
                        <button id="confirm-agree">ĐỒNG Ý</button>
                        <button id="confirm-cancel">HỦY BỎ</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
