<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>PRODUCT</title>
    <style>
    .form-group {
        margin: 30px 0 10px 0;
    }

    .form-group input {
        margin-bottom: 20px;
    }
    </style>
</head>

<body>
    <div class="container ">
        <div class="row">
            <span style="font-size: 25px;font-weight: 700"> Thông tin sản phẩm</span>
            <?php  
                require "modules/config.php";

                if (isset($_POST["add"])) {
                    $folder = "uploads/";
                    if (isset($_FILES["image"]) && $_FILES["image"]["name"] !="" ) {
                        if ($_FILES["image"]["type"] == "image/jpeg" || $_FILES["image"]["type"] == "image/jpg" || $_FILES["image"]["type"] == "image/png" || $_FILES["image"]["type"] == "image/gif" ) {
                        if ($_FILES["image"]["size"] < 5000000 ) {
                            if ($_FILES["image"]["error"] == 0) {
                            
                                $fileName = $_FILES["image"]["tmp_name"];
                                move_uploaded_file($fileName, "./".$folder.$_FILES["image"]["name"]);
                                $fileIMG = "./".$folder.$_FILES["image"]["name"];

                            }else{
                                 echo "lỗi file";
                            }
                        }else {
                            echo "ảnh quá lớn";
                        } 
                        }else
                        echo "sai định dạng";
                    }else
                    echo "file rỗng" .$_FILES["image"]["name"];

                    if (isset($_POST["add"])) {
                        $product= $_POST["product"];
                        $category = $_POST["category"];
                        $intro = $_POST["introduce"];
                        $detail = $_POST["detail"];
                        $price = $_POST["price"];
                        $pro_create = date("y/m/d h:i:s");

                        $sql = "INSERT INTO `product`( `pro_name`, `cate_id`, `introduce`, `detail`, `price`, `img`, `pro_create`) 
                        VALUES ('$product','$category','$intro','$detail','$price','$fileIMG','$pro_create')";
                        mysqli_query($conn, $sql);
                    echo"<script>window.location.href='admin.php?modules=list_product';</script>";
                    echo "Sản phẩm đã thêm thành công";
                    }
                }

            ?>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <span>Tên sản phẩm :</span>
                    <input type="text" class="form-control" name="product">

                    <span>Tên danh mục : </span>
                    <select class="form-control" name="category" id="sel1">
                        <?php  
                        $sql = "SELECT *FROM category";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            $i=0;
                            while($row = mysqli_fetch_assoc($result)) {
                            $i++;

                    ?>
                        <option value="<?php echo $row["id"]; ?>"><?php echo $row["catename"]; ?></option>
                        <?php  }}?>
                    </select><br><br>

                    <span>Giới thiệu :</span> <br>

                    <textarea style="width: 100%;height: 120px;" name="introduce"></textarea>
                    <br><br>
                    <span>Chi tiết :</span> <br>

                    <textarea style="width: 100%;height: 250px;" name="detail"></textarea>
                    <br><br>
                    <span>Giá: </span>
                    <input type="number" class="form-control" name="price">

                    <span>Ảnh: </span>
                    <input type="file" class="form-control" name="image">

                    <button class="btn btn-primary" type="submit" name="add">Thêm mới</button>
                </div>
            </form>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $('.btn-primary').click(function() {
            var productId = $(this).attr('data-product-id');
            alert('Sản phẩm mới đã được thêm');
        });
    });
    </script>
</body>

</html>