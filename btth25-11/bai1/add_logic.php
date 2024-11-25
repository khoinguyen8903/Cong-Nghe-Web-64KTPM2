<?php
session_start();

// Khởi tạo mảng $flowers nếu chưa tồn tại
if (!isset($_SESSION['flowers'])) {
    $_SESSION['flowers'] = [];
}

// Kiểm tra nếu dữ liệu được gửi qua phương thức POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    // Thêm dữ liệu vào mảng $flowers
    $_SESSION['flowers'][] = [
        'name' => $name,
        'description' => $description,
        'image' => $image
    ];

    // Chuyển hướng về trang admin
    header('Location: admin.php');
    exit();
}
