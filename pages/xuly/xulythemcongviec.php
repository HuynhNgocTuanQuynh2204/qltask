<?php
    require("carbon/autoload.php");
    use Carbon\Carbon;
    use Carbon\CarbonInterval;
    $now = Carbon::now('Asia/Ho_Chi_Minh');
    $now->format('Y-m-d H:i:s');
    $tennv = $_POST['tennv']; 
    $tencv = $_POST['tencv'];
    $id_ql = $_SESSION['id_ql'];
    if(isset($_POST['themcongviec'])){
      // Kiểm tra xem công việc đã tồn tại hay chưa bằng cách kiểm tra tên công việc
      $sql_check = "SELECT * FROM congviec WHERE tencongviec = '$tencv'";
      $result_check = mysqli_query($mysqli, $sql_check);
      if(mysqli_num_rows($result_check) > 0){
          // Nếu công việc đã tồn tại, hiển thị thông báo và chuyển hướng người dùng
          echo '<script type="text/javascript">alert("Công việc đã tồn tại"); window.location.href = "index.php?quanly=themcongviec"; </script>';
      } else {
        $sql_them = "INSERT INTO congviec(id_nhanvien,id_ql,tencongviec,thoigianthem,thoigianhoanthanh,trangthai) VALUES ('$tennv','$id_ql','$tencv','$now',0,0)";
        $result = mysqli_query($mysqli, $sql_them);
        echo '<script type="text/javascript">alert("Thêm thông tin thành công");    window.location.href = "index.php?quanly=danhsachcongviec"; </script>';
      }
  }else  if(isset($_POST['suacongviec'])){
    $id =$_GET['id'];
    $sql_sua = "UPDATE congviec SET id_nhanvien = '$tennv',tencongviec ='$tencv' WHERE id_cv = '$id'";
    $result = mysqli_query($mysqli, $sql_sua);
    echo '<script type="text/javascript">alert("Sửa thông tin thành công");    window.location.href = "index.php?quanly=danhsachcongviec"; </script>';
  }else if(isset($_POST['themtieuchi'])){
    $id = $_GET['id'];
    $idnv = $_GET['idnv'];
    $idtc = $_GET['idtc'];
    $criteria = $_POST['criteria'];
    
    // Tách 'id_tieuchi' và 'criteria' từ chuỗi 'criteria'
    list($id_tieuchi, $criteria) = explode('|', $criteria);
    $sql_check = "SELECT * FROM tieuchicongviec WHERE tieuchi = '$criteria'";
    $result_check = mysqli_query($mysqli, $sql_check);
    if(mysqli_num_rows($result_check) > 0){
      // Nếu công việc đã tồn tại, hiển thị thông báo và chuyển hướng người dùng
      echo "<script type='text/javascript'>alert('Công việc đã tồn tại'); window.location.href = 'index.php?quanly=capnhap&id=$id&idnv=$idnv&idtc=$idtc'; </script>";

    }else{
    $sql_sua = "INSERT INTO tieuchicongviec(tieuchi, id_congviec, id_tieuchi) VALUES ('$criteria', '$id', '$id_tieuchi')";
    $result = mysqli_query($mysqli, $sql_sua);
        echo '<script type="text/javascript">alert("Thêm tiêu chí thành công"); window.location.href = "index.php?quanly=danhsachcongviec"; </script>';
    }
}

else if(isset($_POST['themluachon'])){
  $id = $_GET['idcv'];
  $idtc = $_GET['idtc'];
  $idnv = $_GET['idnv'];
  $idtccv = $_GET['idtccv'];
  $selection = $_POST['selection'];
  
  // Tách 'id_luachon' và 'selection' từ chuỗi 'selection'
  list($id_luachon, $selection) = explode('|', $selection);
  $sql_check = "SELECT * FROM luachoncongviec WHERE luachon = '$selection'";
  $result_check = mysqli_query($mysqli, $sql_check);
  if(mysqli_num_rows($result_check) > 0){
    // Nếu công việc đã tồn tại, hiển thị thông báo và chuyển hướng người dùng
    echo "<script type='text/javascript'>alert('Công việc đã tồn tại'); window.location.href = 'index.php?quanly=themluachoncongviec&idtc=$idtc&idcv=$id&idnv=$idnv&idtccv=$idtccv'; </script>";

  }else{
  // Thực hiện truy vấn để lưu dữ liệu
  $sql_sua = "INSERT INTO luachoncongviec(luachon, sodiem, id_congviec,id_tieuchicongviec) VALUES ('$selection', '$id_luachon', '$id', '$idtccv')";
  $result = mysqli_query($mysqli, $sql_sua);

      echo '<script type="text/javascript">alert("Thêm lựa thành công"); window.location.href = "index.php?quanly=danhsachcongviec"; </script>';
  }
}

  else{
    $id =$_GET['id'];
    $sql_delete = "DELETE FROM congviec WHERE id_cv = '$id'";
    $result = mysqli_query($mysqli, $sql_delete);
    echo '<script type="text/javascript">alert("Xóa thông tin thành công");    window.location.href = "index.php?quanly=danhsachcongviec"; </script>';
  }

?>