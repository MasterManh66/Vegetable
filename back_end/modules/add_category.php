<?php  
  if (isset($_POST["add"])) {
    $category = $_POST["category"];
    $sqladd = "INSERT INTO `category`(`catename`) 
    VALUES ('$category')";
    mysqli_query($conn, $sqladd);
    echo"<script>window.location.href='admin.php?modules=list_category';</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title>CATEGORY</title>
  <style>
    .container {
      margin-top: 50px;
    }
    .form-group input{
      margin:10px 0;
    }
    .container .form-group span {
      margin: 10px 0 10px 0;
    }
    .container .top-header {
      font-size: 20px;
      font-weight: 700;
    }
  </style>
</head>
<body>
  <div class="container ">
    <div class="row ">
      <span class="top-header">	Thông tin sản phẩm</span>
      <form action="" method="post">
        <div class="form-group">
          <br><br>
            <span>Tên danh mục</span>
            <input type="text" class="form-control" name="category"> 
            <br>
            <button name="add" class="btn btn-primary">Thêm mới</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
        $('.btn-primary').click(function() {
            var productId = $(this).attr('data-product-id');
            alert('Danh mục mới đã được thêm');
        });
    });
    </script>
</body>
</html>
