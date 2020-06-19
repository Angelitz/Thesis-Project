<?php
	session_start();
	include "db_connect.php";
	//$table=mysqli_query($con, "SELECT qty FROM tbl_basket WHERE code='$_POST[code]' AND accid=$_SESSION[accid];");
	mysqli_query($con, "UPDATE tbl_basket SET qty=qty+$_POST[cartqty], basketdate=NOW() WHERE code='$_POST[code]' AND accid=$_SESSION[accid];");
	mysqli_query($con, "UPDATE tbl_prod SET stock=stock-$_POST[cartqty] WHERE code='$_POST[code]';");
	header ("Location: ../mycart.php");
	session_commit();
?>