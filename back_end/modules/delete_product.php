<?php
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $sql = "DELETE FROM product WHERE `id`='$id'";
        mysqli_query($conn, $sql);
        echo"<script>window.location.href='admin.php?modules=list_product';</script>";
        echo "Sản phẩm đã được xoá";
        } 
?>