<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
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
            <span style="font-size: 20px;font-weight: 700"> Thông tin sản phẩm</span>
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

                        }else
                        echo "lỗi file";
                    }else
                    echo "ảnh quá lớn";
                    }else
                    echo "sai định dạng";
                }else
                echo "file rỗng" .$_FILES["image"]["name"];

                if (isset($_POST["add"])) {
                    $id = $_GET["id"];
                    $product= $_POST["product"];
                        $category = $_POST["category"];
                        $intro = $_POST["introduce"];
                        $detail = $_POST["detail"];
                        $price = $_POST["price"];
                        $pro_create = date("y/m/d h:i:s");

                    $sql = "UPDATE `product` SET `pro_name`='$product',`cate_id`='$category',`introduce`='$intro',`detail`='$detail',`price`='$price',`img`='$fileIMG',`pro_create`='$pro_create'
                    WHERE `id`='$id'";
                    mysqli_query($conn, $sql);
                    echo"<script>window.location.href='admin.php?modules=list_product';</script>";
                    echo "Sản phẩm đã được sửa thành công";
                }

            }
            if (isset($_GET["id"])) {
                $id= $_GET["id"];
                $sqlselect = "SELECT * FROM `product` WHERE id='$id' ";
                $result2 = mysqli_query($conn, $sqlselect);
                $rowse = mysqli_fetch_assoc($result2);
            }

            ?>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm :</label>
                    <input type="text" class="form-control" name="product" value="<?php echo $rowse["pro_name"] ?>">

                    <label for="">Tên danh mục :</label>
                    <select class="form-control" name="category" id="sel1">
                        <?php  
                        $sql = "SELECT *FROM category";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            $i=0;
                            while($row = mysqli_fetch_assoc($result)) {
                            $i++;

                    ?>
                        <option value="<?php echo $row["id"]; ?>"
                            <?php if($row["id"]==$rowse["cate_id"]) { echo "selected"; } else{ echo "";}  ?>>
                            <?php echo $row["catename"]; ?></option>
                        <?php  }}?>
                    </select><br><br>

                    <label for="">Giới Thiệu : <br>
                        <textarea rows="10" cols="50" style="width: 1172px;height: 120px;"
                            name="introduce"><?php echo $rowse["introduce"] ?></textarea> <br>
                        <br><br>
                        <label for="">Chi tiết : <br>
                            <textarea rows="10" cols="50" style="width: 1172px;;height: 250px;"
                                name="detail"><?php echo $rowse["detail"] ?></textarea> <br>
                            <br><br>

                            <label for="">Nhập giá :</label>
                            <input type="number" class="form-control" name="price"
                                value="<?php echo $rowse["price"] ?>">

                            <label for="">Ảnh :</label>
                            <input type="file" class="form-control" name="image" value="<?php echo $rowse["img"] ?>"
                                placehoder="chọn lại ảnh">

                            <button class="btn btn-primary" type="submit" name="add">Cập nhật</button>

                </div>
                <script>
                $(document).ready(function() {
                    $('.btn-primary').click(function() {
                        var productId = $(this).attr('data-product-id');
                        alert('Sản phẩm mới đã được cập nhật');
                    });
                });
                </script>
            </form>
        </div>
    </div>

</body>

</html>