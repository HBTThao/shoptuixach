<?php
    $sql_sua_danhmuc = "SELECT * FROM danhmuc WHERE iddanhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmuc = mysqli_query($mysqli,$sql_sua_danhmuc);
?>
<p>Sửa Danh Mục</p>
<table border="1" width="50%" style=" border-collapse: collapse; ">
<form method="POST" action="module/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">    
    <?php
    while($dong = mysqli_fetch_array($query_sua_danhmuc)){
    ?>
    <tr>
        <td>Tên Danh Mục</td>
        <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"></td>
    </tr>
    <tr>
        <td>Thứ Tự</td>
        <td><input type="text" value="<?php echo $dong['thutudanhmuc'] ?>" name="thutudanhmuc"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa Danh Mục"></td>
    </tr>
    <?php
    }
    ?>
</form>
</table>