<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .container-fluid {
            margin: 50px;
        }
        .container-fluid h1 {
            text-align : center;
            font-size: 23px;
            font-weight: 600;
        }
        .container-fluid .row {
            margin-top: 30px;
        }
        .container-fluid .row th {
            text-align : center;
        }
        .container-fluid .row td {
            text-align : center;
        }
    </style>
</head>
<body>
    <div class="container-fluid ">
        <h1>Thông tin sản phẩm: </h1>
        <div class="row ">
            
            <table class="table table-condensed table-hover table-custom">
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Danh mục</th>
                    <th>Giới Thiệu</th>                    
                    <th>Chi tiết</th>
                    <th>Giá</th>
                    <th>Ảnh</th>
                    <th>Created_at</th>
                    <th>Tùy chọn</th>
                </tr>
                <?php
                 require "modules/config.php";

                $sql = "select * from product";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $i  = 0;
                    while($row = mysqli_fetch_assoc($result)) {
                        $i++;
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row["pro_name"] ?></td>
                            <td><?php
                                $cateid = $row["cate_id"];
                                $sqlcat = "SELECT * FROM `category` WHERE id = '$cateid'";
                                $resultcat = mysqli_query($conn, $sqlcat);
                                $rowcat = mysqli_fetch_assoc($resultcat);
                                echo $rowcat["catename"];

                                ?>
                            </td>
                            <td><?php echo $row["introduce"] ?></td>
                            <td><?php echo $row["detail"] ?></td>
                            <td><?php echo $row["price"] ?></td>
                            <td>
                                <img style="width:180px;height:180px;" src="<?php echo $row["img"] ?>" alt="Ảnh sản phẩm">
                            </td>
                            <td><?php echo $row["pro_create"] ?></td>
                            <td>
                                <a href="admin.php?modules=edit_product&id=<?php echo $row["id"] ?>">Sửa</a>
                                <a href="admin.php?modules=delete_product&id=<?php echo $row["id"] ?>">Xóa</a>
                            </td>
                        </tr>
                    <?php }} ?>
            </table>
        </div>
    </div>
</body>
</html>