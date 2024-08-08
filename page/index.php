<!DOCTYPE html>
<html lang="en">
    <script type="text/javascript" src="https://cunghocweb.com/data-out/js/snow.js"></script>  
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> NEMO Women's Bag </title>
        <link rel = "stylesheet" href = "font/fontawesome-free-6.2.0-web/fontawesome-free-6.2.0-web/css/all.css">
        <link rel="stylesheet" href="../css/maincontent.css">
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/dangky.css">
        <link rel="stylesheet" href="../css/dangnhap.css">
        <link rel="stylesheet" href="../css/timkiem.css">
        <link rel="stylesheet" href="../css/giohang.css">
        <link rel="stylesheet" href="../css/donhang.css">
        <link rel="stylesheet" href="../css/tintuc.css">
        <link rel="stylesheet" href="../css/slideshow.css">
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="stylesheet" href="../css/thankyou.css">
        <link rel="stylesheet" href="../css/danhmuc.css">
        <link rel="stylesheet" href="../css/spmoinhat.css">
        <link rel="stylesheet" href="../css/spnoibat.css">
        <link rel="stylesheet" href="../css/sanpham.css">
        <link rel="stylesheet" href="../css/gioithieu.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>
    <body>
        <div class="main">
            <!------------------------------------------ Header ------------------------------>
            <div>
                <?php
                    include("../page/header.php");
                ?>
            </div>
            <!------------------------------------------ Container ------------------------------>
            <div class = "container">        
                <?php
                    session_start();
                    include("../admin/conn/conn.php");
                    include("../page/main.php");
                ?>
            </div>
                <!------------------------------------------ Footer ----------------------------------->
            <div>
                <?php
                    include("../page/footer.php");
                ?>
            </div>
        </div>
    </body>
</html>
