<?php 
include 'connect.php'; 
include 'header.php'; 
?>
<link rel="stylesheet" href="css/event.css">

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h2 class="fw-bold mb-0">Sự Kiện <span class="text-primary">CLB</span></h2>
        </div>
        <a href="them_sukien.php" class="btn btn-primary rounded-pill px-4 shadow-sm">
            <i class="bi bi-plus-lg me-2"></i>Thêm Mới
        </a>
    </div>

    <div class="row g-4">
        <?php
        $sql = "SELECT * FROM sukien ORDER BY ngay DESC";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm event-card border-0">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="event-icon-box"><i class="bi bi-calendar4-event fs-4"></i></div>
                                <span class="badge bg-info-subtle text-info px-3 py-2 rounded-pill">Sắp diễn ra</span>
                            </div>
                            <h5 class="fw-bold">
                                <a href="chitiet_sukien.php?id=<?= $row['id'] ?>" class="text-dark text-decoration-none">
                                    <?= htmlspecialchars($row['ten']) ?>
                                </a>
                            </h5>
                            <p class="text-muted small mt-3 mb-1"><i class="bi bi-geo-alt me-2 text-danger"></i><?= htmlspecialchars($row['diadiem']) ?></p>
                            <p class="text-muted small"><i class="bi bi-clock me-2 text-primary"></i><?= date("d/m/Y", strtotime($row['ngay'])) ?></p>
                            
                            <div class="pt-3 border-top d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary"><?= $row['soluong'] ?> chỗ</span>
                                <div class="btn-group">
                                    <a href="sua_sukien.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-warning border-0">
                                    <i class="bi bi-pencil"></i></a>
                                    <a href="xoa_sukien.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-danger border-0" onclick="return confirm('Xóa sự kiện này?')">
                                    <i class="bi bi-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo '<div class="col-12 text-center py-5"><p class="text-muted">Không có dữ liệu trong database.</p></div>';
        }
        ?>
    </div>
</div>
<?php include 'footer.php'; ?>