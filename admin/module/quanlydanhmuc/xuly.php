<?php
include('../../conn/conn.php');

    $tenloaisp = $_POST['tendanhmuc'];
    $thutudanhmuc = $_POST['thutudanhmuc'];
    if(isset($_POST['themdanhmuc'])){
        $sql_them = "INSERT INTO danhmuc(tendanhmuc,thutudanhmuc) VALUE('".$tenloaisp."','".$thutudanhmuc."')";
        mysqli_query($mysqli,$sql_them);
        header('location:../../admin.php?action=quanlydanhmuc&query=them');
    }elseif(isset($_POST['suadanhmuc'])){
        $sql_update = "UPDATE danhmuc SET tendanhmuc='".$tenloaisp."', thutudanhmuc='".$thutudanhmuc."' WHERE iddanhmuc='$_GET[iddanhmuc]'";
        mysqli_query($mysqli,$sql_update);
        header('location:../../admin.php?action=quanlydanhmuc&query=them');    
    }else{
        $id = $_GET['iddanhmuc'];
        $sql_xoa = "DELETE FROM danhmuc WHERE iddanhmuc ='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('location:../../admin.php?action=quanlydanhmuc&query=them');
    }
?>
