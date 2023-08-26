<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="icon" href="../assets/img/logo_1.jpg">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Rau Sạch</title>
</head>

<body>
    <?php include "includes/header.php" ?>
    <?php require_once("includes/config.php"); ?>
    <!-- Scroll -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"></button>
    <div class="container">
        <?php include "includes/banner.php" ?>
        <!-- sản phẩm -->
        <div class="product">
            <!-- sản phẩm nổi bật -->
            <div class="product_hot">
                <div class="product_content">
                    <div class="product_content1">
                            <?php  
                                $sql = "SELECT * FROM category";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <hr>
                                <h2>
                                    <?php echo $row["catename"]; ?>
                                </h2>
                                <div class="row">
                                    <div class="slide_sp">
                                        <div id="owl-demo" class="owl-carousel owl-theme ">
                                            <?php  
                                            $sqlitem = "SELECT product.id, product.img, product.pro_name, product.price
                                            FROM product
                                            INNER JOIN category ON product.cate_id = category.id
                                            WHERE cate_id = {$row['id']} ";
                                            $select = mysqli_query($conn, $sqlitem);

                                            if (mysqli_num_rows($result) > 0) {
                                                while($item = mysqli_fetch_assoc($select)) {

                                        ?>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="item">
                                                    <a href="product.php">
                                                        <img src="../back_end/<?php echo $item["img"]; ?>" alt="...">
                                                    </a>
                                                    <div class="caption">
                                                        <h6><?php echo $item["pro_name"]; ?></h6>
                                                        <p><a href="product.php?&id=<?php echo $item["id"]; ?>"
                                                                class="btn btn btn-danger" role="button">Xem Chi Tiết</a> <a
                                                                href="product.php" class="btn btn-light" role="button"><b>Giá
                                                                    : <?php echo $item["price"]; ?></b></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }} ?>
                                        </div>
                                    </div>
                                </div>
                            <?php }} ?>
                    </div>
                 </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php" ?>
    <script src="../assets/js/main.js"></script>
</body>

</html>
</body>

</html>