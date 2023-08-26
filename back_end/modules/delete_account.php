<?php  
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $sql = "DELETE FROM `users` WHERE `id`='$id'";
        mysqli_query($conn, $sql);
        echo"<script>window.location.href='admin.php?modules=list_account';</script>";
    }
    ?>