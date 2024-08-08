<?php
session_start();
include('../../admin/conn/conn.php');
//Thêm sản phẩm vào giỏ hàng
if(isset($_POST['themgiohang'])){
    // session_destroy();
    $id=$_GET['idsanpham'];
    $soluongsp = 1;
    $sql="SELECT * FROM sanpham WHERE idsanpham='".$id."' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    $row = mysqli_fetch_array($query);
    if($row){
        //chuỗi đầu tiên là key chuỗi thứ 2 là cột trong csdl
        $new_sanpham[]=array('tensanpham'=>$row['tensanpham'],'idsanpham'=>$id,'giasanpham'=>$row['giasanpham'],'soluongsanpham'=>$soluongsp,'hinhanhsanpham'=>$row['hinhanhsanpham'],'masanpham'=>$row['masanpham']);
        // kiểm tra session giỏ hàng tồn tại
        if(isset($_SESSION['giohang'])){
            $found = false;
            foreach($_SESSION['giohang'] as $giohang_item){
                //nếu dữ liệu trùng
                if($giohang_item['idsanpham'] == $id){
                    $sanpham[]= array('tensanpham'=>$giohang_item['tensanpham'],'idsanpham'=>$giohang_item['idsanpham'],'giasanpham'=>$giohang_item['giasanpham'],'soluongsanpham'=>$soluongsp +1,'hinhanhsanpham'=>$giohang_item['hinhanhsanpham'],'masanpham'=>$giohang_item['masanpham']);
                    $found = true;
                //nếu dữ liệu ko trùng
                }else{
                    $sanpham[]= array('tensanpham'=>$giohang_item['tensanpham'],'idsanpham'=>$giohang_item['idsanpham'],'giasanpham'=>$giohang_item['giasanpham'],'soluongsanpham'=>$giohang_item['soluongsanpham'],'hinhanhsanpham'=>$giohang_item['hinhanhsanpham'],'masanpham'=>$giohang_item['masanpham']);
                }   
            }
            //liên kết dữ liệu sản phẩm mới với sản phẩm
            if($found == false){
                $_SESSION['giohang']=array_merge($sanpham,$new_sanpham);
            }else{
                $_SESSION['giohang'] = $sanpham;
            }
        }else{
            $_SESSION['giohang'] = $new_sanpham;
        }
    }
    header('Location:../index.php?quanly=giohang');
    
}
//xóa tất cả sản phẩm
if(isset($_GET['xoatatca'])&&$_GET['xoatatca']==1){
    unset($_SESSION['giohang']);
    header('Location:../index.php?quanly=giohang');
}
//xóa một sản phẩm
if(isset($_SESSION['giohang'])&&isset($_GET['xoa'])){
    $id=$_GET['xoa'];
    foreach($_SESSION['giohang'] as $giohang_item){
        if($giohang_item['idsanpham']!=$id){
            $sanpham[]= array('tensanpham'=>$giohang_item['tensanpham'],'idsanpham'=>$giohang_item['idsanpham'],'giasanpham'=>$giohang_item['giasanpham'],'soluongsanpham'=>$giohang_item['soluongsanpham'],'hinhanhsanpham'=>$giohang_item['hinhanhsanpham'],'masanpham'=>$giohang_item['masanpham']);
        }
    $_SESSION['giohang'] = $sanpham; 
    header('Location:../index.php?quanly=giohang');   
    }
}
//Tăng sản phẩm
if(isset($_GET['cong'])){
    $id=$_GET['cong'];
    foreach($_SESSION['giohang'] as $giohang_item){
        if($giohang_item['idsanpham']!=$id){
            $sanpham[]= array('tensanpham'=>$giohang_item['tensanpham'],'idsanpham'=>$giohang_item['idsanpham'],'giasanpham'=>$giohang_item['giasanpham'],
            'soluongsanpham'=>$giohang_item['soluongsanpham'],'hinhanhsanpham'=>$giohang_item['hinhanhsanpham'],'masanpham'=>$giohang_item['masanpham']);
            $_SESSION['giohang'] = $sanpham;
        }else{
            if($giohang_item['soluongsanpham']<=10){
                $congsoluong = $giohang_item['soluongsanpham'] + 1;    
                $sanpham[]= array('tensanpham'=>$giohang_item['tensanpham'],'idsanpham'=>$giohang_item['idsanpham'],'giasanpham'=>$giohang_item['giasanpham'],'soluongsanpham'=>$congsoluong,'hinhanhsanpham'=>$giohang_item['hinhanhsanpham'],'masanpham'=>$giohang_item['masanpham']);
            }else{
                $sanpham[]= array('tensanpham'=>$giohang_item['tensanpham'],'idsanpham'=>$giohang_item['idsanpham'],'giasanpham'=>$giohang_item['giasanpham'],'soluongsanpham'=>$giohang_item['soluongsanpham'],'hinhanhsanpham'=>$giohang_item['hinhanhsanpham'],'masanpham'=>$giohang_item['masanpham']);
            }
                $_SESSION['giohang'] = $sanpham;
            }
    }
    header('Location:../index.php?quanly=giohang');
}
//Giảm sản phẩm
if(isset($_GET['tru'])){
    $id=$_GET['tru'];
    foreach($_SESSION['giohang'] as $giohang_item){
        if($giohang_item['idsanpham']!=$id){
            $sanpham[]= array('tensanpham'=>$giohang_item['tensanpham'],'idsanpham'=>$giohang_item['idsanpham'],'giasanpham'=>$giohang_item['giasanpham'],
            'soluongsanpham'=>$giohang_item['soluongsanpham'],'hinhanhsanpham'=>$giohang_item['hinhanhsanpham'],'masanpham'=>$giohang_item['masanpham']);
            $_SESSION['giohang'] = $sanpham;
        }else{
            $congsoluong = $giohang_item['soluongsanpham'] - 1;
            if($giohang_item['soluongsanpham']>1){
                    
                $sanpham[]= array('tensanpham'=>$giohang_item['tensanpham'],'idsanpham'=>$giohang_item['idsanpham'],'giasanpham'=>$giohang_item['giasanpham'],'soluongsanpham'=>$congsoluong,'hinhanhsanpham'=>$giohang_item['hinhanhsanpham'],'masanpham'=>$giohang_item['masanpham']);
            }else{
                $sanpham[]= array('tensanpham'=>$giohang_item['tensanpham'],'idsanpham'=>$giohang_item['idsanpham'],'giasanpham'=>$giohang_item['giasanpham'],'soluongsanpham'=>$giohang_item['soluongsanpham'],'hinhanhsanpham'=>$giohang_item['hinhanhsanpham'],'masanpham'=>$giohang_item['masanpham']);
            }
                $_SESSION['giohang'] = $sanpham;
            }
    }
    header('Location:../index.php?quanly=giohang');
}
?>