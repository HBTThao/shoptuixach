<div class = "dangnhap">
    <div class = "container__header">
        <h2> ĐĂNG NHẬP TÀI KHOẢN </h2>
        <!-- Chú thích -->
        <p class = "chuthich"> ------\\\------ </p>
    </div>
    <!-- Kết nối sql -->
    <?php
        if(isset($_POST['dangnhap'])){
            $email = $_POST['email'];
            $matkhau = md5($_POST['password']);
            $sql = "SELECT * FROM dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
            $row = mysqli_query($mysqli,$sql);
            $count = mysqli_num_rows($row);
            if($count>0){
                $row_data = mysqli_fetch_array($row);
                $_SESSION['dangky'] = $row_data['tenkhachhang'];
                $_SESSION['idkhachhang'] = $row_data['iddangky']; 
                header("Location:index.php?quanly=giohang");
            }else{
                echo '<p style="color:red;">Email hoặc Mật Khẩu sai, nhập lại.</p>';
            }
        }

    ?>
    <form action="" autocomplete="off" method="POST"> 
            <div class = "dangnhap__content">
                <div>
                    <label> Tài Khoản * </label>
                    <input type="text" name="email" placeholder="Email" class = "user">
                </div>
                <div>
                    <label> Mật Khẩu * </label>
                    <input type="text" name="password" placeholder="Mật Khẩu" class = "pass">
                </div>
                <div>
                    <input type="submit" name="dangnhap" value="Đăng Nhập" class = "login">
                </div>
            </div>
        </form>
</div>