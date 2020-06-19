<?php
session_start();
	include "db_connect.php";
	if(isset($_POST['savevat'])){
        mysqli_query($con, "UPDATE tbl_vat SET vat_percent=$_POST[vat_percent]/100, vat_desc='$_POST[vat_desc]';");
            //Admin activities
            mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Updated VAT with a value of $_POST[vat_percent] %', NOW());");
            header ("Location: ../set_ship_det.php?edit_vat");
    }
session_commit();?>