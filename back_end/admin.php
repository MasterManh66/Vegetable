<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANG QUẢN TRỊ</title>
    <link rel="stylesheet" href="modules/from.css">
    <link rel="icon" href="uploads/logo_1.jpg">
</head>
<body>
<?php
  		require_once("modules/config.php");
		session_start();
		if (!isset($_SESSION['username'])) {
			 header('Location: login.php');
			 echo ("Lỗi ");
		}
		
	?>
	<div id="main">
		<?php 
			include "modules/sidebar.php";

			if (isset($_GET["modules"])) {
				$modules = $_GET["modules"];
				$file = "modules/".$modules.".php";
				if (file_exists($file)) {
					include($file);
				}else echo "error!";
			}
		?>
	</div>
</body>
</html>