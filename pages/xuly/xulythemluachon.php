<?php
  $Selection = $_POST['selection'];
  $Score = $_POST['score'];
  $Criteria = $_POST['criteria'];
  
  if(isset($_POST['themluachon'])){
    $sql_them = "INSERT INTO luachon(selection,score,id_tieuchi) VALUES ('$Selection','$Score','$Criteria')";
    $result = mysqli_query($mysqli, $sql_them);
    echo '<script type="text/javascript">alert("Thêm thông tin thành công");    window.location.href = "index.php?quanly=danhsachluachon"; </script>';

  }else if(isset($_POST['sualuachon'])){
    $id =$_GET['id'];
    $sql_sua = "UPDATE luachon SET selection = '$Selection', score = '$Score', id_tieuchi = '$Criteria' WHERE id_luachon = '$id'";
    $result = mysqli_query($mysqli, $sql_sua);
    echo '<script type="text/javascript">alert("Sửa thông tin thành công");    window.location.href = "index.php?quanly=danhsachluachon"; </script>';
  }else {
    $id =$_GET['id'];
    $sql_delete = "DELETE FROM luachon WHERE id_luachon = '$id'";
    $result = mysqli_query($mysqli, $sql_delete);
    echo '<script type="text/javascript">alert("Xóa thông tin thành công");    window.location.href = "index.php?quanly=danhsachluachon"; </script>';
  }
?>