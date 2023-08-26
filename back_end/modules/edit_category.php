<?php   
    include 'config.php';
        if (isset($_POST["edit"])) {
            $id = $_GET["id"];
            $category = $_POST["category"];
            $sqledit = "UPDATE `category` SET `catename`='$category' WHERE `id`= '$id' ";
            mysqli_query($conn, $sqledit);
            echo"<script>window.location.href='admin.php?modules=list_category';</script>";
        }
        
        if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $sqlselect = "SELECT * FROM `category` WHERE `id`= '$id'";
        $result = mysqli_query($conn, $sqlselect);
        $row = mysqli_fetch_assoc($result);
        }   
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container ">
        <div class="row">
            <span style="font-size: 25px;font-weight: 700">	Thông tin sản phẩm</span>
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Tên danh mục:</label>
                    <input type="text" class="form-control" name="category" value="<?php echo $row["catename"]; ?>">
                    <button name="edit" class="btn btn-primary">Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $('.btn-primary').click(function() {
            var productId = $(this).attr('data-product-id');
            alert('Danh mục mới đã được cập nhật');
        });
    });
    </script>
</body>
</html>