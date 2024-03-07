<div class="main p-3">
    <div class="text-center">
        <section class="container my-2 bg-secondary w-50 text-light p-2">
        <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Thêm lựa chọn</h6>
            <form class="row g-3 p-3" method="POST" action="index.php?quanly=xulythemluachon" enctype="multipart/form-data">
                <div class="col-md-12">
                    <label for="validationDefault01" class="form-label">Selection</label>
                    <input type="text" class="form-control" id="validationDefault01" name="selection" placeholder="Selection"
                        required>
                </div>
                <div class="col-md-12">
                    <label for="validationDefault01" class="form-label">Score</label>
                    <input type="text" class="form-control" id="validationDefault01" name="score" placeholder="Score"
                        required>
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Criteria</label>
                    <select id="inputState" class="form-select" name="criteria">
                        <?php
                            $sql_tieuchi ="SELECT* FROM tieuchi ORDER BY id_tieuchi DESC";
                            $query_tieuchi = mysqli_query($mysqli,$sql_tieuchi);
                            while($row_tieuchi = mysqli_fetch_array($query_tieuchi)){
                        ?>
                        <option value="<?php echo $row_tieuchi['id_tieuchi']  ?>"><?php echo $row_tieuchi['criteria'] ?></option>
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