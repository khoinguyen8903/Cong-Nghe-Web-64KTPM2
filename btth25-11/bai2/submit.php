<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Kết Quả Bài Thi</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-primary mb-4">Kết Quả Bài Thi</h1>
        <?php
        // Đọc file câu hỏi
        $filename = "question.txt"; // Đảm bảo file này tồn tại
        $questions = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        $answers = [];
        foreach ($questions as $line) {
            if (strpos($line, "Đáp án:") !== false) {
                $answers[] = trim(substr($line, strpos($line, ":") + 1));
            }
        }

        // Tính điểm
        $score = 0;
        foreach ($_POST as $key => $userAnswer) {
            $questionNumber = (int)filter_var($key, FILTER_SANITIZE_NUMBER_INT);
            if (isset($answers[$questionNumber - 1]) && $answers[$questionNumber - 1] === $userAnswer) {
                $score++;
            }
        }

        $totalQuestions = count($answers);
        $percentage = round(($score / $totalQuestions) * 100);

        // Hiển thị kết quả
        echo "<div class='alert alert-info text-center'>";
        echo "<h3>Bạn đã trả lời đúng <strong>$score</strong>/<strong>$totalQuestions</strong> câu hỏi.</h3>";
        echo "<h4>Điểm số của bạn: <span class='text-success'>$percentage%</span></h4>";
        echo "</div>";
        ?>

        <!-- Nút làm lại -->
        <div class="text-center">
            <a href="index.php" class="btn btn-primary btn-lg">Làm Lại</a>
        </div>
    </div>

    <!-- Bootstrap JS (Optional, for better interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
