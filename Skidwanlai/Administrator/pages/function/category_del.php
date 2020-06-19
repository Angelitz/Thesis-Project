<?php
session_start();
	include "db_connect.php";
	if(isset($_GET['categoryid'])){
        mysqli_query($con, "DELETE FROM tbl_category WHERE categoryid=$_GET[categoryid];");
        //Admin activities
        mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Deleted a category', NOW());");
        header("Location: ../inv_hardware_category.php?remove_category");
    }
session_commit();?>