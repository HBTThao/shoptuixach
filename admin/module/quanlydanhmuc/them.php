<div class = "adminquanly">
    <div class = "adminquanly__them">
        <p class = "admin__ten"> THÊM DANH MỤC </p>
        <form method="POST" action="module/quanlydanhmuc/xuly.php">  
              <!-- Tên danh mục -->
            <div>
                <label> Tên danh mục: </label></br>
                <input type="text" name="tendanhmuc">
            </div>
            <!-- Thứ tự -->
            <div>
                <label> Thứ tự: </label></br>
                <input type="text" name="thutudanhmuc">
            </div>
            <!-- Input -->
            <div>
                <input type="submit" name="themdanhmuc" value="Thêm Danh Mục" class = "admin__submit">
            </div>
        </form>
    </div>
</div>