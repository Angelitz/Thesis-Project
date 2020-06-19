<?php session_start();
	include "db_connect.php";
	if(isset($_GET['discid'])){
        mysqli_query($con, "DELETE FROM tbl_acc_disc WHERE discid=$_GET[discid];");
        //Admin activities
        mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Deleted a customer discount', NOW());");
        header("Location: ../set_disc_list.php?remove_disc");
    }
session_commit();?>