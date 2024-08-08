<div class = "adminquanly">
    <?php
        $sql_lietke_sanpham = "SELECT * FROM sanpham, danhmuc WHERE sanpham.iddanhmuc = danhmuc.iddanhmuc ORDER BY idsanpham DESC";
        $query_lietke_sanpham = mysqli_query($mysqli,$sql_lietke_sanpham);
    ?>
    <div class = "adminquanly__lietke">
        <p class = "admin__ten"> LIỆT KÊ SẢN PHẨM </p>
        <table> 
            <tr>
                <th> Id</th>
                <th> Tên sản phẩm </th>
                <th> Mã sản phẩm </th>
                <th> Giá </th>
                <th> Hình ảnh </th>
                <th> Nội dung </th>
                <th> Số lượng </th>
                <th> Danh mục </th>
                <th> Quản lý </th>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($query_lietke_sanpham)){
                $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['tensanpham'] ?></td>
                <td><?php echo $row['masanpham'] ?></td>
                <td><?php echo $row['giasanpham'] ?></td>
                <td><img src="module/quanlysanpham/upload/<?php echo $row['hinhanhsanpham'] ?>" width="100px"></td>
                <td><?php echo $row['noidungsanpham'] ?></td>
                <td><?php echo $row['soluongsanpham'] ?></td>
                <td><?php echo $row['tendanhmuc'] ?></td>
                <td>
                    <a href="module/quanlysanpham/xuly.php?idsanpham=<?php echo $row['idsanpham'] ?>">Xóa</a> | <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['idsanpham'] ?>">Sửa</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>
