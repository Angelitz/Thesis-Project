<?php
session_start();
	include "db_connect.php";
	if(isset($_GET['supplierid'])){
        mysqli_query($con, "DELETE FROM tbl_supplier WHERE supplierid=$_GET[supplierid];");
        //Admin activities
        mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Deleted a supplier', NOW());");
        header("Location: ../inv_hardware_supplier.php?remove_supplier");
    }
session_commit();?>