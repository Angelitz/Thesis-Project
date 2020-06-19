<?php
session_start();
	include "db_connect.php";
	if(isset($_POST['brandname'])){
        $getbrand = mysqli_query($con, "SELECT * FROM tbl_brand WHERE brandname='$_POST[brandname]';");
        if (mysqli_num_rows($getbrand)<1){
            mysqli_query($con, "INSERT INTO tbl_brand (brandname) VALUES ('$_POST[brandname]');");
            //Admin activities
            mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Added a new brand: $_POST[brandname]', NOW());");
            header ("Location: ../inv_hardware_brand.php?add_brand");
        }
        else {
            header ("Location: ../inv_hardware_brand.php?dup_brand");
        }
    }
session_commit();?>