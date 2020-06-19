<?php
session_start();
	include "db_connect.php";
	if(isset($_POST['suppliername'])){
        $getsupplier = mysqli_query($con, "SELECT * FROM tbl_supplier WHERE suppliername='$_POST[suppliername]' AND supplieraddress='$_POST[supplieraddress]';");
        if (mysqli_num_rows($getsupplier)<1){
            mysqli_query($con, "INSERT INTO tbl_supplier (suppliername) VALUES ('$_POST[suppliername]', '$_POST[supplieraddress]', '$_POST[suppliercon]', '$_POST[supplieremail]');");
            //Admin activities
            mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Added a new supplier: $_POST[suppliername]', NOW());");
            header ("Location: ../inv_hardware_supplier.php?add_supplier");
        }
        else {
            header ("Location: ../inv_hardware_supplier.php?dup_supplier");
        }
    }
session_commit();?>