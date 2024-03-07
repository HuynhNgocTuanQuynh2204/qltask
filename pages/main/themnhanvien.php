<div class="main p-3">
    <div class="text-center">
        <section class="container my-2 bg-secondary w-50 text-light p-2">
        <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Thêm nhân viên</h6>
            <form class="row g-3 p-3" method="POST" action="index.php?quanly=xulythemnhanvien" enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" id="validationDefault01" name="tennv" placeholder="Tên nhân viên"
                        required>
                </div>
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Ngày sinh</label>
                    <input type="date" class="form-control" id="validationDefault01" name="ngaysinh" placeholder="Ngày sinh"
                        required>
                </div>
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Tài khoản</label>
                    <input type="text" class="form-control" id="validationDefault01" name="taikhoan" placeholder="Email ..."
                        required>
                </div>
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" id="validationDefault01" name="matkhau" placeholder="Mật khẩu ..."
                        required>
                </div>
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Quê quán</label>
                    <input type="text" class="form-control" id="validationDefault01" name="quequan" placeholder="Quê quán"
                        required>
                </div>
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="validationDefault01" name="sodienthoai" placeholder="Số điện thoại"
                        required>
                </div>
                <div class="col-md-12">
                    <label for="validationDefault01" class="form-label">Chức vụ</label>
                    <input type="text" class="form-control" id="validationDefault01" name="chucvu" placeholder="Chức vụ"
                        required>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="themnhanvien">Thêm nhân viên</button>
                </div>
            </form>
        </section>
    </div>
</div>