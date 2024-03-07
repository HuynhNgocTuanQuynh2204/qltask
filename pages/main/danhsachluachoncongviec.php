<link rel="stylesheet" href="css/table.css">
<?php
$sql = "SELECT * FROM luachoncongviec,congviec WHERE luachoncongviec.id_congviec = congviec.id_cv 
ORDER BY luachoncongviec.id_lccv DESC";
$qr = mysqli_query($mysqli, $sql);

?>

<body>
    <div class="main p-3">
        <div class="text-center">
        <div class="container" style="padding: 10px;">
                <div class="row justify-content-center mt-2">
                    <div class="col-lg-6">
                        <form class="form-inline" action="index.php?quanly=timkiemluachoncongviec" method="POST">
                            <div class="input-group w-100">
                                <input type="search" name="tukhoa" class="form-control" placeholder="Nhập tên lựa chọn" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-success" type="submit" name="timkiem">Tìm kiếm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <h4 style="text-align: center;padding: 10px;">Danh sách lựa chọn công việc</h4>
            <div class="header_fixed">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên lựa chọn</th>
                            <th>Số điểm</th>
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
                            <td><?php echo $row['luachon'] ?></td>
                            <td><?php echo $row['sodiem'] ?></td>
                            <td>
                                <a class="delete"
                                    href="index.php?quanly=xulyxoatieuchicongviec&idlc=<?php echo $row['id_lccv']; ?>">Xóa</a><br>
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