<?php
session_start();
	include "db_connect.php";
	if(isset($_GET['shipid'])){
        mysqli_query($con, "DELETE FROM tbl_shippingfee WHERE shipid=$_GET[shipid];");
        //Admin activities
        mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Deleted a shipping fee', NOW());");
        header("Location: ../set_ship_det.php?remove_ship");
    }
session_commit();?>