<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Kiểm tra nếu chưa đăng nhập HOẶC không phải admin thì đuổi ra trang chủ
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    echo "<script>
            alert('Bạn không có quyền truy cập trang quản trị!');
            window.location.href='index.php';
          </script>";
    exit();
}
?>
<?php 
include 'connect.php'; 
include 'header.php'; 

if (isset($_POST['btnThem'])) {
    $ten = $_POST['ten'];
    $ngay = $_POST['ngay'];
    $diadiem = $_POST['diadiem'];
    $mota = $_POST['mota'];
    $soluong = $_POST['soluong'];

    $sql = "INSERT INTO sukien (ten, ngay, diadiem, mota, soluong) VALUES ('$ten', '$ngay', '$diadiem', '$mota', '$soluong')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: danhsach_sukien.php");
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>

<div class="container mt-5">
    <div class="card shadow p-4 mx-auto" style="max-width: 600px;">
        <h3 class="text-center mb-4">Thêm Sự Kiện Mới</h3>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Tên sự kiện</label>
                <input type="text" name="ten" class="form-control" required>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Ngày tổ chức</label>
                    <input type="date" name="ngay" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Số lượng tham gia</label>
                    <input type="number" name="soluong" class="form-control" value="50">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Địa điểm</label>
                <input type="text" name="diadiem" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mô tả nội dung</label>
                <textarea name="mota" class="form-control" rows="4"></textarea>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" name="btnThem" class="btn btn-primary">Lưu Sự Kiện</button>
                <a href="danhsach_sukien.php" class="btn btn-light">Hủy</a>
            </div>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>