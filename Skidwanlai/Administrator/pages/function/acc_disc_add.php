<?php session_start();
include "db_connect.php";
if(isset($_POST['discname'])){
    $getdisc = mysqli_query($con, "SELECT * FROM tbl_acc_disc WHERE discname='$_POST[discname]';");
        if (mysqli_num_rows($getdisc)<1){
            mysqli_query($con, "INSERT INTO tbl_acc_disc (discname, discpercent) VALUES ('$_POST[discname]', $_POST[discpercent]/100);");
            $p = $_POST['discpercent'];
            //Admin activities
            mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Added new customer discount as $_POST[discname] with a value of $p %', NOW());");
            header ("Location: ../set_disc_list.php?add_disc");
        }
        else {
            header ("Location: ../set_disc_list.php?dup_disc");
        }
    }
session_commit();?>