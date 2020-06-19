<?php session_start();
include "db_connect.php";
mysqli_query($con, "UPDATE tbl_order SET orderstatus='Delivered', datedelivered=NOW() WHERE invoice=$_POST[invoice];");
//Admin activities
mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Set order #$_POST[invoice] as delivered', NOW());");
header("Location: ../delivery.php");
session_commit();?>