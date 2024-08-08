<!----------------------------------------------- Chi tiết sản phẩm ------------------------------------------>
    <!-- Kết nối sql -->
        <?php
            $sql_chitietsanpham = "SELECT * FROM sanpham,danhmuc WHERE sanpham.iddanhmuc=danhmuc.iddanhmuc AND sanpham.idsanpham='$_GET[id]' LIMIT 1";
            $query_chitietsanpham = mysqli_query($mysqli, $sql_chitietsanpham);
            while($row_chitietsanpham = mysqli_fetch_array($query_chitietsanpham)){
        ?>
    <div class = "chitietsp">
        <!----------------------------------------------- Danh sách------------------------------------------>
        <div class = "chitietsp_items">
            <!------------------------------------------- Hình ảnh ---------------------------------------------->
            <div>
                <img src="../admin/module/quanlysanpham/upload/<?php echo $row_chitietsanpham['hinhanhsanpham'] ?>">
            </div>
            <!------------------------------------------- Thông tin sản phẩm -------------------------------------->
            <div class = "chitietsp__nd">
                <!-- Tên -->
                    <p class = "chitietsp__ten"><?php echo $row_chitietsanpham['tensanpham'] ?></p>
                <!-- Đánh giá -->
                    <ul class = "chitietsp__danhgia">
                        <li>
                            <a><i class="fa-solid fa-star"></i></a>
                        </li>
                        <li>
                            <a><i class="fa-solid fa-star"></i></a>
                        </li>
                        <li>
                            <a><i class="fa-solid fa-star"></i></a>
                        </li>
                        <li>
                            <a><i class="fa-solid fa-star"></i></a>
                        </li>
                        <li>
                            <a><i class="fa-regular fa-star"></i></a>
                        </li>
                    </ul>
                <!-- Giá -->
                    <p class = "chitietsp__gia"><?php echo number_format($row_chitietsanpham['giasanpham'],0,',',',').'VND' ?></p>
                <!-- Màu -->
                    <div class = "chitietsp__mau">
                        <!-- Trắng -->
                        <div class = "white">
                        </div>
                        <!-- Xám -->
                        <div class = "grey">
                        </div>
                        <!-- Đen -->
                        <div class = "black">
                        </div>
                        <!-- Nâu -->
                        <div class = "brown">
                        </div>
                    </div>
                <!-- Thêm vào giỏ hàng -->
                    <form method="POST" action="../page/content/themgiohang.php?idsanpham=<?php echo $row_chitietsanpham['idsanpham'] ?>">
                        <p class = "chitietsp__input"><input class="themgiohang" name="themgiohang" type="submit" value="Thêm Giỏ Hàng"></p>  
                    </form>
            </div>  
        </div>
        
        <!-- Mô tả sản phẩm -->
        <div class = "chitietsp__ttsp">
            <h4> MÔ TẢ SẢN PHẨM </h4>
            <p class = "motasp"><?php echo $row_chitietsanpham['noidungsanpham'] ?></p>
        </div>
    </div>
    <?php
        }
        ?>

