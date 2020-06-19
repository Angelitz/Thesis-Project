<?php session_start();
include "db_connect.php";
mysqli_query($con, "UPDATE tbl_order SET orderstatus='Ready for Delivery', acceptby='$_SESSION[adminname]' WHERE invoice=$_POST[invoice];");
//Admin activities
mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Accepted order #$_POST[invoice]', NOW());");
header("Location: ../index.php");
session_commit();?>