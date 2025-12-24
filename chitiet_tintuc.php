<?php
include 'connect.php';
include 'header.php';

if (!isset($_GET['id'])) {
    echo "<div class='container py-5 text-center'>Không tìm thấy tin tức.</div>";
    include 'footer.php';
    exit;
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM tintuc WHERE id = $id";
$result = $conn->query($sql);

if (!$result || $result->num_rows == 0) {
    echo "<div class='container py-5 text-center'>Tin tức không tồn tại.</div>";
    include 'footer.php';
    exit;
}

$row = $result->fetch_assoc();
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <!-- Tiêu đề -->
            <h1 class="fw-bold mb-3">
                <?= htmlspecialchars($row['tieu_de']) ?>
            </h1>

            <!-- Meta -->
            <div class="text-muted mb-4">
                📍 <?= htmlspecialchars($row['dia_diem']) ?>
                &nbsp;&nbsp;|&nbsp;&nbsp;
                🗓 <?= date('d/m/Y', strtotime($row['ngay_dang'])) ?>
            </div>

            <!-- Ảnh -->
            <img src="/Baicuoiky-master/<?= htmlspecialchars($row['hinh_anh']) ?>"
                 class="img-fluid rounded mb-4"
                 style="max-height:420px; object-fit:cover; width:100%;">

            <!-- Nội dung -->
            <div style="font-size:1.05rem; line-height:1.8;">
                <?= nl2br(htmlspecialchars($row['noi_dung'])) ?>
            </div>

            <!-- Quay lại -->
            <div class="mt-5">
                <a href="danhsach_tintuc.php" class="btn btn-outline-secondary">
                    ← Quay lại danh sách tin
                </a>
            </div>

        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
