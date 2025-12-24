<?php include 'header.php'; ?>
<?php include 'connect.php'; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Thêm Thành Viên Mới</h4>
                </div>
                <div class="card-body">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $masv = $_POST['masv'];
                        $hoten = $_POST['hoten'];
                        $ban = $_POST['ban'];
                        $chucvu = $_POST['chucvu'];
                        $ngaythamgia = $_POST['ngaythamgia'];

                        $sql = "INSERT INTO thanhvien (masv, hoten, ban, chucvu, ngaythamgia) 
                                VALUES ('$masv', '$hoten', '$ban', '$chucvu', '$ngaythamgia')";

                        if ($conn->query($sql) === TRUE) {
                            echo "<div class='alert alert-success'>Thêm thành viên thành công! <a href='danhsach_thanhvien.php'>Quay lại danh sách</a></div>";
                        } else {
                            echo "<div class='alert alert-danger'>Lỗi: " . $conn->error . "</div>";
                        }
                    }
                    ?>

                    <form method="POST" action="">
                        <div class="mb-3">
                            <label class="form-label">Mã Sinh Viên</label>
                            <input type="text" name="masv" class="form-control" required placeholder="Ví dụ: 71DCTT22...">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Họ và Tên</label>
                            <input type="text" name="hoten" class="form-control" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Ban</label>
                                <select name="ban" class="form-select">
                                    <option>Truyền thông</option>
                                    <option>Kỹ thuật</option>
                                    <option>Hậu cần</option>
                                    <option>Đối ngoại</option>
                                    <option>Văn nghệ</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Chức vụ</label>
                                <select name="chucvu" class="form-select">
                                    <option>Thành viên</option>
                                    <option>Trưởng ban</option>
                                    <option>Phó chủ nhiệm</option>
                                    <option>Chủ nhiệm</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ngày tham gia</label>
                            <input type="date" name="ngaythamgia" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                        </div>
                        <button type="submit" class="btn btn-success">Lưu thông tin</button>
                        <a href="danhsach_thanhvien.php" class="btn btn-secondary">Hủy</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>