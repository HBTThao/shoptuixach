<div class = "adminquanly">
    <div class = "adminquanly__them">
        <p class = "admin__ten"> THÊM SẢN PHẨM </p>
        <form method="POST" action="module/quanlysanpham/xuly.php" enctype="multipart/form-data">    
            <div>
                <label> Tên sản phẩm: </label></br>
                <input type="text" name="tensanpham">
            </div>
            <div>
                <label> Mã sản phẩm: </label></br>
                <input type="text" name="masanpham">
            </div>
            <div>
                <label> Giá: </label></br>
                <input type="text" name="giasanpham">
            </div>
            <div>
                <label> Hình ảnh: </label></br>
                <input type="file" name="hinhanhsanpham">
            </div>
            <div>
                <label> Nội dung: </label></br>
                <textarea name="noidungsanpham" id="" cols="20" rows="10"></textarea>
            </div>
            <div>
                <label> Số lượng: </label></br>
                <input type="text" name="soluongsanpham">
            </div>
            <div>
                <label> Danh mục: </label></br>
                    <select name="danhmuc">
                    <?php
                    $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY iddanhmuc DESC";
                    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    ?>
                    <option value="<?php echo $row_danhmuc['iddanhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                    <?php
                    }
                    ?>
                    </select>
                </div>
            <div>
                <input type="submit" name="themsanpham" value="Thêm Sản Phẩm" class = "admin__submit">
            </div>
        </form>
    </div>
</div>