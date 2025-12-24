<?php include 'connect.php'; include 'header.php'; 
$id = $_GET['id'];
$row = $conn->query("SELECT * FROM sukien WHERE id = $id")->fetch_assoc();
?>
<link rel="stylesheet" href="css/event_detail.css">
<div class="event-detail-header text-center">
    <div class="container"><h1 class="fw-bold"><?= $row['ten'] ?></h1></div>
</div>
<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card event-detail-card">
                <div class="row g-3 mb-4">
                    <div class="col-md-6"><div class="info-item"><div class="info-icon"><i class="bi bi-clock"></i></div><div><small class="text-muted d-block">Ngày</small><strong><?= date("d/m/Y", strtotime($row['ngay'])) ?></strong></div></div></div>
                    <div class="col-md-6"><div class="info-item"><div class="info-icon"><i class="bi bi-geo-alt"></i></div><div><small class="text-muted d-block">Địa điểm</small><strong><?= $row['diadiem'] ?></strong></div></div></div>
                </div>
                <h5 class="fw-bold mb-3">Nội dung chi tiết</h5>
                <p class="text-secondary" style="line-height: 1.8;"><?= nl2br($row['mota']) ?></p>
                <div class="text-center mt-5"><a href="danhsach_sukien.php" class="btn btn-light px-4">Quay lại</a></div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>