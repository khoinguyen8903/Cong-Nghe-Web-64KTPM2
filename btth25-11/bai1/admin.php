<?php
session_start();
include 'data.php'; // Dữ liệu gốc

// Kết hợp dữ liệu từ session và dữ liệu gốc
if (isset($_SESSION['flowers']) && is_array($_SESSION['flowers'])) {
    $flowers = array_values(array_merge($flowers, $_SESSION['flowers']));
} else {
    $flowers = array_values($flowers);
}

// Debug để kiểm tra dữ liệu
// echo '<pre>';
// print_r($flowers);
// echo '</pre>';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý danh sách hoa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: #fff;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
            color: #333;
        }
        .action-buttons button {
            padding: 5px 10px;
            margin: 0 5px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .action-buttons .edit-btn {
            background-color: #4CAF50;
            color: white;
        }
        .action-buttons .delete-btn {
            background-color: #f44336;
            color: white;
        }
        .action-buttons button:hover {
            opacity: 0.9;
        }
        .add-product-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Quản lý các loài hoa</h1>
    <!-- Nút Thêm sản phẩm -->
    <a href="add_form.php" class="add-product-btn">Thêm sản phẩm</a>

    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên Hoa</th>
                <th>Mô Tả</th>
                <th>Ảnh</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($flowers)): ?>
                <?php foreach ($flowers as $index => $flower): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($flower['name']) ?></td>
                        <td><?= htmlspecialchars($flower['description']) ?></td>
                        <td>
                            <img src="<?= htmlspecialchars($flower['image']) ?>" alt="<?= htmlspecialchars($flower['name']) ?>" style="width: 100px; height: auto;">
                        </td>
                        <td class="action-buttons">
                            <!-- Nút sửa -->
                            <form style="display:inline;" action="edit_form.php" method="GET">
                                <input type="hidden" name="id" value="<?= $index ?>">
                                <button type="submit" class="edit-btn">Sửa</button>
                            </form>
                            <!-- Nút xóa -->
                            <a href="delete.php?id=<?= $index ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');" class="delete-btn">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" style="text-align: center;">Chưa có dữ liệu</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
