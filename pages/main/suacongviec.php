<?php
  $sql = "SELECT * FROM congviec WHERE id_cv = '$_GET[id]'";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
?>
<div class="main p-3">
    <div class="text-center">
        <section class="container my-2 bg-secondary w-50 text-light p-2">
            <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Sửa công việc</h6>
            <form class="row g-3 p-3" method="POST"
                action="index.php?quanly=xulythemcongviec&id=<?php echo $row['id_cv'] ?>" enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Tên công việc</label>
                    <input type="text" class="form-control" id="validationDefault01" name="tencv"
                        placeholder="Tên công việc" value="<?php echo $row['tencongviec'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Phụ trách</label>
                    <select id="inputState" class="form-select" name="tennv">
                        <?php
                            $sql_tieuchi ="SELECT* FROM nhanvien ORDER BY id_nhanvien DESC";
                            $query_tieuchi = mysqli_query($mysqli,$sql_tieuchi);
                            while($row_tieuchi = mysqli_fetch_array($query_tieuchi)){
                        ?>
                        <option value="<?php echo $row_tieuchi['id_nhanvien']  ?>"
                            <?php if ($row['id_nhanvien'] ==$row_tieuchi['id_nhanvien']) echo 'selected'; ?>>
                            <?php echo $row_tieuchi['tennv'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="suacongviec">Sửa công việc</button>
                </div>
            </form>
        </section>
    </div>
</div>