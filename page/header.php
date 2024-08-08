<div class = "header">
    <!--------------------------------------- Icon - Đăng ký - Đăng nhập -------------------------------->
    <div class = "header1">
        <!-- Icon -->
        <ul>
			<li>
				<a href = "#" class = "separate"><i class="fa-brands fa-facebook"></i></a>
			</li>
			<li>
				<a href = "#" class = "separate"><i class="fa-brands fa-instagram" ></i></a>
			</li>
			<li>
				<a href = "#" class = "separate"><i class="fa-solid fa-envelope"></i></a>
			</li>
		</ul>
		<!-- Đăng ký - Đăng nhập -->
         <ul>
			<li>
				<a href = "index.php?quanly=dangky" class = "separate">Đăng ký </a>
			</li>
			<li>
				<a href="index.php?quanly=dangnhap">Đăng nhập</a>
			</li>
		</ul>
	</div>
	<!--------------------------------------- Logo - Search - Cart -------------------------------->
    <div class = "header2">

        <!-- Logo -->
        <div class = "logo">
            <a href = "index.php"><img src = "../img/logo.png"></a>
        </div>
		
        <!-- Search -->
        <div class = "search">   
            <?php
                include("sidebar/mainsidebar.php");
            ?>
		</div>

		<!-- Cart -->
		<div class = "cart">
			<a href="index.php?quanly=giohang"> 
				<i class="fa-solid fa-cart-shopping"></i>
				<span> Giỏ hàng </span>
			</a>
		</div>
    </div>
</div>