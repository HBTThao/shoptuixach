<div class = "dangky">
    <div class = "container__header">
        <h2> ĐĂNG KÝ TÀI KHOẢN </h2>
        <!-- Chú thích -->
        <p class = "chuthich"> ------\\\------ </p>
    </div>
    <!-- Kết nối -->
    <?php
        if(isset($_POST['dangky'])){
            $tenkhachhang=$_POST['hovaten'];
            $email=$_POST['email'];
            $diachi=$_POST['diachi'];
            $matkhau=md5($_POST['matkhau']);
            $dienthoai=$_POST['dienthoai'];
            $sql_dangky = mysqli_query($mysqli,"INSERT INTO dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
            if($sql_dangky){
                echo '<p style="color:blue">Đăng Ký Thành Công</p>';
                $_SESSION['dangky'] = $tenkhachhang;
                $_SESSION['idkhachhang'] = mysqli_insert_id($mysqli);
                header('Location:index.php?quanly=giohang');
            }
        }
    ?>
    
    <form action="" method="POST">
        <div class = "dangky__content">
            <div class = "dangky__list">

                <p class = "tensp"> THÔNG TIN ĐĂNG NHẬP </p>
                <!-- Email -->
                <div>
                    <label> Email * </label></br>
                    <input type="text"  name="email">
                </div>
                <!-- Mật khẩu -->
                <div>
                    <label> Mật Khẩu * </label></br>
                    <input type="text"  name="matkhau">
                </div>

                <p class = "tensp"> THÔNG TIN CÁ NHÂN </p>
                <!-- Họ và tên -->
                <div>
                        <label> Họ Và Tên * </label></br>
                        <input type="text"  name="hovaten">
                    </div>
                <!-- Địa chỉ -->
                <div>
                    <label> Địa Chỉ * </label></br>
                    <input type="text" name="diachi">
                </div>
                <!-- SDT -->
                <div>
                    <label> Điện Thoại * </label></br>
                    <input type="text" name="dienthoai">
                </div>
            </div>
            <div class = "dangky__items">
                <div class = "dieukhoan">
                    <div >
                        <input type = "checkbox" class = "chapnhandk">
                    </div>
                    <div class = "noidungdk">
                        <p> I agree to receive information by email about offers, services, products and events from Hermes or other group companies, in accordance with the Privacy PolicyNew tab. </p>
                        <p> You can unsubscribe from email marketing communications via the “Unsubscribe” link at the bottom of each of our email promotional communications. </p>
                    </div>
                </div>
                <!-- Dăng ký -->
                <div>
                    <input type="submit" value="Đăng ký" class = "register">
                </div>
            </div>
        </div>
    </form>
</div>