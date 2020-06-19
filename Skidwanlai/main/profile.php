<!DOCTYPE html>
<?php session_start();?>
<?php
if (!isset($_SESSION['accid'])){
header ("Location: login.php");
}
else {
?>
<html lang="en">
<?php include "includes/head.php"; ?>
<script>
function editProfile(){
document.getElementById('profileInfo').style.display = 'none';
document.getElementById('profileEdit').style.display = 'block';
var labelAddress = document.getElementById('labelAddress').textContent;
document.getElementById('boxAddress').innerHTML = labelAddress;
}
function exitEdit(){
document.getElementById('profileEdit').style.display = 'none';
document.getElementById('profileInfo').style.display = 'block';
}
</script>
<body class="cnt-home">
<?php include "includes/header.php"; ?>
<div class="body-content">
<div class="container">
<div class="homepage-container">
<div class="row inner-bottom-sm">
<!-- ============================================== CONTENT ============================================== -->
<div class="col-md-4" id="profileInfo">
<?php
if(isset($_GET["message2"])){
?>
<div class="alert alert-success alert-dismissable">
<button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
Successfully updated your profile! 
</div>
<?php	
}
?>
<div class="panel panel-green">
<div class="panel-heading">
<h3 class="panel-title">User Information</h3>
</div>
<div class="panel-body">
<table style="width: 100%;">
<tr>
<td valign="top">
<p style="color: #009D66;">Name</p>
</td>
<td valign="top" style="padding-left: 10px;">
<label class="info-title"><?php echo $_SESSION["fullname"];?></label>
</td>
</tr>
<tr>
<td valign="top">
<p style="color: #009D66;">Email</p>
</td>
<td valign="top" style="padding-left: 10px;">
<label class="info-title"><?php echo $_SESSION["email"];?></label>
</td>
</tr>
<tr>
<td valign="top">
<p style="color: #009D66;">Address</p>
</td>
<td valign="top" style="padding-left: 10px;">
<label id="labelAddress" class="info-title"><?php echo $_SESSION["address"];?></label>
</td>
</tr>
<tr>
<td valign="top">
<p style="color: #009D66;">Contact</p>
</td>
<td valign="top" style="padding-left: 10px;"><label class="info-title"><?php echo $_SESSION["contact"];?></label></td>
</tr>
<tr>
<td>
<button class="btn btn-primary btn-block" onclick="editProfile();">
<i class="fa fa-pencil inner-right-vs"></i>Edit
</button>
</td>
<td>
</td>
</tr>
</table>
</div>
</div>
</div>
<!-- EDIT PROFILE INFO-->
<div class="col-md-4" style="display:none;" id="profileEdit">
<?php
if (isset($_POST["submit"])){
$_SESSION["fname"]=$_POST["fname"];
$_SESSION["lname"]=$_POST["lname"];
$_SESSION["fullname"]=$_POST["fname"]." ".$_POST["lname"];
$_SESSION["email"]=$_POST["email"];
$_SESSION["password"]=$_POST["password"];
$_SESSION["address"]=$_POST["ad"];
$_SESSION["contact"]=$_POST["con"];
$activationcode = bin2hex($_POST['email']);
mysqli_query($con, "UPDATE tbl_acc SET fname='$_SESSION[fname]', lname='$_SESSION[lname]', ad='$_SESSION[address]', con='$_SESSION[contact]', email='$_SESSION[email]', pw='$_SESSION[password]', activationcode='$activationcode' WHERE accid=$_SESSION[accid];");
?>
<script>
window.location.href="profile.php?message2=success";
</script>
<?php
}
?>
<div class="panel panel-green">
<div class="panel-heading">
<h3 class="panel-title">Edit User Information
<a href="profile.php" style="float:right;">
<i class="fa fa-times"></i>
</a>
</h3>
</div>
<div class="panel-body">
<form method="POST" name="editForm">
<table style="width: 100%;">
<tr>
<td valign="middle"><p style="color: #009D66;">First Name</p></td>
<td valign="middle" style="padding-left: 10px;"><input required type="text" class="form-control unicase-form-control text-input" maxlength="100" name="fname" value="<?php echo $_SESSION['fname'];?>"/></td>
</tr>
<tr>
<td valign="middle"><p style="color: #009D66; padding-top: 10px;">Last Name</p></td>
<td valign="middle" style="padding-left: 10px; padding-top: 10px;"><input required type="text" class="form-control unicase-form-control text-input" maxlength="100" name="lname" value="<?php echo $_SESSION['lname'];?>"/></td>
</tr>
<tr>
<td valign="middle"><p style="color: #009D66; padding-top: 10px;">Address</p></td>
<td valign="middle" style="padding-left: 10px; padding-top: 10px;"><textarea required id="boxAddress" style="resize: none; height: 100px;" class="form-control unicase-form-control text-input" maxlength="900" name="ad"></textarea></td>
</tr>
<tr>
<td valign="middle"><p style="color: #009D66; padding-top: 10px;">Contact</p></td>
<td valign="middle" style="padding-left: 10px; padding-top: 10px;"><input onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 32 || event.charCode == 40 || event.charCode == 41 || event.charCode == 43 || event.charCode == 45" required type="text" class="form-control unicase-form-control text-input" name="con" maxlength="30" value="<?php echo $_SESSION['contact'];?>"/></td>
</tr>
<tr>
<td valign="middle"><p style="color: #009D66; padding-top: 10px;">Email</p></td>
<td valign="middle" style="padding-left: 10px; padding-top: 10px;"><input required onkeyup="showFeedback();" id="email_input" type="text" maxlength="500" class="form-control unicase-form-control text-input" name="email" value="<?php echo $_SESSION['email'];?>"/></td>
</tr>
<tr>
<td></td>
<td valign="middle" id="email_feedback" style="display:none;padding-left: 10px; padding-top: 10px;">
</td>
</tr>
<tr>
<td valign="middle"><p style="color: #009D66; padding-top: 10px;">Password</p></td>
<td valign="middle" style="padding-left: 10px; padding-top: 10px;">
<input required type="password" maxlength="12" class="form-control unicase-form-control text-input" pattern=".{6,12}" onkeyup="checkPasswordStrength();" name="password" id="password_input" value="<?php echo $_SESSION['password'];?>"/>
</td>
</tr>
<tr>
<td></td>
<td valign="middle" id="password_feedback" style="display:none;padding-left: 10px; padding-top: 10px;">
</td>
</tr>
<tr>
<td style="padding-top: 10px;">
<input type="submit" name="submit" id="submit" value="Save" class="btn btn-primary btn-block"/></td>
<td></td>
</tr>
</table>
</form>
</div>
</div>
</div>
<!-- EDIT PROFILE INFO-->
<div class="col-md-8">
<?php
if(isset($_GET["message"])){
?>
<div class="alert alert-success alert-dismissable">
<button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
Your order has been sent! 
</div>
<?php	
}
if(isset($_GET["messagec"])){
?>
<div class="alert alert-success alert-dismissable">
<button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
Please proceed to your email to confirm your order! 
</div>
<?php	
}
if(isset($_GET["confirm"])){
?>
<div class="alert alert-success alert-dismissable">
<button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
Your order has been confirmed and sent! 
</div>
<?php	
}
if(isset($_GET["cancel"])){
?>
<div class="alert alert-danger alert-dismissable">
<button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
Your order has been canceled! 
</div>
<?php	
}
?>
<div class="panel panel-green">
<div class="panel-heading">
<h3 class="panel-title">Order History</h3>
</div>
<div class="panel-body">
<div class="dataTable_wrapper">
<table class="table table-striped table-bordered table-hover" id="dataTables-customerOrder1">
<thead>
<tr>
<th>Invoice</th>
<th>Date Ordered</th>
<th>Qty</th>
<th>Total</th>
<th>ETA</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$tbl_order = mysqli_query($con, "SELECT *, SUM(qty) AS sum_qty FROM tbl_order WHERE orderstatus!='Declined' AND accid=$_SESSION[accid] GROUP BY invoice;");
while ($row_order = mysqli_fetch_assoc($tbl_order)){
?>
<tr>
<td><?php echo $row_order["invoice"];?></td>
<td><?php echo date('M d, Y', strtotime($row_order["dateordered"]));?></td>
<td><?php echo $row_order["sum_qty"];?></td>
<td><?php echo "PHP ".number_format($row_order["grandtotal"], 2);?></td>
<td><?php echo date('M d, Y', strtotime($row_order["eta"]));?></td>
<?php
	if ($row_order["orderstatus"]=="Awaiting Email Confirmation"){
		?>
		<td style="color:#1fda9a;">Email Confirmation Required</td>
		<td></td>
		<?php
	}
	else {
		?>
		<td><?php echo $row_order["orderstatus"];?></td>
		<td>
		<a href="in_voice.php?invoice=<?php echo $row_order['invoice'];?>" class="btn btn-primary btn-block">
		<i class="fa fa-th-list"></i> View</a>
		</td>
		<?php
	}
?>


</tr>
<?php	
}
?>
</tbody>
</table>
</div>
</div>
</div>

<!--<div class="panel panel-green">
<div class="panel-heading">
<h3 class="panel-title">Declined Orders</h3>
</div>
<div class="panel-body">
<div class="dataTable_wrapper">
<table class="table table-striped table-bordered table-hover" id="dataTables-customerOrder2">
<thead>
<tr>
<th>Invoice</th>
<th>Date Ordered</th>
<th>Issue</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$tbl_order = mysqli_query($con, "SELECT *, SUM(qty) AS sum_qty FROM tbl_order WHERE orderstatus='Declined' AND accid=$_SESSION[accid] GROUP BY invoice;");
while ($row_order = mysqli_fetch_assoc($tbl_order)){
?>
<tr>
<td><?php echo $row_order["invoice"];?></td>
<td><?php echo date('M d, Y', strtotime($row_order["dateordered"]));?></td>
<td>Issue in customer order information. Please try again.</td>
<td>
<a href="in_voice.php?invoice=<?php echo $row_order['invoice'];?>" class="btn btn-primary btn-block">
<i class="fa fa-th-list"></i> View</a>
</td>
</tr>
<?php	
}
?>
</tbody>
</table>
</div>
</div>
</div>-->

</div>
<!-- ============================================== CONTENT : END ============================================== -->
</div><!-- /.row -->
<?php //include "includes/widget_brands.php"; ?>
</div><!-- /.container -->
</div>
</div><!-- /.body-content -->
<?php include "includes/footer.php"; ?>
<?php include "includes/javascripts.php"; ?>
<script>
function showFeedback(){
document.getElementById('email_input').style.display ="block";
}
</script>
<script>
$(document).ready(function(){
$('#email_input').keyup(function(){
$.post('function/check_email.php', {
email: editForm.email.value
},
function(result){
$('#email_feedback').html(result).show();
});
});
});
</script>
<script>
function checkPasswordStrength(){
document.getElementById('password_input').style.display ="block";
}
</script>
<script>
$(document).ready(function(){
$('#password_input').keyup(function(){
$.post('function/check_password_reg.php', {
password: editForm.password.value
},
function(result){
$('#password_feedback').html(result).show();
});
});
});
</script>
</body>
</html>
<?php
}
?>
<?php session_commit();?>
<?php mysqli_close($con); ?>