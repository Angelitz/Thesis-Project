<?php
session_start();
	include "db_connect.php";
	if(isset($_GET['brandid'])){
        mysqli_query($con, "DELETE FROM tbl_brand WHERE brandid=$_GET[brandid];");
        //Admin activities
        mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Deleted a brand name', NOW());");
        header("Location: ../inv_hardware_brand.php?remove_brand");
    }
session_commit();?>