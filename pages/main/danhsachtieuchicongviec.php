<link rel="stylesheet" href="css/table.css">
<?php
$sql = "SELECT * FROM tieuchicongviec,congviec WHERE tieuchicongviec.id_congviec = congviec.id_cv AND tieuchicongviec.id_congviec = '$_GET[id]'
ORDER BY tieuchicongviec.id_tccv DESC";
$qr = mysqli_query($mysqli, $sql);

$sql = "SELECT * FROM nhanvien WHERE nhanvien.id_nhanvien = '$_GET[idnv]'";
$qr_nv = mysqli_query($mysqli, $sql);
$row_nv = mysqli_fetch_array($qr_nv);
?>

<body>
    <div class="main p-3">
        <div class="text-center">
        <h6 style="text-align: center;padding: 10px;">Danh sách tiêu chí công việc của: <?php echo $row_nv['tennv']  ?></h6>
            <div class="header_fixed">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên công việc</th>
                            <th>Tiêu Chí</th>
                            <th>Thêm lựa chọn</th>
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
                            <td><a class="sua"
                                    href="index.php?quanly=themluachoncongviec&idtc=<?php echo $row['id_tieuchi'] ?>&idcv=<?php echo $_GET['id'] ?>&idnv=<?php echo $_GET['idnv']; ?>&idtccv=<?php echo $row['id_tccv']; ?>">Thêm</a><br>
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