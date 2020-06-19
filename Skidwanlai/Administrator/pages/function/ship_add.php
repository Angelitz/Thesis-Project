<?php
session_start();
	include "db_connect.php";
	if(isset($_POST['shipday'])){
        $getship = mysqli_query($con, "SELECT * FROM tbl_shippingfee WHERE shipday='$_POST[shipday]' OR cost=$_POST[cost];");
        if (mysqli_num_rows($getship)<1){
            mysqli_query($con, "INSERT INTO tbl_shippingfee (shipday, cost) VALUES ('$_POST[shipday]', $_POST[cost]);");
            //Admin activities
            mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Added a new shipping fee: $_POST[shipday] with a value of PHP $_POST[cost]', NOW());");
            header ("Location: ../set_ship_det.php?add_ship");
        }
        else {
            header ("Location: ../set_ship_det.php?dup_ship");
        }
    }
session_commit();?>