<?php
    $sql_sua_sanpham = "SELECT * FROM sanpham WHERE idsanpham='$_GET[idsanpham]' LIMIT 1";
    $query_sua_sanpham = mysqli_query($mysqli,$sql_sua_sanpham);
?>
<p>Sửa Sản Phẩm</p>
<table border="1" width="50%" style=" border-collapse: collapse; ">
<?php
while($row = mysqli_fetch_array($query_sua_sanpham)){
?>
<form method="POST" action="module/quanlysanpham/xuly.php?idsanpham=<?php echo $row['idsanpham']?>" enctype="multipart/form-data">    
    <tr>
        <td>Tên Sản Phẩm</td>
        <td><input type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham"></td>
    </tr>
    <tr>
        <td>Mã Sản Phẩm</td>
        <td><input type="text" value="<?php echo $row['masanpham'] ?>" name="masanpham"></td>
    </tr>
    <tr>
        <td>Giá Sản Phẩm</td>
        <td><input type="text" value="<?php echo $row['giasanpham'] ?>" name="giasanpham"></td>
    </tr>
    <tr>
        <td>Hình Ảnh</td>
        <td>
            <input type="file" name="hinhanhsanpham">
            <img src="module/quanlysanpham/upload/<?php echo $row['hinhanhsanpham'] ?>" width="100px">
        </td>
    </tr>
    <tr>
        <td>Nội Dung</td>
        <td><textarea name="noidungsanpham" id="" cols="20" rows="10"> <?php echo $row['noidungsanpham'] ?> </textarea></td>
    </tr>
    <tr>
        <td>Số Lượng</td>
        <td><input type="text" value="<?php echo $row['soluongsanpham'] ?>" name="soluongsanpham"></td>
    </tr>
    <tr>
        <td>Danh Mục Sản Phẩm</td>
        <td>
            <select name="danhmuc">
                <?php
                $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY iddanhmuc DESC";
                $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    if($row_danhmuc['iddanhmuc']==$row['iddanhmuc']){
                ?>
                <option selected value="<?php echo $row_danhmuc['iddanhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                <?php
                    }else{
                ?>
                <option value="<?php echo $row_danhmuc['iddanhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                <?php
                    }
                }
                ?>
             </select>
        </td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="suasanpham" value="Sửa Sản Phẩm"></td>
    </tr>
</form>
<?php
}
?>
</table>    