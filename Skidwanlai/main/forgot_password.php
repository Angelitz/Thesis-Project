<!DOCTYPE html>
<?php session_start();?>
<?php
  if (isset($_SESSION["accid"])){
  ?>
    <script>
      window.location.href="index.php";
    </script>
  <?php  }
  else {
?>
<html lang="en">
<?php include "includes/head.php"; ?>
<body class="cnt-home">
<?php include "includes/header.php"; ?>
<div class="body-content">
<div class="container">
<div class="homepage-container">
<div class="row">
<!-- ============================================== CONTENT ============================================== -->
<div class="col-md-5 center-block">
<div class="panel panel-green">
<div class="panel-heading">
<h3 class="panel-title">Forgot Password</h3>
</div>
<div class="panel-body">
<?php
  if(isset($_GET["submit"])){
    $query_activate = mysqli_query($con, "SELECT * FROM tbl_acc WHERE email='$_GET[email]' AND con='$_GET[contact]';");
    if (mysqli_num_rows($query_activate)>0){
        $temp_pass = "G1A4C3";
        $to = $_GET["email"];
        $subject = "Retrieve your password";
        $message = "Your password is changed to:\n".$temp_pass."\n\nPlease feel free to change this password.\nThank you.";
        $headers = "From: 'SkidwanlaiCW Tanza' <skidwanlaiph@gmail.com>\r\n";
        $headers .= "Reply-To: skidwanlaiph@gmail.com\r\n";
        $headers .= "Return-Path: skidwanlaiph@gmail.com\r\n";
        $headers .= "CC: skidwanlaiph@gmail.com\r\n";
        $headers .= "BCC: skidwanlaiph@gmail.com\r\n";
        mail($to, $subject, $message, $headers);
        mysqli_query($con, "UPDATE tbl_acc SET pw='$temp_pass' WHERE email='$_GET[email]';");
        
      ?><div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        Your password was changed to:&emsp;<b><?php echo $temp_pass; ?></b>.<br>
        Please feel free to change your password. Thank you!
      </div>
      <?php
    }

    else {
      ?><div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        There is no account associated with the given email and contact number.
      </div>
      Please complete the form below in order to retrieve your password.<br>
A temporary password will be sent to your email.<br><br>
<form method="GET">
  <div class="form-group">
        <label class="info-title" style="font-size: 14px;font-weight: 400;">Email Address <span style="color: red;">*</span></label>
        <input autofocus type="email" placeholder="Enter your email address" required name="email" class="form-control unicase-form-control text-input">
    </div>
    <div class="form-group">
        <label class="info-title" style="font-size: 14px;font-weight: 400;">Contact <span style="color: red;">*</span></label>
        <input type="text" placeholder="Registered contact number" required name="contact" class="form-control unicase-form-control text-input">
    </div>
  <input style="margin-top: 10px;" type="submit" name="submit" class="btn btn-primary btn-block" value="Retrieve Password">
</form>
      <?php
    }
  }
  else { ?>
    Please complete the form below in order to retrieve your password.<br>
    A temporary password will be sent to your email.<br><br>
    <form method="GET">
    <div class="form-group">
        <label class="info-title" style="font-size: 14px;font-weight: 400;">Email Address <span style="color: red;">*</span></label>
        <input autofocus type="email" placeholder="Enter your email address" required name="email" class="form-control unicase-form-control text-input" >
    </div>
    <div class="form-group">
        <label class="info-title" style="font-size: 14px;font-weight: 400;">Contact <span style="color: red;">*</span></label>
        <input type="text" placeholder="Registered contact number" required name="contact" class="form-control unicase-form-control text-input" >
    </div>
    <input style="margin-top: 10px;" type="submit" name="submit" class="btn btn-primary btn-block" value="Retrieve Password">
    </form>
  <?php
  }
?>

</div>
</div>
</div><!-- /.homebanner-holder -->
<!-- ============================================== CONTENT : END ============================================== -->
</div><!-- /.row -->
<?php //include "includes/widget_brands.php"; ?>
</div>
</div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->
<?php include "includes/footer.php"; ?>
<script src="assets/js/jquery.php.css.js"></script>
<?php include "includes/javascripts.php"; ?>
</body>
</html>
<?php } session_commit();?>
<?php mysqli_close($con);?>
