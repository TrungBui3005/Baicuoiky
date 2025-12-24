<?php include 'header.php'; ?>
<?php include 'connect.php'; ?>

<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h2>Danh Sách Thành Viên</h2>
        </div>
        <div class="col-md-6 text-end">
            <!-- Nút thêm mới -->
            <a href="them_thanhvien.php" class="btn btn-success">
                + Thêm thành viên
            </a>
        </div>
    </div>

    <!-- Form Tìm kiếm -->
    <div class="card mb-4 bg-light">
        <div class="card-body">
            <form action="" method="GET" class="row g-3">
                <div class="col-md-8">
                    <input type="text" name="q" class="form-control" 
                           placeholder="Nhập tên, mã sinh viên hoặc ban..." 
                           value="<?php echo isset($_GET['q']) ? $_GET['q'] : ''; ?>">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary w-100">Tìm kiếm</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bảng Dữ liệu -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>STT</th>
                    <th>Mã SV</th>
                    <th>Họ và Tên</th>
                    <th>Ban</th>
                    <th>Chức vụ</th>
                    <th>Ngày tham gia</th>
                    <th class="text-center">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Xử lý tìm kiếm
                $search = "";
                if (isset($_GET['q']) && !empty($_GET['q'])) {
                    $keyword = $_GET['q'];
                    $search = "WHERE hoten LIKE '%$keyword%' OR masv LIKE '%$keyword%' OR ban LIKE '%$keyword%'";
                }

                $sql = "SELECT * FROM thanhvien $search ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $stt = 1;
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $stt++ . "</td>";
                        echo "<td>" . $row['masv'] . "</td>";
                        echo "<td><b>" . $row['hoten'] . "</b></td>";
                        echo "<td><span class='badge bg-info text-dark'>" . $row['ban'] . "</span></td>";
                        
                        // Tô màu chức vụ
                        $badgeColor = 'bg-secondary';
                        if($row['chucvu'] == 'Chủ nhiệm') $badgeColor = 'bg-danger';
                        elseif($row['chucvu'] == 'Trưởng ban') $badgeColor = 'bg-warning text-dark';
                        
                        echo "<td><span class='badge $badgeColor'>" . $row['chucvu'] . "</span></td>";
                        echo "<td>" . date('d/m/Y', strtotime($row['ngaythamgia'])) . "</td>";
                        echo "<td class='text-center'>
                                <a href='sua_thanhvien.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Sửa</a>
                                <a href='xoa_thanhvien.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Bạn có chắc muốn xóa?\");'>Xóa</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center'>Không tìm thấy dữ liệu</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php'; ?>