<?php
include('../../conn/conn.php');

    $tensanpham = $_POST['tensanpham'];
    $masanpham = $_POST['masanpham'];
    $giasanpham = $_POST['giasanpham'];
    //xử lý hình ảnh
    $hinhanhsanpham = $_FILES['hinhanhsanpham']['name'];
    $hinhanhsanpham_tmp = $_FILES['hinhanhsanpham']['tmp_name'];
    $hinhanhsanpham = time().'_'.$hinhanhsanpham;
    $soluongsanpham = $_POST['soluongsanpham'];
    $noidungsanpham = $_POST['noidungsanpham'];
    $danhmuc = $_POST['danhmuc'];


    if(isset($_POST['themsanpham'])){
        //Thêm sản phẩm
        $sql_them = "INSERT INTO sanpham(tensanpham,masanpham,giasanpham,hinhanhsanpham,noidungsanpham,soluongsanpham,iddanhmuc) VALUE('".$tensanpham."','".$masanpham."','".$giasanpham."','".$hinhanhsanpham."','".$noidungsanpham."','".$soluongsanpham."','".$danhmuc."')";
        mysqli_query($mysqli,$sql_them);
        //di chuyển hình ảnh sau khi thêm dữ liệu
        move_uploaded_file($hinhanhsanpham_tmp,'upload/'.$hinhanhsanpham);
        header('location:../../admin.php?action=quanlysanpham&query=them');
    }elseif(isset($_POST['suasanpham'])){
        // Sửa sản phẩm
        if($hinhanhsanpham!=''){
            move_uploaded_file($hinhanhsanpham_tmp,'upload/'.$hinhanhsanpham);
            $sql_update = "UPDATE sanpham SET tensanpham='".$tensanpham."', masanpham='".$masanpham."',giasanpham='".$giasanpham."',hinhanhsanpham='".$hinhanhsanpham."',noidungsanpham='".$noidungsanpham."',soluongsanpham='".$soluongsanpham."',iddanhmuc='".$danhmuc."' WHERE idsanpham='$_GET[idsanpham]'";
            //Xóa ảnh cũ
            $sql = "SELECT * FROM sanpham WHERE idsanpham = '$_GET[idsanpham]' LIMIT 1";
            $query = mysqli_query ($mysqli,$sql);
            while($row =mysqli_fetch_array($query)){
            unlink('upload/'.$row['hinhanhsanpham']);
        }
        }else{
            $sql_update = "UPDATE sanpham SET tensanpham='".$tensanpham."', masanpham='".$masanpham."',giasanpham='".$giasanpham."',noidungsanpham='".$noidungsanpham."',soluongsanpham='".$soluongsanpham."',iddanhmuc='".$danhmuc."' WHERE idsanpham='$_GET[idsanpham]'";
        }
        mysqli_query($mysqli,$sql_update);
        header('location:../../admin.php?action=quanlysanpham&query=them');    
    }else{
        //Xóa sản phẩm
        $id = $_GET['idsanpham'];
        $sql = "SELECT * FROM sanpham WHERE idsanpham = '$id' LIMIT 1";
        $query = mysqli_query ($mysqli,$sql);
        while($row =mysqli_fetch_array($query)){
            unlink('upload/'.$row['hinhanhsanpham']);
        }
        $sql_xoa = "DELETE FROM sanpham WHERE idsanpham ='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('location:../../admin.php?action=quanlysanpham&query=them');
    }
?>
