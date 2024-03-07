<?php
  $id = $_GET ['id'];
  $idnv = $_GET ['idnv'];
  $idcv = $_GET ['idcv'];
  if(isset($_GET['id'])) {
    $sql = "DELETE FROM tieuchicongviec WHERE id_tccv = '$id'";
    $qr = mysqli_query($mysqli, $sql);
    echo '<script type="text/javascript">alert("Xóa tiêu chí thành công"); window.location.href = "index.php?quanly=danhsachtieuchicongviec1"; </script>';
  }else{
    $idlc = $_GET['idlc'];
    $sql_lc = "DELETE FROM luachoncongviec WHERE id_lccv = '$idlc'";
    $qr_lc = mysqli_query($mysqli, $sql_lc);
    echo '<script type="text/javascript">alert("Xóa lựa chọn thành công"); window.location.href = "index.php?quanly=danhsachluachoncongviec"; </script>';
  }
?>