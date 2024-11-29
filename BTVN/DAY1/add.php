<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="icon/bootstrap-icons.min.css">
</head>

<body>
    <?php
    include "connect.php";
    $name = "";
    $price = "";
    $sql = " insert into products (name, price)
    value('$name', '$price')";
    mysqli_query($conn, $sql);
    ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header text-black text-center">
                        <h4>Thêm Sản Phẩm</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="productName" class="form-label">Tên sản phẩm</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="productPrice" class="form-label">Giá sản phẩm</label>
                                <input type="number" name="price" class="form-control" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="save" class="btn btn-success">
                                    Thêm
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>