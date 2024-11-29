<?php
session_start();

// Kiểm tra nếu tham số name và price được truyền
if (isset($_GET['name']) && isset($_GET['price'])) {
    $name = $_GET['name'];
    $price = $_GET['price'];

    // Lấy danh sách sản phẩm từ session
    $products = $_SESSION['products'] ?? [];

    // Lọc danh sách sản phẩm để loại bỏ sản phẩm cần xóa
    $products = array_filter($products, function ($product) use ($name, $price) {
        return !($product['name'] === $name && $product['price'] == $price);
    });

    // Cập nhật lại session với danh sách mới
    $_SESSION['products'] = array_values($products); // Reset lại chỉ số
}

// Quay lại trang danh sách
header('Location: index.php');
exit();
?>
