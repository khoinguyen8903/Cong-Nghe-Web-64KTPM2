<?php
session_start();
include 'data.php'; // Dữ liệu gốc

// Lấy thông tin từ form sửa
$id = isset($_POST['id']) ? (int)$_POST['id'] : -1;
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$description = isset($_POST['description']) ? trim($_POST['description']) : '';
$image = isset($_POST['image']) ? trim($_POST['image']) : '';

// Kiểm tra dữ liệu hợp lệ
if ($id < 0 || empty($name) || empty($description) || empty($image)) {
    die('Dữ liệu không hợp lệ!');
}

// Nếu chưa có session thì khởi tạo từ dữ liệu gốc
if (!isset($_SESSION['flowers'])) {
    $_SESSION['flowers'] = $flowers;
}

// Kiểm tra nếu sản phẩm tồn tại trong session
if (isset($_SESSION['flowers'][$id])) {
    // Cập nhật sản phẩm trong session
    $_SESSION['flowers'][$id] = [
        'name' => $name,
        'description' => $description,
        'image' => $image
    ];
} else {
    die('Sản phẩm không tồn tại trong session!');
}

// Sau khi sửa, chuyển hướng về trang quản lý admin
header('Location: admin.php');
exit;
?>
