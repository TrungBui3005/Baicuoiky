<?php
include 'connect.php';
include 'header.php';

if (isset($_POST['submit'])) {
    $tieu_de = $_POST['tieu_de'];
    $noi_dung = $_POST['noi_dung'];
    $dia_diem = $_POST['dia_diem'];
    $ngay_dang = date('Y-m-d H:i:s');

    $hinh_anh = $_FILES['hinh_anh']['name'];
    move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "uploads/$hinh_anh");

    $sql = "INSERT INTO tintuc (tieu_de, hinh_anh, noi_dung, ngay_dang, dia_diem)
            VALUES ('$tieu_de', '$hinh_anh', '$noi_dung', '$ngay_dang', '$dia_diem')";
    $conn->query($sql);

    header("Location: danhsach_tintuc.php");
}
?>

<div class="container py-5">
    <div class="col-lg-8 mx-auto">
        <div class="card shadow border-0">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0"><i class="bi bi-plus-circle"></i> Thêm tin tức mới</h4>
            </div>

            <div class="card-body p-4">
                <form method="post" enctype="multipart/form-data">
                    
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tiêu đề tin</label>
                        <input type="text" name="tieu_de" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Địa điểm</label>
                        <input type="text" name="dia_diem" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Ảnh đại diện</label>
                        <input type="file" name="hinh_anh" class="form-control" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Nội dung</label>
                        <textarea name="noi_dung" rows="6" class="form-control" required></textarea>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="danhsach_tintuc.php" class="btn btn-secondary">
                            ← Quay lại
                        </a>
                        <button name="submit" class="btn btn-primary px-4">
                            <i class="bi bi-check-circle"></i> Đăng tin
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
