<div class = "spnoibat">
    <!----------------------------------------------- Header ----------------------------------------- -->
    <div class = "container__header">
        <h2> SẢN PHẨM NỔI BẬT </h2>
        <!-- Chú thích -->
        <p class = "chuthich"> ------\\\------ </p>
    </div>
    <div class = "spnoibat__content">
        <!----------------------------------------------- Sản phẩm nổi bật 1 ----------------------------------------- -->
        <div class = "spnoibat1">
            <!-- Kết nối -->
            <?php
                $sql_sanpham = "SELECT * FROM sanpham, danhmuc WHERE sanpham.iddanhmuc=danhmuc.iddanhmuc and danhmuc.noibat = 3 ORDER BY sanpham.idsanpham DESC LIMIT $begin,1";
                $query_sanpham = mysqli_query($mysqli, $sql_sanpham);
            ?>
            
                <?php
                    while($row = mysqli_fetch_array($query_sanpham)){
                ?>
                    <!-- Danh sách 1 -->
                <div class = "spnoibat1__list">
                    <a href="index.php?quanly=sanpham&id=<?php echo $row['idsanpham'] ?>">
                        <img src="../admin/module/quanlysanpham/upload/<?php echo $row['hinhanhsanpham'] ?>">
                        <p class="tensp"><?php echo $row['tensanpham'] ?></p>
                        <p class="giasp"><?php echo number_format($row['giasanpham'],0,',','.') .'VND' ?></p>
                    </a>
                </div>
                <?php
                }
                ?>
            
        </div>
        <!----------------------------------------------- Sản phẩm nổi bật 2 ----------------------------------------- -->
        <div class = "spnoibat2">
            <!-- Kết nối -->
            <?php
                $sql_sanpham = "SELECT * FROM sanpham, danhmuc WHERE sanpham.iddanhmuc=danhmuc.iddanhmuc and danhmuc.noibat = 1 ORDER BY sanpham.idsanpham DESC LIMIT $begin,4";
                $query_sanpham = mysqli_query($mysqli, $sql_sanpham);
            ?>
            <!-- Nội dung 2 -->
            
                <?php
                    while($row = mysqli_fetch_array($query_sanpham)){
                ?>
                <!-- Danh sách 2 -->
                <div class = "spnoibat2__list">
                    <a href="index.php?quanly=sanpham&id=<?php echo $row['idsanpham'] ?>">
                        <img src="../admin/module/quanlysanpham/upload/<?php echo $row['hinhanhsanpham'] ?>">
                        <p class="tensp"><?php echo $row['tensanpham'] ?></p>
                        <p class="giasp"><?php echo number_format($row['giasanpham'],0,',','.') .'VND' ?></p>
                    </a>
                </div>
                <?php
                }
                ?>
            
        </div>
    </div>
</div>