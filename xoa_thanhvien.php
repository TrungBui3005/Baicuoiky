<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM thanhvien WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Xóa thành công thì quay về trang danh sách
        header("Location: danhsach_thanhvien.php");
    } else {
        echo "Lỗi xóa dữ liệu: " . $conn->error;
    }
} else {
    header("Location: danhsach_thanhvien.php");
}
?>