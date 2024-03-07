<div class="main p-3">
    <div class="text-center">
    <?php
                        if(isset($_SESSION['id_ql'])){
                        ?>
        <h1>
           Xin chào: <?php echo $_SESSION['tenql'] ?>
        </h1>
        <?php
                        }
                        ?>
                         <?php
                        if(isset($_SESSION['id_sv'])){
                        ?>
        <h1>
           Xin chào: <?php echo $_SESSION['tensv'] ?>
        </h1>
        <?php
                        }
                        ?>
                         <?php
                        if(isset($_SESSION['id_gv'])){
                        ?>
        <h1>
           Xin chào: <?php echo $_SESSION['tengv'] ?>
        </h1>
        <?php
                        }
                        ?>
                        
    </div>
</div>