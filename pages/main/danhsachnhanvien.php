<link rel="stylesheet" href="css/table.css">
<?php
$sql = "SELECT * FROM nhanvien ORDER BY id_nhanvien DESC";
$qr = mysqli_query($mysqli, $sql);
?>

<body>
    <div class="main p-3">
        <div class="text-center">
            <div class="container" style="padding: 10px;">
                <div class="row justify-content-center mt-2">
                    <div class="col-lg-6">
                        <form class="form-inline" action="index.php?quanly=timkiemnhanvien" method="POST">
                            <div class="input-group w-100">
                                <input type="search" name="tukhoa" class="form-control" placeholder="Nhập tên nhân viên"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-success" type="submit" name="timkiem">Tìm
                                        kiếm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="header_fixed">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên nhân viên</th>
                            <th>Ngày sinh</th>
                            <th>Tài khoản</th>
                            <th>Mật khẩu</th>
                            <th>Quê quán</th>
                            <th>Số điện thoại</th>
                            <th>Chức vụ</th>
                            <th>Thời gian thêm</th>
                            <th>Thêm công việc</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($qr)) {
                    $i++;
                    ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $row['tennv'] ?></td>
                            <td><?php echo $row['ngaysinh'] ?></td>
                            <td><?php echo $row['taikhoan'] ?></td>
                            <td><?php echo $row['matkhau'] ?></td>
                            <td><?php echo $row['quequan'] ?></td>
                            <td><?php echo $row['sodienthoai'] ?></td>
                            <td><?php echo $row['chucvu'] ?></td>
                            <td><?php echo $row['thoigian'] ?></td>
                            <td><a class="them"
                                    href="index.php?quanly=themcongviec&id=<?php echo $row['id_nhanvien']  ?>">Thêm </a><br>
                            </td>
                            <td><a class="sua"
                                    href="index.php?quanly=suanhanvien&id=<?php echo $row['id_nhanvien'] ?>">Sửa</a><br>
                            </td>
                            <td><a class="delete"
                                    href="index.php?quanly=xulythemnhanvien&id=<?php echo $row['id_nhanvien'] ?>">Xóa</a><br>
                            </td>

                        </tr>
                        <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>