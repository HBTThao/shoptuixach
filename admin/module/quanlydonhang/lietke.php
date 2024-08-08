<div class = "adminquanly">
    <?php
        $sql_lietke_cart = "SELECT * FROM cart  ORDER BY idcart DESC";
        $query_lietke_cart = mysqli_query($mysqli,$sql_lietke_cart);
    ?>
    <div class = "adminquanly__lietke">
        <p class = "admin__ten"> LIỆT KÊ ĐƠN HÀNG </p>
        <table> 
            <tr>
                <th> Id cart </th>
                <th> Id khách hàng </th>
                <th> Codecart </th>
                <th> Cartstatus </th>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($query_lietke_cart)){
                $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['idkhachhang'] ?></td>
                <td><?php echo $row['codecart'] ?></td>
                <td><?php echo $row['cartstatus'] ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>
