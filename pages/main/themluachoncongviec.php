<?php
  $sql = "SELECT * FROM congviec WHERE id_cv = '$_GET[idcv]'";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);

 $sql_nv = "SELECT * FROM nhanvien WHERE id_nhanvien  = '$_GET[idnv]'";
    $query_nv = mysqli_query($mysqli, $sql_nv);
    $row_nv = mysqli_fetch_array($query_nv)
?>
<div class="main p-3">
    <div class="text-center">
    <h6 style="text-align: center;padding: 10px;">Cập nhập lựa chọn cho : <?php echo $row_nv['tennv'] ?></h6>
        <section class="container my-2 bg-secondary w-50 text-light p-2">
        <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Cập nhập lựa chọn</h6>
        <form class="row g-3 p-3" method="POST" action="index.php?quanly=xulythemcongviec&idcv=<?php echo $_GET['idcv']; ?>&idtc=<?php echo $_GET['idtc']; ?>&idtccv=<?php echo $_GET['idtccv']; ?>&idnv=<?php echo $_GET['idnv']; ?>" enctype="multipart/form-data">


                <div class="col-md-12">
                    <label for="inputState" class="form-label">Selection</label>
                    <select id="inputState" class="form-select" name="selection">
                        <?php
                           $sql_luachon = "SELECT * FROM luachon WHERE id_tieuchi = '" . $_GET['idtc'] . "'";
                            $query_luachon = mysqli_query($mysqli,$sql_luachon);
                            while($row_luachon = mysqli_fetch_array($query_luachon)){
                        ?>
                        <option value="<?php echo $row_luachon['score'] . '|' . $row_luachon['selection']; ?>"><?php echo $row_luachon['selection'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="themluachon">Thêm lựa chọn</button>
                </div>
            </form>
        </section>
    </div>
</div>
