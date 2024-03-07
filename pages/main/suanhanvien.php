<?php
  $sql = "SELECT * FROM nhanvien WHERE id_nhanvien = '$_GET[id]'";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
?>
<div class="main p-3">
    <div class="text-center">
        <section class="container my-2 bg-secondary w-50 text-light p-2">
        <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Sửa nhân viên</h6>
            <form class="row g-3 p-3" method="POST" action="index.php?quanly=xulythemnhanvien&id=<?php echo $row['id_nhanvien'] ?>" enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" id="validationDefault01" name="tennv" placeholder="Tên nhân viên"
                        value="<?php echo $row['tennv'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Ngày sinh</label>
                    <input type="date" class="form-control" id="validationDefault01" name="ngaysinh" placeholder="Ngày sinh"
                    value="<?php echo $row['ngaysinh'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Tài khoản</label>
                    <input type="text" class="form-control" id="validationDefault01" name="taikhoan" placeholder="Email ..."
                    value="<?php echo $row['taikhoan'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" id="validationDefault01" name="matkhau" placeholder="Mật khẩu ..."
                    value="<?php echo $row['matkhau'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Quê quán</label>
                    <input type="text" class="form-control" id="validationDefault01" name="quequan" placeholder="Quê quán"
                    value="<?php echo $row['quequan'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="validationDefault01" name="sodienthoai" placeholder="Số điện thoại"
                    value="<?php echo $row['sodienthoai'] ?>">
                </div>
                <div class="col-md-12">
                    <label for="validationDefault01" class="form-label">Chức vụ</label>
                    <input type="text" class="form-control" id="validationDefault01" name="chucvu" placeholder="Chức vụ"
                    value="<?php echo $row['chucvu'] ?>">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="suanhanvien">Sửa nhân viên</button>
                </div>
            </form>
        </section>
    </div>
</div>