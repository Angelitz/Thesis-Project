<?php
  if(isset($_GET["submit"])){
    $email = $_GET["email"];
    $temp_pass = "G1A4C3";
        $to = $email;
        $subject = 'Retrieve your password';
        $body = "demn.";
        $headers = "From: Skidwanlai Computer World Tanza <skidwanlaiph@gmail.com>\r\n";
        $headers .= "Reply-To: skidwanlaiph@gmail.com\r\n";
        $headers .= "Return-Path: skidwanlaiph@gmail.com\r\n";
        $headers .= "CC: skidwanlaiph@gmail.com\r\n";
        $headers .= "BCC: skidwanlaiph@gmail.com\r\n";
        mail($to, $subject, $body, $headers);
    $query_activate = mysqli_query($con, "SELECT * FROM tbl_acc WHERE email='$_GET[email]' AND con='$_GET[contact]';");
    if (mysqli_num_rows($query_activate)>0){
        $temp_pass = "G1A4C3";
        $to = $email;
        $subject = 'Retrieve your password';
        $body = "demn.";
        $headers = "From: Skidwanlai Computer World Tanza <skidwanlaiph@gmail.com>\r\n";
        $headers .= "Reply-To: skidwanlaiph@gmail.com\r\n";
        $headers .= "Return-Path: skidwanlaiph@gmail.com\r\n";
        $headers .= "CC: skidwanlaiph@gmail.com\r\n";
        $headers .= "BCC: skidwanlaiph@gmail.com\r\n";
        //mail($to, $subject, $body, $headers);
        }
    }
?>	