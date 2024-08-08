<div class = "menu">
    <h2> DANH MỤC SẢN PHẨM </h2>
	<!-- Chú thích -->
    <p class = "chuthich"> ------\\\------ </p>
    <!-- Kết nối -->
    <?php
        $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY iddanhmuc DESC";
        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
        
    ?>
    <?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangky']);
    }
    ?>
    <div class="menu__list">
        <ul>
            <?php
                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
            ?>
            <li>
                <a href="index.php?quanly=danhmuc&id=<?php echo $row_danhmuc['iddanhmuc'] ?>">
                    <img src = "/doan1/img/gioithieu.png" alt="danh mục sản phẩm">
                    <p class = "tensp"><?php echo $row_danhmuc['tendanhmuc'] ?></p>
                </a>
            </li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>