<?php
	session_start();
	include "db_connect.php";
	//Admin activities
	mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Logged out', NOW());");
	unset($_SESSION['adminid']);
	unset($_SESSION['adminemail']);
	unset($_SESSION['adminpassword']);
	unset($_SESSION['adminfname']);
	unset($_SESSION['adminlname']);
	unset($_SESSION['admintype']);
	unset($_SESSION['adminexp']);
	session_commit();
	header ("Location: ../login.php");
?>
