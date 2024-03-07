<link rel="stylesheet" href="css/table.css">
<?php
$id = $_GET['id'];
$sql = "SELECT congviec.id_cv, congviec.tencongviec, congviec.thoigianthem, congviec.trangthai, congviec.id_nhanvien, 
tieuchicongviec.tieuchi AS tieuchi, 
luachoncongviec.luachon AS luachon, 
luachoncongviec.sodiem AS sodiem, 
nhanvien.tennv AS tennv, quanly.tenql AS tenql
FROM congviec
LEFT JOIN tieuchicongviec ON congviec.id_cv = tieuchicongviec.id_congviec 
LEFT JOIN luachoncongviec ON tieuchicongviec.id_tccv = luachoncongviec.id_tieuchicongviec
LEFT JOIN nhanvien ON congviec.id_nhanvien = nhanvien.id_nhanvien
LEFT JOIN quanly ON congviec.id_ql = quanly.id_ql
WHERE congviec.id_cv = '$id'
ORDER BY congviec.id_cv DESC";
$qr = mysqli_query($mysqli, $sql);
?>



<body>
    <div class="main p-3">
        <div class="text-center">
        <?php
                $sql_score = "SELECT SUM(sodiem) AS total_score FROM luachoncongviec WHERE id_congviec = '$id'";
                $qr_score = mysqli_query($mysqli, $sql_score);
                $row = mysqli_fetch_assoc($qr_score);
                $total_score = $row['total_score'];
                ?>
                <h6 style="text-align: center;padding: 10px;">Total score: <?php echo $total_score; ?></h6>

            <div class="header_fixed">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tiêu chí</th>
                            <th>Lựa chọn</th>
                            <th>Số điểm</th>
                            <th>Thời gian thêm</th>
                            <th>Trạng thái</th>
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
                            <td><?php echo $row['tieuchi'] ?></td>
                            <td><?php echo $row['luachon'] ?></td>
                            <td><?php echo $row['sodiem'] ?></td>
                            <td><?php echo $row['thoigianthem'] ?></td>
                            <td><?php if($row['trangthai']==0){
                                echo "Chưa hoàn thành";
                            }else{
                                echo "Đã hoàn thành";
                            } ?></td>

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