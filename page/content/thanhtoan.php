<?php
    session_start();
    include('../../admin/conn/conn.php');
    $idkhachhang = $_SESSION['idkhachhang'];
    $code_order = rand(0,9999);
    $insert_cart = "INSERT INTO cart(idkhachhang,codecart,cartstatus) VALUE ('".$idkhachhang."','".$code_order."',1)";
    $cart_query = mysqli_query($mysqli,$insert_cart);
    if($cart_query){
        foreach($_SESSION[' cart '] as $key => $value) {
            $idsanpham = $value['idsp'];
            $soluongsanpham = $value['soluongsp'];
            $insert_order_details = "INSERT INTO cartdetails(idsp,codecart,soluongsp) VALUE ('".$idsp."','".$code_order."','".$soluongsp."')";
            mysqli_query($mysqli,$insert_order_details);
        }
    }
    unset($_SESSION['cart']);
    header('Location:../index.php?quanly=thankyou');

?> 