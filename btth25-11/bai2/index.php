<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bài Thi Trắc Nghiệm</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Bài Thi Trắc Nghiệm</h1>
        <!-- Form bắt đầu -->
        <form action="submit.php" method="post">
            <?php
            $filename = "question.txt"; //
            $questions = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            $current_question = [];
            $question_number = 0;

            foreach ($questions as $line) {
                // Khi gặp câu hỏi mới
                if (strpos($line, "Câu") === 0) {
                    // Nếu đã có câu hỏi trước đó, hiển thị nó
                    if (!empty($current_question)) {
                        $question_number++;
                        displayQuestion($current_question, $question_number);
                    }
                    // Bắt đầu một câu hỏi mới
                    $current_question = [];
                }
                // Thêm dòng vào câu hỏi hiện tại
                $current_question[] = $line;
            }

            // Xử lý hiển thị câu hỏi cuối cùng
            if (!empty($current_question)) {
                $question_number++;
                displayQuestion($current_question, $question_number);
            }

            // Hàm hiển thị câu hỏi
            function displayQuestion($question, $number)
            {
                echo "<div class='card mb-4'>";
                echo "<div class='card-header'><strong>{$question[0]}</strong></div>";
                echo "<div class='card-body'>";
                for ($i = 1; $i <= 4; $i++) {
                    $answer = substr($question[$i], 0, 1); // A, B, C, D
                    echo "<div class='form-check'>";
                    echo "<input class='form-check-input' type='radio' name='question{$number}' value='{$answer}' id='question{$number}{$answer}'>";
                    echo "<label class='form-check-label' for='question{$number}{$answer}'>{$question[$i]}</label>";
                    echo "</div>";
                }
                echo "</div>";
                echo "</div>";
            }
            ?>
            <!-- Nút nộp bài -->
            <button type="submit" class="btn btn-primary">Nộp bài</button>
        </form>
    </div>
</body>
</html>
