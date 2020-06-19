<?php session_start();
	include "db_connect.php";
	if(isset($_POST['categoryname'])){
        $getcategory = mysqli_query($con, "SELECT * FROM tbl_category WHERE categoryname='$_POST[categoryname]';");
        if (mysqli_num_rows($getcategory)<1){
            mysqli_query($con, "INSERT INTO tbl_category (categoryname) VALUES ('$_POST[categoryname]');");
            //Admin activities
            mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Added a new category: $_POST[categoryname]', NOW());");
            header ("Location: ../inv_hardware_category.php?add_category");
        }
        else {
            header ("Location: ../inv_hardware_category.php?dup_category");
        }
    }
session_commit();?>