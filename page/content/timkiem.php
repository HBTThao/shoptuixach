<div class = "timkiem">
    <?php
        if(isset($_POST['timkiem'])){
            $tukhoa= $_POST['tukhoa'];
        }
        // Kết nối
        $sql_sanpham = "SELECT * FROM sanpham,danhmuc WHERE sanpham.iddanhmuc=danhmuc.iddanhmuc AND sanpham.tensanpham LIKE '%".$tukhoa."%'";
        $query_sanpham = mysqli_query($mysqli, $sql_sanpham);
    ?>
    <div class = "container__header">
        <h2> "<?php echo $_POST['tukhoa']; ?>" </h2>
        <!-- Chú thích -->
        <p class = "chuthich"> ------\\\------ </p>
    </div>
        <!-- Nội dung -->
    <div class = "timkiem__content">
        <?php
            while($row = mysqli_fetch_array($query_sanpham)){
        ?>
        <!-- Danh sách -->
        <div class = "timkiem__list">
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