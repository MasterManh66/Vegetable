<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>TRANG QUẢN TRỊ</title>
    <link rel="stylesheet" href="from.css">
    <link rel="icon" href="../update/logo_1.jpg">
    <style>
    
     </style>
</head>
<body>
    <div class="menu">
        <label for="menu-mobile-input">
            <i style="text-align: center;position: absolute;top:0px;left: -11px;" class="fas fa-list"></i>
        </label>
        <input hidden id="menu-mobile-input" type="checkbox" class="input-menu">
        <label class="menu-overlay" for="menu-mobile-input"></label>
        <div class="navmenu">
            <div>
                <div class="s2">
                    <label for="menu-mobile-input">
                        <i style="margin-left: 245spx;" class="fas fa-times"></i>
                    </label>
                </div>
               <a  href="" style="color: #fff;font-size:30px"><i style="font-size: 30px;" class="fas fa-user"></i>Admin</a>
                <div class="middle">
                    <div class="menu2" style="margin:10px 20px">
                            <li>							
                                <a href="" ><span> Xin chào: <?php echo $_SESSION['username']; ?> </span> </a>
                            </li>
                    </div>
               </div>	
               <label for="">
                   <input class="form-control" style="width:200px;margin-left:20px;float: left;" type="text" placeholder="Tìm kiếm ...">
               </label>
               <div style="width: 35px;height: 35px;display: inline-block;background: #fff;border-radius:4px;margin-left: 20px;">
                <i style="color: #000;line-height: 35px;position: absolute;right: 8px;"  class="fas fa-search"></i>
               </div>
               <div class="middle">
                   <div class="menu2">
                        <li class="item" id="danhmuc">
                            <a href="#danhmuc" class="btn"><i class="fas fa-book"></i>Danh Mục</a>
                            <div class="smenu">
                                <a href="admin.php?modules=add_category">Thêm Danh Mục</a>
                            </div>
                            <div class="smenu">
                                <a href="admin.php?modules=list_category">Danh sách Danh Mục</a>
                            </div>
                         </li>
                         <li class="item" id="taikhoan">
                            <a href="#taikhoan" class="btn"><i class="fas fa-user"></i>Tài Khoản</a>
                            <div class="smenu">
                                <a href="admin.php?modules=list_account">Danh Sách Tài Khoản</a>
                            </div>
                         </li>
                         <li class="item" id="sanpham">
                            <a href="#sanpham" class="btn"><i class="fab fa-product-hunt"></i>Sản Phẩm</a>
                            <div class="smenu">
                                <a href="admin.php?modules=add_product">Thêm Sản Phẩm</a>
                            </div>
                            <div class="smenu">
                                <a href="admin.php?modules=list_product">Danh Sách Sản Phẩm</a>
                            </div>
                         </li>
                         <li class="item" id="logout">
                            <a href="../front_end/index.php" class="btn"><i class="fas fa-sign-out-alt"></i>Logout</a>
                         </li>
                   </div>
               </div>
            </div>
        </div>
    </div>
</body>
</html>