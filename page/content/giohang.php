<div class = "giohang">
    <!----------------------------------------------- Tiêu đề ------------------------------------------>
    <div class = "container__header">
        <h2> GIỎ HÀNG </h2>
        <!-- Chú thích -->
        <p class = "chuthich"> ------\\\------ </p>
    </div>

    <!----------------------------------------- Giỏ Hàng ------------------------------------------>
    <?php
        if(isset($_SESSION['dangky'])){
          echo '';
          //echo $_SESSION['idkhachhang'];
        }
    ?>


    <?php
        if(isset($_SESSION['giohang'])){
        }
    ?>
    <!--------------------------------------------------- Nội dung ----------------------------------------->
        <div class = "giohang__content">

            <?php
            if(isset($_SESSION['giohang'])){
              $i = 0;
              $tongtien = 0;
              foreach($_SESSION['giohang'] as $giohang_item){
                  $tamtinh = $giohang_item['soluongsanpham']*$giohang_item['giasanpham'];
                  $tongtien = $tongtien+$tamtinh;
                  $i++;
            ?>

            <!--------------------------------------------- Giỏ hàng có sản phẩm ---------------------------------------------->
            <div class = "giohang__list">
                <!-- Thứ tự -->
                <div class = "giohang__thutu">
                    <?php echo $i; ?>
                </div>
                <!-- Hình ảnh -->
                <div class = "giohang__img">
                    <img src="../admin/module/quanlysanpham/upload/<?php echo $giohang_item['hinhanhsanpham'];?>" width="150px; height: 150px;">
                </div>
                <!-- Tên + Giá -->
                <div class = "giohang__tg">
                    <p class = "tensp"><?php echo $giohang_item['tensanpham']; ?></p>
                    <p class = "giasp"><?php echo number_format($giohang_item['giasanpham'],0,',',',').' VND'; ?></p>
                </div>
                <!-- Số lượng -->
                <div class = "giohang__sl">
                    <a href="../page/content/themgiohang.php?tru=<?php echo $giohang_item['idsanpham']?>"><i class="fa fa-minus congtru"></i></a>
                    <span><?php echo $giohang_item['soluongsanpham']; ?><span>
                    <a href="../page/content/themgiohang.php?cong=<?php echo $giohang_item['idsanpham']?>"><i class="fa fa-plus congtru"></i></a>
                </div>
                <!-- Tạm tính -->
                <div class = "giohang__tamtinh">
                    <p class = "giasp"><?php echo number_format($tamtinh,0,',',',').' VND'; ?></p>
                </div>
                <!-- Xóa -->
                <div class = "giohang_xoa">
                    <p><a href="../page/content/themgiohang.php?xoa=<?php echo $giohang_item['idsanpham']?>"><i class="fa-solid fa-trash"></i></a></p>
                </div>
            </div>

            <?php
                }
            ?>
            <!-- Tổng tiền -->
              <div class = "tongtien">
                  <p class = "tensp" style="float: right">
                      <?php echo number_format($tongtien,0,',',',').' VND'; ?>
                      <span><a href="../page/content/themgiohang.php?xoatatca=1"><i class="fa-solid fa-trash"></i></a></span>
                  </p>
              </div>
              <!-- Đặt hàng -->
              <div class = "dathang">
                  <?php
                      if(isset($_SESSION['dangky'])){
                  ?> 
                  <a href="../page/content/thanhtoan.php"><button>Đặt Hàng</button></a>
                  <?php
                      }else{
                  ?>
                  <p><a href="index.php?quanly=dangky"></a></p>
                  <?php
                      }
                  ?>
              </div>

            <?php
              }else{
            ?>
            <!---------------------------------------------------------- Giỏ hàng rỗng ---------------------------------------------------------->
              <div class = "giohang__rong">
                <p class = "icon_cart"><i class="fa-solid fa-basket-shopping"></i></p>
                <h5> GIỎ HÀNG TRỐNG </h5>
                <a href = "index.php"><button> Mua sắm </button></a>
              </div>
          <?php
          }
          ?>
      </div>
</div>  