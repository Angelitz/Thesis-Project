<?php session_start();
include "db_connect.php";
if(isset($_POST['discname'])){
    mysqli_query($con, "UPDATE tbl_acc_disc SET discname='$_POST[discname]', discpercent=$_POST[discpercent]/100 WHERE discid=$_POST[discid];");
    //Admin activities
    mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Updated a customer discount as $_POST[discname] with a value of $_POST[discpercent] %', NOW());");
            header ("Location: ../set_disc_list.php?edit_disc");
}
session_commit();?>