<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ĐĂNG KÝ</title>
    <link rel="icon" href="../assets/img/logo_1.jpg">
</head>

<body>
    <?php include "../front_end/includes/header.php" ?>
    <?php require_once("../front_end/includes/config.php"); ?>
    <?php
    if (isset($_POST["btn_submit"])) 
    {
        //lấy thông tin
        $username = $_POST["username"];
        $password = $_POST["pass"];
        //kiểm tra
        if ($username == "" || $password == "")
        {
             echo "Bạn vui lòng nhập đầy đủ thông tin !";
        }else {
            $sql = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
            mysqli_query($conn,$sql);
            echo "Chúc mừng bạn đăng ký tài khoản thành công .";
        }
    }
?>
    <div class="register">
        <form action="register.php" method="post">
            <table>
                <tr>
                    <td id="from_tittle" colspan="2">Đăng ký tài khoản</td>
                </tr>
                <tr>
                    <td>Username : </td>
                    <td><input type="text" id="username" name="username" placeholder="Nhập tên đăng ký ..."></td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td><input type="password" id="pass" name="pass" placeholder="Nhập mật khẩu đăng ký ..."></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input class="register_submit" type="submit" name="btn_submit" value="Đăng ký">
                    </td>
                </tr>
                <tr>
                    <td>
                        <nav class="centered">
                            Bạn cũng có thể <a href="login.php">đăng nhập</a>.
                        </nav>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php include "../front_end/includes/footer.php" ?>
    <script>
    $(document).ready(function() {
        $('.register_submit').click(function() {
            var productId = $(this).attr('data-product-id');
            alert('Tài Khoản được đăng ký thành công');
        });
    });
    </script>
</body>

</html>