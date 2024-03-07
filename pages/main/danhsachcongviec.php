<link rel="stylesheet" href="css/table.css">
<?php
$sql = "SELECT congviec.id_cv, congviec.tencongviec, congviec.thoigianthem, congviec.trangthai, congviec.id_nhanvien, 
    GROUP_CONCAT(DISTINCT tieuchicongviec.tieuchi) AS tieuchi, 
    GROUP_CONCAT(DISTINCT luachoncongviec.luachon) AS luachon, 
    GROUP_CONCAT(DISTINCT luachoncongviec.sodiem) AS sodiem, 
    GROUP_CONCAT(DISTINCT tieuchicongviec.id_tccv) AS id_tccv,
    nhanvien.tennv AS tennv, quanly.tenql AS tenql
    FROM congviec
    LEFT JOIN tieuchicongviec ON congviec.id_cv = tieuchicongviec.id_congviec 
    LEFT JOIN luachoncongviec ON congviec.id_cv = luachoncongviec.id_congviec
    LEFT JOIN nhanvien ON congviec.id_nhanvien = nhanvien.id_nhanvien
    LEFT JOIN quanly ON congviec.id_ql = quanly.id_ql
    GROUP BY congviec.id_cv
    ORDER BY congviec.id_cv DESC";
$qr = mysqli_query($mysqli, $sql);
?>




<body>
    <div class="main p-3">
        <div class="text-center">
            <div class="container" style="padding: 10px;">
                <div class="row justify-content-center mt-2">
                    <div class="col-lg-6">
                        <form class="form-inline" action="index.php?quanly=timkiemcongviec" method="POST">
                            <div class="input-group w-100">
                                <input type="search" name="tukhoa" class="form-control"
                                    placeholder="Nhập tên công việc..." aria-label="Search">
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
                            <th>Tên công việc</th>
                            <th>Tiêu chí</th>
                            <th>Lựa chọn</th>
                            <th>Số điểm</th>
                            <th>Thời gian thêm</th>
                            <th>Trạng thái</th>
                            <th>Phụ Trách</th>
                            <th>Người thêm</th>
                            <th>Thêm tiêu chí</th>
                            <th>Thêm lựa chọn</th>
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
                            <td><?php echo $row['tencongviec'] ?></td>
                            <td><?php echo $row['tieuchi'] ?></td>
                            <td><?php echo $row['luachon'] ?></td>
                            <td><?php echo $row['sodiem'] ?></td>
                            <td><?php echo $row['thoigianthem'] ?></td>
                            <td><?php if($row['trangthai']==0){
                                echo "Chưa hoàn thành";
                            }else{
                                echo "Đã hoàn thành";
                            } ?></td>
                            <td><?php echo $row['tennv'] ?></td>
                            <td><?php echo $row['tenql'] ?></td>
                            <td><a class="them"
                                    href="index.php?quanly=capnhap&id=<?php echo $row['id_cv'] ?>&idnv=<?php echo $row['id_nhanvien'] ?>&idtc=<?php echo $row['id_cv'] ?>">Thêm</a><br>
                            </td>
                            <td>
                                <a class="ngung"
                                    href="index.php?quanly=danhsachtieuchicongviec&id=<?php echo $row['id_cv'] ?>&idnv=<?php echo $row['id_nhanvien'] ?>&idtccv=<?php echo $row['id_tccv'] ?>">
                                    Thêm
                                </a>
                                <br>
                            </td>
                              
                            <td><a class="sua"
                                    href="index.php?quanly=suacongviec&id=<?php echo $row['id_cv'] ?>">Sửa</a><br>
                            </td>
                            <td><a class="delete"
                                    href="index.php?quanly=xulythemcongviec&id=<?php echo $row['id_cv'] ?>">Xóa</a><br>
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