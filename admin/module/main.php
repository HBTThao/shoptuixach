<div class="adminmain">
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $tam = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $tam='';
            $query = '';
        }
        if($tam=='quanlydanhmuc' && $query=='them'){
            include("module/quanlydanhmuc/them.php");
            include("module/quanlydanhmuc/lietke.php");

        }elseif($tam=='quanlydanhmuc' && $query=='sua'){
            include("module/quanlydanhmuc/sua.php");

        }elseif($tam=='quanlysanpham' && $query=='them'){
            include("module/quanlysanpham/them.php");
            include("module/quanlysanpham/lietke.php");

        }elseif($tam=='quanlysanpham' && $query=='sua'){ 
            include("module/quanlysanpham/sua.php"); 

        }elseif($tam=='quanlynguoidung' && $query=='them'){ 
            include("module/quanlynguoidung/lietke.php"); 

        }elseif($tam=='quanlydonhang' && $query=='them'){ 
            include("module/quanlydonhang/lietke.php");   

        }else{
            include("module/dashboard.php");
        }
    ?>
</div>