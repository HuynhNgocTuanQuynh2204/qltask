<link rel="stylesheet" href="css/table.css">
<?php
 if(isset($_POST['timkiem'])){
    $tukhoa = $_POST['tukhoa'];
} else{
    $tukhoa = '';
}

$sql = "SELECT * FROM tieuchicongviec,congviec WHERE tieuchicongviec.id_congviec = congviec.id_cv AND tieuchicongviec.tieuchi LIKE '%" . $tukhoa . "%'";
$qr = mysqli_query($mysqli, $sql);

?>

<body>
    <div class="main p-3">
        <div class="text-center">
        <div class="container" style="padding: 10px;">
                <div class="row justify-content-center mt-2">
                    <div class="col-lg-6">
                        <form class="form-inline" action="index.php?quanly=timkiemtieuchicongviec" method="POST">
                            <div class="input-group w-100">
                                <input type="search" name="tukhoa" class="form-control" placeholder="Nhập tên tiêu chí" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-success" type="submit" name="timkiem">Tìm kiếm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <h6 style="text-align: center;padding: 10px;">Tìm kiếm: <?php echo $_POST['tukhoa'];  ?></h6>
        <h4 style="text-align: center;padding: 10px;">Danh sách tiêu chí công việc</h4>
            <div class="header_fixed">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên công việc</th>
                            <th>Tiêu Chí</th>
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
                            <td>
                                <a class="delete"
                                    href="index.php?quanly=xulyxoatieuchicongviec&id=<?php echo $row['id_tccv']; ?>">Xóa</a><br>
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