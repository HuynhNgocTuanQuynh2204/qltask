<div class="wrapper">
    <style>
    .wrapper {
        display: flex;
    }
    </style>
    <?php
        include("sidebar/sidebar.php")
        ?>

    <?php
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            } else {
                $tam = '';
            }
            if($tam =='danhsachtieuchi'){
                include("main/danhsachtieuchi.php");
            }
            else if($tam =='themtieuchi'){
                include("main/themtieuchi.php");
            }

            else if($tam =='suatieuchi'){
                include("main/suatieuchi.php");
            }

            else if($tam =='timkiemtieuchi'){
                include("main/timkiemtieuchi.php");
            }

            else if($tam =='xulythemtieuchi'){
                include("xuly/xulythemtieuchi.php");
            }
            
            else if($tam =='themluachon'){
                include("main/themluachon.php");
            }

            else if($tam =='themcongviec'){
                include("main/themcongviec.php");
            }


            else if($tam =='danhsachluachon'){
                include("main/danhsachluachon.php");
            }

            else if($tam =='xulythemluachon'){
                include("xuly/xulythemluachon.php");
            }
            
            else if($tam =='sualuachon'){
                include("main/sualuachon.php");
            }

            else if($tam =='timkiemluachon'){
                include("main/timkiemluachon.php");
            }

            else if($tam =='danhsachnhanvien'){
                include("main/danhsachnhanvien.php");
            }

            else if($tam =='themnhanvien'){
                include("main/themnhanvien.php");
            }

            else if($tam =='xulythemnhanvien'){
                include("xuly/xulythemnhanvien.php");
            }

            else if($tam =='suanhanvien'){
                include("main/suanhanvien.php");
            }

            else if($tam =='timkiemnhanvien'){
                include("main/timkiemnhanvien.php");
            }

            else if($tam =='danhsachcongviec'){
                include("main/danhsachcongviec.php");
            }


            else if($tam =='danhsachcongviecdaydu'){
                include("main/danhsachcongviecdaydu.php");
            }

            else if($tam =='danhsachtieuchicongviec'){
                include("main/danhsachtieuchicongviec.php");
            }

            else if($tam =='timkiemcongviec'){
                include("main/timkiemcongviec.php");
            }

            else if($tam =='doimatkhau'){
                include("main/doimatkhau.php");
            }

            else if($tam =='timkiemtieuchicongviec'){
                include("main/timkiemtieuchicongviec.php");
            }

            else if($tam =='timkiemcongviecdaydu'){
                include("main/timkiemcongviecdaydu.php");
            }


            else if($tam =='timkiemluachoncongviec'){
                include("main/timkiemluachoncongviec.php");
            }

            else if($tam =='xulythemcongviec'){
                include("xuly/xulythemcongviec.php");
            }

            else if($tam =='xulyxoatieuchicongviec'){
                include("xuly/xulyxoatieuchicongviec.php");
            }

            else if($tam =='chitietcongviec'){
                include("main/chitietcongviec.php");
            }

            else if($tam =='suacongviec'){
                include("main/suacongviec.php");
            }

            else if($tam =='danhsachluachoncongviec'){
                include("main/danhsachluachoncongviec.php");
            }

            else if($tam =='danhsachtieuchicongviec1'){
                include("main/danhsachtieuchicongviec1.php");
            }
            
            else if($tam =='themluachoncongviec'){
                include("main/themluachoncongviec.php");
            }

            else if($tam =='capnhap'){
                include("main/capnhap.php");
            }
            
            
            else {
                include("main/index.php");
            }
          ?>
</div>