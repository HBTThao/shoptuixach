<div class = "danhmuc">
<?php
	// Kết nối
    $sql_sanpham = "SELECT * FROM sanpham WHERE sanpham.iddanhmuc ='$_GET[id]' ORDER BY idsanpham DESC";
    $query_sanpham = mysqli_query($mysqli, $sql_sanpham);
    //Kết nối tên danh mục
    $sql_cate = "SELECT * FROM danhmuc WHERE danhmuc.iddanhmuc ='$_GET[id]' LIMIT 1";
    $query_cate = mysqli_query($mysqli, $sql_cate);
    $row_title = mysqli_fetch_array($query_cate);
?>
    <!---------------------------------------------- Header ------------------------------------------->
    <div class = "container__header">
        <h2><?php echo $row_title['tendanhmuc']?> </h2>
        <!-- Chú thích -->
        <p class = "chuthich"> ------\\\------ </p>
    </div>
    <!------------------------------------------ Menu danh mục --------------------------------------->
    <div class = "danhmuc__menu">
		<ul>
			<!-- Chất liệu -->
			<li>
				<p> Chất liệu <i class="fa-solid fa-chevron-down"></i></p>
				<ul>
					<li><a href = "#">Da PU trơn</a></li>
					<li><a href = "#">Da PU cá sấu</a></li>
				</ul>
			</li>
			<!-- Kiểu dáng -->
			<li>
				<p> Kiểu dáng <i class="fa-solid fa-chevron-down"></i></p>
				<ul>
					<li><a href = "#">Basic</a></li>
					<li><a href = "#">Hobo Bag</a></li>
				</ul>
			</li>
			<!-- Kích thước -->
			<li>
				<p> Kích thước <i class="fa-solid fa-chevron-down"></i></p>
				<ul>
					<li><a href = "#">Nhỏ</a></li>
					<li><a href = "#">Trung bình</a></li>
					<li><a href = "#">Lớn</a></li>
				</ul>
			</li>
			<!-- Màu sắc -->
			<li>
				<p> Màu sắc <i class="fa-solid fa-chevron-down"></i></p>
				<ul>
					<li><a href = "#">Trắng</a></li>
					<li><a href = "#">Đen</a></li>
                    <li><a href = "#">Xám</a></li>
					<li><a href = "#">Nâu</a></li>
				</ul>
			</li>
			<!-- Giá -->
			<li>
				<p> Giá <i class="fa-solid fa-chevron-down"></i></p>
				<ul>
					<li><a href = "#">Thấp đến cao</a></li>
					<li><a href = "#">Cao đến thấp</a></li>
				</ul>
			</li>
		</ul>
	</div>
    <!-- Nội dung -->
    <div class = "danhmuc__content">
            <?php
            while($row_sanpham = mysqli_fetch_array($query_sanpham)){
            ?>
            <!-- Danh sách -->
            <div class = "danhmuc__list">
                <a href="index.php?quanly=sanpham&id=<?php echo $row_sanpham['idsanpham'] ?>">
                    <img src="../admin/module/quanlysanpham/upload/<?php echo $row_sanpham['hinhanhsanpham'] ?>">
                    <p class="tensp"><?php echo $row_sanpham['tensanpham'] ?></p>
                    <p class="giasp"><?php echo number_format($row_sanpham['giasanpham'],0,',','.') .'VND' ?></p>
                </a>
            </div>

            <?php
            }
            ?>

        </ul> 
    </div>
</div>       