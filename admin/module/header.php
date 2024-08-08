<div class = "adminheader">
    <ul class = "admin__ten">
    <?php
        if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
            unset($_SESSION['dangnhap']);
            header('Location:login.php');
        }
    ?>
    <li>
        <a href="admin.php?dangxuat=1">
            <i class="fa-solid fa-right-from-bracket"></i>
            Đăng Xuất
            <?php 
            // if(isset($_SESSION['dangnhap'])){  
            // echo $_SESSION['dangnhap']; 
            // }
            ?>
        </a>
    </li>
    <ul>
</div>

