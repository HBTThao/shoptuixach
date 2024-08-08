<?php
    session_start();
    include('../admin/conn/conn.php');
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['username'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM adminwmp WHERE user='".$taikhoan."' AND pass='".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $_SESSION['dangnhap'] = $taikhoan && $matkhau;
            header("Location:admin.php");
        }else{
            // echo '<script>alert("Tài khoản hoặc Mật khẩu chưa chính xác, nhập lại.");</script>';
            header("Location:login.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adminlogin.css">
    <title> Đăng Nhập Admin </title>
</head>
<body>
    <div class="adminlogin" >
        <div class = "container__header">
        <h2> ĐĂNG NHẬP TÀI KHOẢN </h2>
        <!-- Chú thích -->
        <p class = "chuthich"> ------\\\------ </p>

        <form action="" autocomplete="off" method="POST"> 
            <div class = "adminlogin__content">
                <div>
                    <label>Tài Khoản * </label>
                    <input type="text" name="username" class = "adminlogin__taikhoan">
                <div>
                <div>
                    <label>Mật Khẩu * </label>
                    <input type="password" name="password" class = "adminlogin__pass">
                </div>
                <div>
                    <input type="submit" name="dangnhap" value="Đăng Nhập" class = "adminlogin__dangnhap">
                </div>
            </div>
        </form>
    </div>
</html>
