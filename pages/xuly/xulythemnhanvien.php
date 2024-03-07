<?php
    require("carbon/autoload.php");
    use Carbon\Carbon;
    use Carbon\CarbonInterval;
    $now = Carbon::now('Asia/Ho_Chi_Minh');
    $now->format('Y-m-d H:i:s');
    $tennv = $_POST['tennv'];
    $taikhoan = $_POST['taikhoan'];
    $matkhau = md5($_POST['matkhau']);
    $ngaysinh = $_POST['ngaysinh'];
    $quequan = $_POST['quequan'];
    $sodienthoai = $_POST['sodienthoai'];
    $chucvu = $_POST['chucvu'];
    
    if(isset($_POST['themnhanvien'])){
        $sql_them = "INSERT INTO nhanvien(tennv,ngaysinh,taikhoan,matkhau,quequan,sodienthoai,chucvu,thoigian) VALUES ('$tennv','$ngaysinh','$taikhoan','$matkhau','$quequan','$sodienthoai','$chucvu','$now')";
        $result = mysqli_query($mysqli, $sql_them);
        echo '<script type="text/javascript">alert("Thêm nhân viên thành công");    window.location.href = "index.php?quanly=danhsachnhanvien"; </script>';
    }else  if(isset($_POST['suanhanvien'])){
        $id =$_GET['id'];
        $sql_sua = "UPDATE nhanvien SET tennv = '$tennv', ngaysinh = '$ngaysinh', taikhoan = '$taikhoan', matkhau = '$matkhau', quequan = '$quequan', sodienthoai = '$sodienthoai', chucvu = '$chucvu' WHERE id_nhanvien = '$id'";
        $result = mysqli_query($mysqli, $sql_sua);
        echo '<script type="text/javascript">alert("Sửa nhân viên thành công");    window.location.href = "index.php?quanly=danhsachnhanvien"; </script>';
    }else{
        $id =$_GET['id'];
        $sql_delete = "DELETE FROM nhanvien WHERE id_nhanvien = '$id'";
        $result = mysqli_query($mysqli, $sql_delete);
        echo '<script type="text/javascript">alert("Xóa nhân viên thành công");    window.location.href = "index.php?quanly=danhsachnhanvien"; </script>';
    }



?>