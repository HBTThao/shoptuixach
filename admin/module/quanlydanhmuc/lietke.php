<div class = "adminquanly">
    <?php
        $sql_lietke_danhmuc = "SELECT * FROM danhmuc ORDER BY thutudanhmuc DESC";
        $query_lietke_danhmuc = mysqli_query($mysqli,$sql_lietke_danhmuc);
    ?>
    <div class = "adminquanly__lietke">
        <p class = "admin__ten"> LIỆT KÊ DANH MỤC </p>
        <table> 
            <tr>
                <th> Id </th>
                <th> Tên danh mục </th>
                <th> Quản lý </th>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($query_lietke_danhmuc)){
                $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['tendanhmuc'] ?></td>
                <td>
                    <a href="module/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $row['iddanhmuc'] ?>">Xóa</a> | <a href="?action=quanlydanhmuc&query=sua&iddanhmuc=<?php echo $row['iddanhmuc'] ?>">Sửa</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>