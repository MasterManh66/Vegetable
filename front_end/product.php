<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="../assets/img/logo_1.jpg">
    <link rel="stylesheet" href="font/fontawesome-free-5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>SẢN PHẨM</title>
</head>

<body>

    <?php 
    require_once("includes/config.php");
    include 'includes/header.php';

    // Kiểm tra kết nối
    if (!$conn) {
        die("Không thể kết nối đến cơ sở dữ liệu: " . mysqli_connect_error());
    }


    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    if (isset($_GET['id']) == 0) {
        // Lấy danh sách các id sản phẩm hiện có
        $sql = "SELECT id FROM product";
        $result = mysqli_query($conn, $sql);
        $ids = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $ids[] = $row['id'];
        }
    
        // Chọn một id ngẫu nhiên từ danh sách
        $randomId = $ids[array_rand($ids)];
    
        // Truy vấn thông tin sản phẩm với id ngẫu nhiên
        $sql = "SELECT * FROM product WHERE id = '$randomId'";
        $product = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($product);
    } else {

         // Thực hiện câu truy vấn
         $sql = "SELECT * FROM product WHERE id = $id";
         $product = mysqli_query($conn, $sql);
         $row = mysqli_fetch_assoc($product);
    }
         ?>
         <div class="container">
             <div class="row">
                 <div class="col-lg-3 col-xs-1"></div>
                 <div class="col-lg-6">
                     <h1 class="product_ttsp col-xs-10" >Thông tin sản phẩm</h1>
                 </div>
                 <div class="col-lg-3 col-xs-1"></div>
             </div>
             <div class="row product_show">
                 <div class="col-lg-6 col-xs-11 col-sm-11">
                         <div class="mySlides" style="display: block;">
                             <img class="product_img" id="anh" src="../back_end/<?php echo $row["img"] ?>" >
                         </div>
                 </div>
                 <div class="col-lg-6 col-xs-10 col-sm-10">
                     <div class="group-status ">
                         <h4 class="title">Tên sản phẩm : <?php echo $row['pro_name']?> <br></h4>
                         
                     </div>
                     <br>
                     <h4 class="title">Mô Tả : </h4>
                     <p class="mota"><?php echo $row["introduce"] ?></p><br>
 
                     <h4 class="title" class="gia">Giá : <span ><?php echo $row["price"] ?> VNĐ / 1 kg </span></h4><br>
                     <div class="detail">
                         <h4 class="title">Chi tiết : </h4>
                         <p class="mota"><?php echo $row["detail"] ?></p><br>
                     </div>
 
                     <div class="button_lh">
                         <a href="contact.php"><button class="btn btn-success" > LIÊN HỆ </button></a>
                     </div>
 
                 </div>
             </div>
                     
         </div>

       
        <?php include "includes/footer.php" ?>
</body>

</html>