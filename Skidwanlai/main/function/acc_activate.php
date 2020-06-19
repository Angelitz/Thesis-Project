<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$password = $_POST['password'];
$activationcode = bin2hex($_POST['email']);
//$activationcode = "1234";
include "includes/dbconnect.php";

$chk_email = mysqli_query($con, "SELECT * FROM tbl_acc WHERE email='$email';");
if (mysqli_num_rows($chk_email) > 0){
  header ("Location: ../login.php?error=1");
}
else {
  mysqli_query($con, "INSERT INTO tbl_acc
  (fname, lname, ad, con, email, pw, activationcode, status, discid)

  VALUES (
  '$fname',
  '$lname',
  '$address',
  '$contact',
  '$email',
  '$password',
  '$activationcode',
  'Inactive',
  1);");

  $to = $email;
  $subject = "Activate Your Account";
  $body = "Dear ".$fname." ".$lname."\n\nYour account is now registered.\nProceed to your account by clicking the link provided:\nhttp://localhost/Skidwanlai/main/function/thisisit.php?activationcode=".$activationcode."\n\nPlease remember that Skidwanlai Computer World only operates within Cavite only and may not be used in ordering outside the said area.\n\nThank you.";
    $headers = "From: Skidwanlai Computer World Tanza <skidwanlaiph@gmail.com>\r\n";
    $headers .= "Reply-To: skidwanlaiph@gmail.com\r\n";
    $headers .= "Return-Path: skidwanlaiph@gmail.com\r\n";
    $headers .= "CC: skidwanlaiph@gmail.com\r\n";
    $headers .= "BCC: skidwanlaiph@gmail.com\r\n";
  mail($to, $subject, $body, $headers);
  header ("Location: ../activateform.php");
}
?>
