<?php
session_start();
include 'data.php'; // Dữ liệu gốc

// Lấy ID sản phẩm
$id = isset($_GET['id']) ? (int)$_GET['id'] : -1;

// Kiểm tra ID hợp lệ
if ($id < 0) {
    die('ID sản phẩm không hợp lệ!');
}

if (!isset($_SESSION['flowers'])) {
    $_SESSION['flowers'] = $flowers;
}

// Kiểm tra sản phẩm có tồn tại không
if (isset($_SESSION['flowers'][$id])) {
    unset($_SESSION['flowers'][$id]); // Xóa sản phẩm 
} else {
    die('Sản phẩm không tồn tại!');
}

// Chuyển hướng về trang quản lý sau khi xóa
header('Location: admin.php');
exit;
?>
