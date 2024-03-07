<?php
  $sql = "SELECT * FROM luachon WHERE id_luachon = '$_GET[id]'";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
?>
<div class="main p-3">
    <div class="text-center">
        <section class="container my-2 bg-secondary w-50 text-light p-2">
        <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Sửa lựa chọn</h6>
            <form class="row g-3 p-3" method="POST" action="index.php?quanly=xulythemluachon&id=<?php echo $row['id_luachon'] ?>" enctype="multipart/form-data">
                <div class="col-md-12">
                    <label for="validationDefault01" class="form-label">Selection</label>
                    <input type="text" class="form-control" id="validationDefault01" name="selection" placeholder="Selection"
                    value="<?php echo $row['selection'] ?>">
                </div>
                <div class="col-md-12">
                    <label for="validationDefault01" class="form-label">Score</label>
                    <input type="text" class="form-control" id="validationDefault01" name="score" placeholder="Score"
                    value="<?php echo $row['score'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Criteria</label>
                    <select id="inputState" class="form-select" name="criteria">
                        <?php
                            $sql_tieuchi ="SELECT* FROM tieuchi ORDER BY id_tieuchi DESC";
                            $query_tieuchi = mysqli_query($mysqli,$sql_tieuchi);
                            while($row_tieuchi = mysqli_fetch_array($query_tieuchi)){
                        ?>
                        <option value="<?php echo $row_tieuchi['id_tieuchi'] ?>"<?php if ($row['id_tieuchi'] == $row_tieuchi['id_tieuchi']) echo 'selected'; ?>><?php echo $row_tieuchi['criteria'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="sualuachon">Sửa lựa chọn</button>
                </div>
            </form>
        </section>
    </div>
</div>