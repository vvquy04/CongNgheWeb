<?php
include 'connect.php';

// Lấy danh sách đáp án đúng
$sql = "SELECT id, answer FROM questions";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

$answers = [];
while ($row = $result->fetch_assoc()) {
    $answers[$row['id']] = $row['answer'];
}

// Tính điểm
$score = 0;
$total = count($answers);

foreach ($_POST as $key => $userAnswer) {
    $questionId = (int)filter_var($key, FILTER_SANITIZE_NUMBER_INT);
    if (isset($answers[$questionId]) && $answers[$questionId] === $userAnswer) {
        $score++;
    }
}

?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="icon/bootstrap-icons.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Kết quả bài kiểm tra</h1>
        <div class="alert alert-success text-center">
            Bạn trả lời đúng <strong><?php echo $score; ?></strong>/<strong><?php echo $total; ?></strong> câu.
        </div>
        <div class="text-center mt-3">
            <a href="index.php" class="btn btn-primary">Làm lại</a>
        </div>
    </div>
</body>

</html>