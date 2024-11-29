<?php
include 'connect.php'; // Kết nối CSDL

// Lấy dữ liệu từ bảng questions
$sql = "SELECT * FROM questions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $questions = $result->fetch_all(MYSQLI_ASSOC); // Lưu tất cả câu hỏi vào mảng
} else {
    $questions = [];
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài kiểm tra trắc nghiệm</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="icon/bootstrap-icons.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4"> Bài kiểm tra trắc nghiệm</h1>
        <form action="result.php" method="POST">
            <?php
            $index = 1;
            foreach ($questions as $question) { ?>
                <div class="card mb-4">
                    <div class="card-header"><strong><?php echo $question['question']; ?></strong></div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question<?php echo $index; ?>" value="A" id="question<?php echo $index; ?>A">
                            <label class="form-check-label" for="question<?php echo $index; ?>">A. <?php echo $question['option_a']; ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question<?php echo $index; ?>" value="B" id="question<?php echo $index; ?>B">
                            <label class="form-check-label" for="question<?php echo $index; ?>">B. <?php echo $question['option_b']; ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question<?php echo $index; ?>" value="C" id="question<?php echo $index; ?>C">
                            <label class="form-check-label" for="question<?php echo $index; ?>">C. <?php echo $question['option_c']; ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question<?php echo $index; ?>" value="D" id="question<?php echo $index; ?>D">
                            <label class="form-check-label" for="question<?php echo $index; ?>">D. <?php echo $question['option_d']; ?></label>
                        </div>
                    </div>
                </div>
            <?php $index++;
            } ?>
            <button type="submit" class="btn btn-primary">Nộp bài</button>
        </form>
    </div>
</body>

</html>
