<!-- Đổ dữ liệu sản phẩm -->
<div class = "sanpham">
    </div>
    <?php
        if(isset($_GET['trang'])){
            $page=$_GET['trang'];
        }else{
            $page= 1;
        }
        if($page == '' || $page==1){
            $begin=0;
        }else{
            $begin=($page*10)-10;
        }
        $sql_sanpham = "SELECT * FROM sanpham,danhmuc WHERE sanpham.iddanhmuc=danhmuc.iddanhmuc ORDER BY sanpham.idsanpham DESC LIMIT $begin,10";
        $query_sanpham = mysqli_query($mysqli, $sql_sanpham);
    ?>
<!-- xem sản phẩm -->
    <div class = "sanpham__content">
            <?php
             while($row = mysqli_fetch_array($query_sanpham)){
            ?>
            <?php
             }
            ?>
    </div>
</div>
<div class = "maincontent">
    <!----------------------------------------------------- Tin tức ---------------------------------------------->
    <div>
        <?php
            include("../page/tintuc.php");
        ?>
    </div>
    <!----------------------------------------------------- Slideshow  ---------------------------------------------->
    <div>
        <?php
            include("../page/slideshow.php");
        ?>
    </div>
    <!----------------------------------------------------- Danh mục ---------------------------------------------->
    <div>
        <?php
            include("../page/menu.php");
        ?>
    </div>
    <!----------------------------------------------------- Sản phẩm mới nhất ---------------------------------------------->
    <div>
        <?php
            include("../page/spmoinhat.php");
        ?>
    </div>
    <!----------------------------------------------------- Sản phẩm nổi bật ---------------------------------------------->
    <div>
        <?php
            include("../page/spnoibat.php");
        ?>
    </div>
    <!----------------------------------------------------- Giới thiệu ---------------------------------------------->
    <div>
        <?php
            include("../page/gioithieu.php");
        ?>
    </div>
</div>

