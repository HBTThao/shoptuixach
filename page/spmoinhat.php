<!-- Sản phẩm mới nhất -->
<div class = "spmoinhat">
    <div class = "container__header">
        <h2> SẢN PHẨM MỚI NHẤT </h2>
        <!-- Chú thích -->
        <p class = "chuthich"> ------\\\------ </p>
    </div>
    <!-- Kết nối -->
        <?php
            $sql_sanpham = "SELECT * FROM sanpham, danhmuc WHERE sanpham.iddanhmuc=danhmuc.iddanhmuc and danhmuc.moinhat = 3 ORDER BY sanpham.idsanpham DESC LIMIT $begin,8";
            $query_sanpham = mysqli_query($mysqli, $sql_sanpham);
        ?>
    <!-- Nội dung -->
    <div class = "spmoinhat__content">
        <?php
            while($row = mysqli_fetch_array($query_sanpham)){
        ?>
        <!-- Danh sách -->
        <div class = "spmoinhat__list">
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