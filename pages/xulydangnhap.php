<?php
  include("../config/config.php");
  session_start();
  if(isset($_POST['dangnhap'])){
    $taikhoan = $_POST['taikhoan'];
    $matkhau = md5($_POST['matkhau']);
    $sql = "SELECT * FROM quanly WHERE taikhoan = '$taikhoan' AND matkhau = '$matkhau'";
    $result = mysqli_query($mysqli, $sql);

    $sql_sv = "SELECT * FROM nhanvien WHERE taikhoan = '$taikhoan' AND matkhau = '$matkhau'";
    $result_sv = mysqli_query($mysqli, $sql_sv);
    if(mysqli_num_rows($result) > 0 || mysqli_num_rows($result_sv) > 0){
        if(mysqli_num_rows($result) > 0 ){
            $row = mysqli_fetch_array($result);
            $_SESSION['tenql'] = $row['tenql'];
            $_SESSION['taikhoan'] = $row['taikhoan'];
            $_SESSION['id_ql'] = $row['id_ql']; 
            $_SESSION['vaitro'] = $row['vaitro'];
        }else if (mysqli_num_rows($result_sv) > 0) {
            $row_sv = mysqli_fetch_array($result_sv);
         $_SESSION['tennv'] = $row_sv['tennv'];
         $_SESSION['taikhoan'] = $row_sv['taikhoan'];
         $_SESSION['id_nhanvien'] = $row_sv['id_nhanvien'];
        }
    }
  }
?>
<script>
    if("<?php echo isset($_SESSION['id_ql']); ?>" === "1"){
        alert("Đăng nhập thành công");
        window.location.href = "../index.php"; 
    }else if("<?php echo isset($_SESSION['id_nhanvien']); ?>" === "1"){
        alert("Đăng nhập thành công");
        window.location.href = "../index.php";
    }else{
        alert("Đăng nhập thất bại");
        window.location.href = "../dangnhap.php"; 
    }
</script>

