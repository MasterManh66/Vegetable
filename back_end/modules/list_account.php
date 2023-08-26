<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .container td {
            text-align: center;
        }
        .container .table {
            margin: 50px 0 20px 0;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row" style = "margin-top:20px;">
            <h2  style = "text-align :center;">My Account</h2>
            <table class="table table-condensed table-hover table-custom">
                <tr >
                    <th style = "text-align :center;" >STT</th>
                    <th style = "text-align :center;" >Tên tài khoản</th>
                    <th style = "text-align :center;" >Tuỳ chọn</th>
                </tr>
                        <?php  

                            include 'config.php';
                            
                            $sql = "SELECT * FROM `users` ";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result)>0) {
                                $i  = 0;
                                while($row = mysqli_fetch_assoc($result)) {
                                $i++;
                        ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row["username"] ?></td>
                    <td><a href="admin.php?modules=delete_account&id=<?php echo $row["id"] ?>">Xóa</a></td>
                    <?php } ?>
                </tr>
            <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>