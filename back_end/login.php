<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐĂNG NHẬP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../assets/img/logo_1.jpg">
</head>

<body>
    <?php include "../front_end/includes/header.php" ?>
    <?php require_once("../front_end/includes/config.php"); ?>
    <?php
        //kiểm tra 
        if (isset($_POST["btn_submit"]))
        {
            //lấy thông tin
            $username = $_POST["username"];
            $password = $_POST["password"];
            //làm sạch
            /**
            $username = strip_tags($username);
            $username = addcslashes($username);
            $password = strip_tags($password);
            $password = addcslashes($password);
             */
            if ($username == "" || $password == "") {
                echo "username or password bạn không được để trống!";
            }else {
                $sql = "select * from users where username ='$username' and password ='$password'";
                $query = mysqli_query($conn,$sql);
                $num_rows = mysqli_num_rows($query);
                if ($num_rows == 0) {
                    echo "Tên đăng nhập hoặc mật khẩu không đúng ! ";
                }else{
                    // lấy thông tin
                    while ($data = mysqli_fetch_array($query)) {
                        $_SESSION["user_id"] = $data["id"];
                        $_SESSION["username"] = $data["username"];
                        $_SESSION["password"] = $data["password"];
                    }
                    echo "Đăng nhập thành công ! ";
                    header('Location: admin.php');
                }
            }
        }
    ?>
    <div class="login">
        <form method="POST" action="login.php">
            <fieldset>
                <legend id="from_tittle" >Đăng nhập</legend>
                <table>
                    <tr>
                        <td>Username : </td>
                        <td><input type="text" name="username" size="30" placeholder="Nhập tài khoản đăng nhập ..."></td>
                    </tr>
                    <tr>
                        <td>Password : </td>
                        <td><input type="password" name="password" size="30" placeholder="Nhập mật khẩu đăng nhập ..."></td>
                    </tr>
                    <tr>
                        <td  colspan="2" align="center"> 
                        <input class="login_submit" type="submit" name="btn_submit" value="Đăng nhập"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
    <?php include "../front_end/includes/footer.php" ?>
</body>

</html>