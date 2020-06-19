<?php
session_start();
	include "db_connect.php";
	if(isset($_POST['saveship'])){
        mysqli_query($con, "UPDATE tbl_shippingfee SET cost=$_POST[cost] WHERE shipid=$_POST[shipid];");
            //Admin activities
            mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Updated the shipping fee: $_POST[shipday] with a value of PHP $_POST[cost]', NOW());");
            header ("Location: ../set_ship_det.php?edit_ship");
    }
session_commit();?>