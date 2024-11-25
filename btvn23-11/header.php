<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Table with Add and Delete Row Feature</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    nav ul li a {
    text-decoration: none;
    color: #333;
    padding: 5px 10px;
    transition: color 0.3s, background-color 0.3s; /* Hiệu ứng mượt */
}

nav ul li a:hover {
    color: #fff; /* Màu chữ khi hover */
    background-color: #007bff; /* Màu nền khi hover */
    border-radius: 5px; /* Bo góc nhẹ */
}
</style>

<header style="background-color: #f8f9fa; padding: 10px 20px; border-bottom: 1px solid #ddd;">
    <nav style="display: flex; justify-content: space-between; align-items: center;">
        <div style="font-weight: bold; font-size: 18px;">Administration</div>
        <ul style="list-style: none; display: flex; gap: 15px; margin: 0; padding: 0;">
            <li><a href="#" style="text-decoration: none; color: #333;">Trang chủ</a></li>
            <li><a href="#" style="text-decoration: none; color: #333;">Trang ngoài</a></li>
            <li><a href="#" style="text-decoration: none; color: #333;">Thể loại</a></li>
            <li><a href="#" style="text-decoration: none; color: #333;">Tác giả</a></li>
            <li><a href="#" style="text-decoration: none; color: #333;">Bài viết</a></li>
        </ul>
    </nav>
</header>