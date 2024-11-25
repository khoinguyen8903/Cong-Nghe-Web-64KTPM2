<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách hoa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            width: 80%;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .flower {
            margin-bottom: 20px;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .flower img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
            display: block;
        }
        .flower h2 {
            margin: 0 0 5px;
            color: #444;
        }
        .flower p {
            margin: 0;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Danh sách các loài hoa</h1>
        <?php include 'data.php'; // Đọc mảng $flowers ?>
        <div>
            <?php foreach ($flowers as $flower): ?>
                <div class="flower">
                <h2><?= $flower['name'] ?></h2>
                <p><?= $flower['description'] ?></p>
                    <img src="<?= $flower['image'] ?>" alt="<?= $flower['name'] ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
