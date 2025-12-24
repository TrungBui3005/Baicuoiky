<?php
include 'connect.php';
include 'header.php';

$id = $_GET['id'];
$data = $conn->query("SELECT * FROM tintuc WHERE id = $id")->fetch_assoc();

if (isset($_POST['submit'])) {
    $tieu_de = $_POST['tieu_de'];
    $noi_dung = $_POST['noi_dung'];
    $dia_diem = $_POST['dia_diem'];

    if (!empty($_FILES['hinh_anh']['name'])) {
        $hinh_anh = $_FILES['hinh_anh']['name'];
        move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "uploads/$hinh_anh");
        $conn->query("UPDATE tintuc SET hinh_anh='$hinh_anh' WHERE id=$id");
    }

    $sql = "UPDATE tintuc 
            SET tieu_de='$tieu_de', noi_dung='$noi_dung', dia_diem='$dia_diem'
            WHERE id=$id";
    $conn->query($sql);

    header("Location: danhsach_tintuc.php");
}
?>

<div class="container py-5">
    <div class="col-lg-8 mx-auto">
        <div class="card shadow border-0">
            <div class="card-header bg-warning">
                <h4 class="mb-0"><i class="bi bi-pencil-square"></i> Sửa tin tức</h4>
            </div>

            <div class="card-body p-4">
                <form method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tiêu đề</label>
                        <input type="text" name="tieu_de" class="form-control"
                               value="<?= $data['tieu_de'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Địa điểm</label>
                        <input type="text" name="dia_diem" class="form-control"
                               value="<?= $data['dia_diem'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Ảnh mới (nếu muốn)</label>
                        <input type="file" name="hinh_anh" class="form-control">
                        <small class="text-muted">Ảnh hiện tại: <?= $data['hinh_anh'] ?></small>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Nội dung</label>
                        <textarea name="noi_dung" rows="6" class="form-control" required><?= $data['noi_dung'] ?></textarea>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="danhsach_tintuc.php" class="btn btn-secondary">
                            ← Quay lại
                        </a>
                        <button name="submit" class="btn btn-warning px-4">
                            <i class="bi bi-save"></i> Lưu thay đổi
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
