<?php
  $criteria = $_POST['criteria'];
  require("carbon/autoload.php");
  use Carbon\Carbon;
 use Carbon\CarbonInterval;
 $now = Carbon::now('Asia/Ho_Chi_Minh');
 $now->format('Y-m-d H:i:s');

  if(isset($_POST['themtieuchi'])){

    $sql_them = "INSERT INTO tieuchi(criteria,time) VALUES ('$criteria','$now')";
    $result = mysqli_query($mysqli, $sql_them);
    echo '<script type="text/javascript">alert("Thêm thông tin thành công");    window.location.href = "index.php?quanly=danhsachtieuchi"; </script>';
  }else if(isset($_POST['suatieuchi'])){
   $id =$_GET['id'];
    $sql_sua = "UPDATE tieuchi SET criteria = '$criteria', time = '$now' WHERE id_tieuchi = '$id'";
    $result = mysqli_query($mysqli, $sql_sua);
    echo '<script type="text/javascript">alert("Sửa thông tin thành công");    window.location.href = "index.php?quanly=danhsachtieuchi"; </script>';
  }else{
    $id =$_GET['id'];
    $sql_delete = "DELETE FROM tieuchi WHERE id_tieuchi = '$id'";
    $result = mysqli_query($mysqli, $sql_delete);
    echo '<script type="text/javascript">alert("Xóa thông tin thành công");    window.location.href = "index.php?quanly=danhsachtieuchi"; </script>';
  }



?>