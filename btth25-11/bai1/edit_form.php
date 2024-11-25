<?php
session_start();
include 'data.php'; // Dữ liệu gốc

// Lấy ID sản phẩm từ URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : -1;

// Kiểm tra ID hợp lệ
if ($id < 0 || !isset($flowers[$id])) {
    die('Sản phẩm không tồn tại!');
}

// Lấy thông tin sản phẩm
$product = $flowers[$id];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
</head>
<body>
    <h1>Sửa thông tin sản phẩm</h1>
    <form action="edit_logic.php" method="POST">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label for="name">Tên Hoa:</label>
        <input type="text" name="name" id="name" value="<?= htmlspecialchars($product['name']) ?>" required><br>
        
        <label for="description">Mô Tả:</label>
        <textarea name="description" id="description" rows="5" required><?= htmlspecialchars($product['description']) ?></textarea><br>
        
        <label for="image">Đường Dẫn Ảnh:</label>
        <input type="text" name="image" id="image" value="<?= htmlspecialchars($product['image']) ?>" required><br>
        
        <button type="submit">Cập nhật</button>
    </form>
    <a href="admin.php">Quay lại</a>
</body>
</html>
