<?php
  $sql = "SELECT * FROM congviec WHERE id_cv = '$_GET[id]'";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);

 $sql_nv = "SELECT * FROM nhanvien WHERE id_nhanvien  = '$_GET[idnv]'";
    $query_nv = mysqli_query($mysqli, $sql_nv);
    $row_nv = mysqli_fetch_array($query_nv)
?>
<div class="main p-3">
    <div class="text-center">
    <h6 style="text-align: center;padding: 10px;">Cập nhập tiêu chí cho : <?php echo $row_nv['tennv'] ?></h6>
        <section class="container my-2 bg-secondary w-50 text-light p-2">
        <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Cập nhập tiêu chí</h6>
        <form class="row g-3 p-3" method="POST" action="index.php?quanly=xulythemcongviec&id=<?php echo $_GET['id']; ?>&idnv=<?php echo $_GET['idnv']; ?>&idtc=<?php echo $_GET['idtc']; ?>" enctype="multipart/form-data">

                <div class="col-md-12">
                    <label for="inputState" class="form-label">Criteria</label>
                    <select id="inputState" class="form-select" name="criteria">
                        <?php
                            $sql_tieuchi ="SELECT* FROM tieuchi;";
                            $query_tieuchi = mysqli_query($mysqli,$sql_tieuchi);
                            while($row_tieuchi = mysqli_fetch_array($query_tieuchi)){
                        ?>
                        <option value="<?php echo $row_tieuchi['id_tieuchi'] . '|' . $row_tieuchi['criteria']; ?>"><?php echo $row_tieuchi['criteria'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="themtieuchi">Thêm tiêu chí</button>
                </div>
            </form>
        </section>
    </div>
</div>
