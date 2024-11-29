<?php include 'header.php'; ?>
<?php include 'connect.php'; ?>
<main>
    <div class="d-flex flex-column align-items-center mb-3">
        <h3>Danh sách sản phẩm</h3>
    </div>
    <div class="container">
        <form action="add.php" method="post">
            <button type="submit" class="btn btn-success">Thêm</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Giá thành</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "connect.php";

                    $sql = "select * from products";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($result))
                    {?>
                        <tr>
                            <td><?php echo $row['name']?> </td>
                            <td><?php echo $row['price']?> </td>
                            <td><a href="update.php?name=<?= urlencode($product['name']) ?>&price=<?= $product['price'] ?>" class="text-primary "><i class="bi bi-pencil-square"></i></a></td>
                            <td><a href="delete.php?name=<?= urlencode($product['name']) ?>&price=<?= $product['price'] ?>" class="text-primary" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');"><i class="bi bi-trash-fill"></i></a></td>
                        </tr>
                <?php
                    }
                ?>

            </tbody>
        </table>
    </div>
</main>

<?php include 'footer.php'; ?>