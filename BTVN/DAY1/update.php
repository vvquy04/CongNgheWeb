<?php
session_start();

// Kiểm tra nếu có thông tin sản phẩm được gửi qua GET
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['name'], $_GET['price'])) {
    $currentName = htmlspecialchars($_GET['name']);
    $currentPrice = htmlspecialchars($_GET['price']);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form POST
    $currentName = $_POST['name'];
    $currentPrice = $_POST['price'];
    $newName = $_POST['new_name'];
    $newPrice = $_POST['new_price'];

    // Lấy danh sách sản phẩm từ session
    $products = $_SESSION['products'] ?? [];

    // Tìm và cập nhật sản phẩm
    $updated = false;
    foreach ($products as &$product) {
        if ($product['name'] === $currentName && $product['price'] == $currentPrice) {
            $product['name'] = $newName;
            $product['price'] = $newPrice;
            $updated = true;
            break;
        }
    }

    if ($updated) {
        // Lưu lại danh sách sản phẩm vào session
        $_SESSION['products'] = $products;

        // Quay lại danh sách
        header('Location: index.php');
        exit();
    } else {
        $error = "Không tìm thấy sản phẩm để cập nhật.";
    }
} else {
    // Nếu không có GET hoặc POST hợp lệ
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhập sản phẩm</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="icon/bootstrap-icons.min.css">


</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header text-black text-center">
                        <h4>Cập Nhật Sản Phẩm</h4>
                    </div>
                    <div class="card-body">
                        <?php if (isset($error)): ?>
                            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                        <?php endif; ?>

                        <form action="update.php" method="post">
                            <input type="hidden" name="name" value="<?= htmlspecialchars($currentName) ?>">
                            <input type="hidden" name="price" value="<?= htmlspecialchars($currentPrice) ?>">

                            <div class="mb-3">
                                <label for="newName" class="form-label">Tên sản phẩm mới</label>
                                <input type="text" name="new_name" id="newName" class="form-control" value="<?= htmlspecialchars($currentName) ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="newPrice" class="form-label">Giá sản phẩm mới</label>
                                <input type="number" name="new_price" id="newPrice" class="form-control" value="<?= htmlspecialchars($currentPrice) ?>" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Cập Nhật</button>
                                <a href="index.php" class="btn btn-secondary">Hủy</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>