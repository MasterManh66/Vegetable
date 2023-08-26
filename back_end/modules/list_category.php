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
            text-align: center;
            margin: 30px 100px 0 100px;
        }
        .container-fluid .row {
            margin-top: 30px;
        }
        .container-fluid .row th {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h2>Danh sách danh mục:</h2>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row">         
            <table class="table table-condensed table-hover table-custom">
                <tr>
                    <th>STT</th>
                    <th>Danh mục</th>
                    <th>Tùy chọn</th>
                </tr>
                <?php  
                require "modules/config.php";
                    $sql = "SELECT * FROM `category`";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['catename']; ?></td>
                    <td>
                        <a href="admin.php?modules=edit_category&id=<?php echo $row['id']; ?>">Sửa</a>
                        <a href="admin.php?modules=delete_category&id=<?php echo $row['id']; ?> ">Xóa</a>
                    </td>
                </tr>
                <?php }} ?>
            </table>
        </div>
    </div>
</body>
</html>