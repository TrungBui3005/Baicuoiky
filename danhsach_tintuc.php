<?php
include 'connect.php';
include 'header.php';
?>

<div class="container py-5">
    <!-- Tiêu đề + nút thêm -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">📰 Tin tức CLB</h2>
        <a href="them_tintuc.php" class="btn btn-primary rounded-pill px-4">
            <i class="bi bi-plus-lg me-1"></i> Thêm tin
        </a>
    </div>

    <!-- Danh sách tin -->
    <div class="row g-4">
        <?php
        $sql = "SELECT * FROM tintuc ORDER BY ngay_dang DESC";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0):
            while ($row = $result->fetch_assoc()):
        ?>
            <div class="col-md-4 d-flex">
                <div class="card shadow-sm w-100 d-flex flex-column border-0"
                     style="transition:0.3s;">

                    <!-- Ảnh -->
                    <a href="chitiet_tintuc.php?id=<?= $row['id'] ?>">
                        <img src="/Baicuoiky-master/<?= htmlspecialchars($row['hinh_anh']) ?>"
                             alt="<?= htmlspecialchars($row['tieu_de']) ?>"
                             style="height:220px; object-fit:cover; width:100%; border-radius:6px;">
                    </a>

                    <!-- Nội dung -->
                    <div class="card-body d-flex flex-column">
                        <!-- Tiêu đề -->
                        <h5 class="card-title mb-2">
                            <a href="chitiet_tintuc.php?id=<?= $row['id'] ?>" 
                               class="text-dark text-decoration-none">
                                <?= htmlspecialchars($row['tieu_de']) ?>
                            </a>
                        </h5>

                        <!-- Địa điểm + ngày -->
                        <p class="text-muted mb-1">📍 <?= htmlspecialchars($row['dia_diem']) ?></p>
                        <p class="text-muted mb-2">🗓 <?= date('d/m/Y', strtotime($row['ngay_dang'])) ?></p>

                        <!-- Nội dung rút gọn -->
                        <p class="card-text" style="
                            flex-grow:1;
                            overflow:hidden;
                            display:-webkit-box;
                            -webkit-line-clamp:3;
                            -webkit-box-orient:vertical;
                        ">
                            <?= htmlspecialchars($row['noi_dung']) ?>
                        </p>

                        <!-- Nút Sửa / Xóa -->
                        <div class="d-flex justify-content-end gap-2 mt-auto">
                            <a href="sua_tintuc.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i> Sửa
                            </a>
                            <a href="xoa_tintuc.php?id=<?= $row['id'] ?>" 
                               onclick="return confirm('Xóa tin tức này?')"
                               class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i> Xóa
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            endwhile;
        else:
        ?>
            <div class="col-12 text-center text-muted py-5">
                Chưa có tin tức nào.
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include 'footer.php'; ?>
