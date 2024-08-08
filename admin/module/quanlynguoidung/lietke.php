<div class = "adminquanly">
    <?php
        $sql_lietke_dangky = "SELECT * FROM dangky  ORDER BY iddangky DESC";
        $query_lietke_dangky = mysqli_query($mysqli,$sql_lietke_dangky);
    ?>
    <div class = "adminquanly__lietke">
        <p class = "admin__ten"> LIỆT KÊ NGƯỜI DÙNG </p>
        <table> 
            <tr>
                <th> Id người dùng </th>
                <th> Tên người dùng </th>
                <th> Email </th>
                <th> Địa chỉ </th>
                <th> Mật khẩu </th>
                <th> Điện thoại </th>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($query_lietke_dangky)){
                $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['tenkhachhang'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['diachi'] ?></td>
                <td><?php echo $row['matkhau'] ?></td>
                <td><?php echo $row['dienthoai'] ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>
