<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý CLB Sinh Viên</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="css/header.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light sticky-top shadow-sm bg-white">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <i class="bi bi-rocket-takeoff-fill fs-3 text-primary me-2"></i>
            <span class="fw-bold text-dark">SV-MANAGER</span>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active text-primary fw-bold' : '' ?>" href="index.php">Trang chủ</a>
                </li>

               <li class="nav-item">
    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'danhsach_thanhvien.php' ? 'active text-primary fw-bold' : '' ?>" href="danhsach_thanhvien.php">Thành viên</a>
</li>
            

                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'danhsach_sukien.php' ? 'active text-primary fw-bold' : '' ?>" href="danhsach_sukien.php">Sự kiện</a>
                </li>

                <?php if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin'): ?>
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'danhsachdki.php' ? 'active text-primary fw-bold' : '' ?>" href="danhsachdki.php">Đăng ký</a>
                </li>
                <?php endif; ?>

                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'danhsach_tintuc.php' ? 'active text-primary fw-bold' : '' ?>" href="danhsach_tintuc.php">Tin tức</a>
                </li>
            </ul>
            
            <div class="d-flex align-items-center gap-3">
                <?php if (isset($_SESSION['username'])): ?>
                    <div class="dropdown">
                        <a class="d-flex align-items-center text-decoration-none text-dark dropdown-toggle" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 35px; height: 35px; font-size: 14px;">
                                <?= strtoupper(substr($_SESSION['username'], 0, 1)) ?>
                            </div>
                            <div class="d-flex flex-column">
                                <span class="fw-semibold lh-1"><?= $_SESSION['username'] ?></span>
                                <small class="text-muted" style="font-size: 10px;"><?= $_SESSION['role'] == 'admin' ? 'Quản trị viên' : 'Thành viên' ?></small>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0" aria-labelledby="userDropdown">
                            <?php if ($_SESSION['role'] == 'admin'): ?>
                                <li><a class="dropdown-item" href="duyetdangki.php"><i class="bi bi-clipboard-check me-2"></i>Duyệt đăng ký</a></li>
                                <li><a class="dropdown-item" href="them_sukien.php"><i class="bi bi-plus-circle me-2"></i>Thêm sự kiện</a></li>
                                <li><hr class="dropdown-divider"></li>
                            <?php endif; ?>
                            
                            <li><a class="dropdown-item" href="ho_so.php"><i class="bi bi-person me-2"></i>Hồ sơ</a></li>
                            <li><a class="dropdown-item text-danger" href="dangxuat.php"><i class="bi bi-box-arrow-right me-2"></i>Đăng xuất</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <a href="dangnhap.php" class="btn btn-outline-primary rounded-pill px-4">Đăng nhập</a>
                    <a href="dangky.php" class="btn btn-primary rounded-pill px-4">Đăng ký</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>