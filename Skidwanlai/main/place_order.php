<!DOCTYPE html>
<?php session_start();
if (!isset($_SESSION['accid'])){
header ("Location: login.php");
}
else {
if (!isset($_GET["ready"])){
header ("Location: mycart.php");
}
?>
<html lang="en">
<?php include "includes/head.php"; ?>
<script>
function enablesend() {
document.getElementById("place_order").disabled=false;
}
function place_order() {
window.location="check_out.php?ready";
}
</script>
<?php
$cha=mysqli_query($con, "SELECT * FROM tbl_basket WHERE accid=$_SESSION[accid];");
if (mysqli_num_rows($cha)<=0){
?>
<script>
window.location = "index.php";
</script>
<?php
}
else {
?>
<body class="cnt-home">
<?php include "includes/header.php"; ?>
<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-bd">
<div class="container">
<div class="homepage-container">
<div class="row">
<div class="col-md-8 center-block">
<div class="panel panel-green">
<div class="panel-heading">
<h3 class="panel-title">Terms & Conditions</h3>
</div>
<div class="panel-body">
<textarea style="height:150px; width:100%;resize: none; margin-bottom:10px; border: none;" readonly>
<?php echo $show_info["m_terms_conditions"]; ?>
</textarea>
<label style="display: block;">
<input onclick="enablesend();" type="checkbox" id="chk" style="width: 13px; height: 13px; padding: 0; margin:0; vertical-align: middle; position: relative; top: -1px; *overflow: hidden;">I accept the terms and conditions.
</label>
<br>
<a href="mycart.php" class="btn btn-danger"><i class="fa fa-ban"></i>&emsp;Cancel</a>
<button class="btn btn-primary pull-right" id="place_order" disabled onclick="place_order()">Next&emsp;<i class="fa fa-chevron-right"></i></button>
</div>
</div>
</div>
</div>
</div><!-- /.container -->
</div>
</div><!-- /.body-content -->
<?php include "includes/footer.php"; ?>
<?php include "includes/javascripts.php";?>
</body>
</html>
<?php
}
}
?>
<?php session_commit();?>
<?php mysqli_close($con); ?>