<?php
require_once("../config/config.php");

$where = "WHERE maLSP LIKE 'DC%'";

if (isset($_POST['loai']) && $_POST['loai'] !== '') {
    $loai = mysqli_real_escape_string($conn, $_POST['loai']);
    $where = "WHERE maLSP LIKE '$loai%'";
}

if (isset($_POST['prices']) && $_POST['prices'] !== '') {
    $prices = json_decode($_POST['prices'], true);
    if (!empty($prices)) {
        $priceConditions = [];
        foreach ($prices as $price) {
            $range = explode('-', $price);
            if (count($range) == 2) {
                $min = (int)$range[0];
                $max = (int)$range[1];
                $priceConditions[] = "(gia BETWEEN $min AND $max)";
            }
        }
        if (!empty($priceConditions)) {
            $where .= " AND (" . implode(' OR ', $priceConditions) . ")";
        }
    }
}

$orderBy = "";
if (isset($_POST['sort']) && $_POST['sort'] !== '') {
    $sort = $_POST['sort'];
    if ($sort == "asc") {
        $orderBy = " ORDER BY gia ASC";
    } elseif ($sort == "desc") {
        $orderBy = " ORDER BY gia DESC";
    }
}

$query = "SELECT * FROM sanpham $where $orderBy";
$result = mysqli_query($conn, $query);

$html = '';

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $html .= '<div class="product-item">';
        $html .= '    <button class="openModalBtn" ';
        $html .= '        data-img="/assets/images/' . htmlspecialchars($row['hinhanh']) . '" ';
        $html .= '        data-name="' . htmlspecialchars($row['tenSP']) . '" ';
        $html .= '        data-price="' . number_format($row['gia'], 0, ",", ".") . 'đ" ';
        $html .= '        data-mota="' . htmlspecialchars($row['mota']) . '" ';
        $html .= '        data-soluong="' . htmlspecialchars($row['soluong']) . '" ';
        $html .= '        data-masp="' . htmlspecialchars($row['maSP']) . '">';
        $html .= '        <img src="/assets/images/' . htmlspecialchars($row['hinhanh']) . '" alt="' . htmlspecialchars($row['tenSP']) . '">';
        $html .= '    </button>';
        $html .= '    <p>' . htmlspecialchars($row['tenSP']) . '</p>';
        $html .= '    <span>' . number_format($row['gia'], 0, ",", ".") . 'đ</span>';
        $html .= '</div>';
    }
} else {
    $html .= '<p>Không tìm thấy sản phẩm phù hợp!</p>';
}

echo $html;
?>
