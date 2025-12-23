<?php include 'header.php'; ?>
<!-- Index Css -->
<link href="css/index.css" rel="stylesheet">

<!-- HERO SECTION -->
<section class="hero text-center text-lg-start">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <span class="badge bg-info mb-3 px-3 py-2 rounded-pill">Sáng Tạo - Kết Nối - Phát Triển</span>
                <h1 class="mb-4">Hệ Thống Quản Lý <br><span class="text-info">CLB Sinh Viên</span></h1>
                <p class="mb-5">Nền tảng giúp tối ưu hóa việc quản lý thành viên, tổ chức sự kiện và gắn kết cộng đồng sinh viên năng động.</p>
                <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start">
                    <a href="#modules" class="btn btn-custom btn-primary-custom shadow-lg">Khám Phá Các Chức Năng</a>
                    <a href="#" class="btn btn-custom btn-outline-light">Tìm Hiểu Về CLB</a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
                <img src="https://cdni.iconscout.com/illustration/premium/thumb/student-club-illustration-download-in-svg-png-gif-file-formats--groups-communities-activities-community-pack-people-illustrations-5373307.png" alt="CLB Illustration" class="img-fluid animate__animated animate__fadeInRight">
            </div>
        </div>
    </div>
</section>

<!-- MODULES PREVIEW SECTION (5 MỤC CHÍNH) -->
<section id="modules" class="modules-section">
    <div class="container">
        <div class="section-header">
            <h2>Hệ Thống Chức Năng</h2>
            <div class="line"></div>
        </div>

        <div class="row g-4">
            <!-- 1. Thành viên -->
            <div class="col-lg-4 col-md-6">
                <div class="module-card">
                    <div class="module-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h4>Thành Viên CLB</h4>
                    <p class="text-muted small">Quản lý danh sách, hồ sơ và phân loại chức vụ thành viên một cách khoa học.</p>
                </div>
            </div>

            <!-- 2. Sự kiện -->
            <div class="col-lg-4 col-md-6">
                <div class="module-card">
                    <div class="module-icon">
                        <i class="bi bi-calendar-event-fill"></i>
                    </div>
                    <h4>Sự Kiện CLB</h4>
                    <p class="text-muted small">Lên kế hoạch, quản lý địa điểm và nội dung các chương trình sắp diễn ra.</p>
                </div>
            </div>

            <!-- 3. Đăng ký -->
            <div class="col-lg-4 col-md-6">
                <div class="module-card">
                    <div class="module-icon">
                        <i class="bi bi-pencil-square"></i>
                    </div>
                    <h4>Đăng Ký Tham Gia</h4>
                    <p class="text-muted small">Hệ thống ghi nhận và duyệt đơn đăng ký của sinh viên cho các sự kiện.</p>
                </div>
            </div>

            <!-- 4. Tin tức -->
            <div class="col-lg-4 col-md-6">
                <div class="module-card">
                    <div class="module-icon">
                        <i class="bi bi-newspaper"></i>
                    </div>
                    <h4>Tin Tức CLB</h4>
                    <p class="text-muted small">Cập nhật những hoạt động mới nhất và các bài viết chia sẻ từ ban chủ nhiệm.</p>
                </div>
            </div>

            <!-- 5. Phân quyền -->
            <div class="col-lg-4 col-md-6">
                <div class="module-card border-primary border-bottom">
                    <div class="module-icon" style="background: rgba(76, 201, 240, 0.1); color: #4cc9f0;">
                        <i class="bi bi-shield-lock-fill"></i>
                    </div>
                    <h4>Phân Quyền Hệ Thống</h4>
                    <p class="text-muted small">Phân cấp vai trò quản lý giúp bảo mật thông tin và tối ưu hóa vận hành.</p>
                </div>
            </div>

            <!-- 6. Thêm một cái nữa cho đủ lưới 6 cái -->
            <div class="col-lg-4 col-md-6">
                <div class="module-card border-dashed">
                    <div class="module-icon" style="background: #eee; color: #999;">
                        <i class="bi bi-plus-circle-dotted"></i>
                    </div>
                    <h4>Mở Rộng</h4>
                    <p class="text-muted small">Khả năng nâng cấp thêm nhiều tính năng hữu ích trong tương lai.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="py-5">
    <div class="container">
        <div class="p-5 bg-dark text-white rounded-5 text-center shadow-lg" style="background: linear-gradient(45deg, #2b2d42 0%, #1a1b26 100%) !important;">
            <h2 class="fw-bold mb-4">Bạn Đã Sẵn Sàng Trải Nghiệm?</h2>
            <p class="mb-4 opacity-75">Tham gia cùng chúng tôi để xây dựng một môi trường sinh viên năng động hơn.</p>
            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-info px-4 py-2 rounded-pill fw-bold">Tham Gia Ngay</button>
                <button class="btn btn-outline-light px-4 py-2 rounded-pill">Liên Hệ Ban Quản Trị</button>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>