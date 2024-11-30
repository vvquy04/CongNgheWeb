<?php
include "connect.php";

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    
    $sql_delete = "DELETE FROM flowers WHERE id = $delete_id";
    if ($conn->query($sql_delete) === TRUE) {
        header("Location: admin.php"); 
        exit();
    } else {
        echo "Lỗi khi xóa dữ liệu: " . $conn->error;
    }
} else {
    echo "Không có ID để xóa.";
}

$conn->close();
?>