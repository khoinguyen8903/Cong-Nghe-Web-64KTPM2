<?php
session_start();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Thêm sản phẩm mới</h1>
    <form action="add_logic.php" method="POST">
        <label for="name">Tên sản phẩm:</label>
        <input type="text" id="name" name="name" required>

        <label for="description">Mô tả:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <label for="image">URL hình ảnh:</label>
        <input type="text" id="image" name="image" placeholder="Nhập URL ảnh">

        <button type="submit">Thêm sản phẩm</button>
    </form>
</body>
</html>
