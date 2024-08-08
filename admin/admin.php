<?php 
    session_start();
    if(!isset($_SESSION['dangnhap'])){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel = "stylesheet" href = "../font/fontawesome-free-6.2.0-web/fontawesome-free-6.2.0-web/css/all.css">
    <link rel="stylesheet" href="../css/adminmain.css">
    <link rel="stylesheet" href="../css/adminquanly.css">
</head>
<body>    
    <div class="wrapper">
        <!-------------------------------------------- Header -------------------------------------------------------->
        <div>  
            <?php
                include("conn/conn.php");
                include("module/header.php");
            ?>
        </div>
        <!-------------------------------------------------- Cotainer ---------------------------------------------------->
        <div class = "admincontainer">
            <?php
                include("module/menu.php");
                include("module/main.php");
            ?>
        </div>
    </div>
</body>
</html>