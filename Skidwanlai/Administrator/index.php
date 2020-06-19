<?php
if (!isset($_GET["security"])){
	header("Location: ../main/index.php");
}
else {
	if($_GET["security"]!="4769616e6e65"){
		header("Location: ../main/index.php");
	}

	else { ?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv="refresh" content="0;url=pages/login.php">
			<link rel="icon" href="dist/images/favicon.png">
			<title>SCW - Administrator</title>
			<script language="javascript">
			    window.location.href = "pages/login.php"
			</script>
		</head>
		<body>
		Go to <a href="pages/login.php">/pages/login.php</a>
		</body>
	</html><?php
	}
}

?>

