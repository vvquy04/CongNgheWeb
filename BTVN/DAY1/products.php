<?php
session_start();

// Kiểm tra nếu danh sách sản phẩm chưa tồn tại trong session, khởi tạo mặc định
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [
        ['name' => 'Sản phẩm 1', 'price' => '1000'],
        ['name' => 'Sản phẩm 2', 'price' => '2000'],
        ['name' => 'Sản phẩm 3', 'price' => '3000'],
    ];
}

// Trả về danh sách sản phẩm
$products = $_SESSION['products'];
?>
