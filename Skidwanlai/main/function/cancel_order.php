<?php
session_start();
include "db_connect.php";
$get_order_table = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_POST[invoice];");
while($row_order = mysqli_fetch_assoc($get_order_table)){
	mysqli_query($con, "UPDATE tbl_prod SET stock=stock+$row_order[qty] WHERE code='$row_order[code]' LIMIT 1;");
	mysqli_query($con, "DELETE FROM tbl_order WHERE invoice=$_POST[invoice] AND code='$row_order[code]' LIMIT 1;");
}

header("Location: ../profile.php?cancel=1");
session_commit();
?>