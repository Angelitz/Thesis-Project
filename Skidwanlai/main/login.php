<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<?php include "includes/head.php"; ?>
<body class="cnt-home">
<?php include "includes/header.php"; ?>
<div class="body-content">
<div class="container">
<div class="homepage-container">
<div class="sign-in-page inner-bottom-sm">
<div class="row">
<!-- Sign-in -->
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Sign IN</h4>
	<?php
	if (isset($_POST['log'])){
		$query_login = mysqli_query($con, "SELECT * FROM tbl_acc WHERE email='$_POST[emaillog]' AND pw='$_POST[pwlog]' AND status='Active';");
		if (mysqli_num_rows($query_login)>0){
			while ($row_login = mysqli_fetch_assoc($query_login)){
				$_SESSION["accid"]=$row_login["accid"];
				$_SESSION["fname"]=$row_login["fname"];
				$_SESSION["lname"]=$row_login["lname"];
				$_SESSION["fullname"]=$row_login["fname"]." ".$row_login["lname"];
				$_SESSION["email"]=$row_login["email"];
				$_SESSION["password"]=$row_login["pw"];
				$_SESSION["address"]=$row_login["ad"];
				$_SESSION["contact"]=$row_login["con"];
			} ?>
			<script>
				window.location.href="index.php";
			</script><?php
		}

		else {
			$query_login2 = mysqli_query($con, "SELECT * FROM tbl_acc WHERE email='$_POST[emaillog]' AND pw='$_POST[pwlog]' AND status='Inactive';");
			if (mysqli_num_rows($query_login2)>0){
                $row_login2 = mysqli_fetch_assoc($query_login2);
                
                $to = $row_login2["email"];
                $subject = "Activate Your Account";
                $body = "Dear ".$row_login2["fname"]." ".$row_login2["lname"]."\n\nYour account is now registered.\nProceed to your account by copying this activation code:\n".$row_login2["activationcode"]."\nand pasting it here:\nhttp://skidwanlai-tanza.byethost31.com/main/activateform.php\n\nYou may also click on this link to activate and proceed to your account:\nhttp://skidwanlai-tanza.byethost31.com/main/function/thisisit.php?activationcode=".$row_login2["activationcode"]."\n\nPlease remember that Skidwanlai Computer World only operates within Cavite only and may not be used in ordering outside the said area.\n\nThank you.";
                $headers = "From: Skidwanlai Computer World Tanza <skidwanlaiph@gmail.com>\r\n";
                $headers .= "Reply-To: skidwanlaiph@gmail.com\r\n";
                $headers .= "Return-Path: skidwanlaiph@gmail.com\r\n";
                $headers .= "CC: skidwanlaiph@gmail.com\r\n";
                $headers .= "BCC: skidwanlaiph@gmail.com\r\n";
                //mail($to, $subject, $body, $headers);
            ?>
				<script>
					window.location.href="activateform.php?email=<?php echo $row_login2['email'];?>";
				</script><?php
			}
			
            else { ?>
                <div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Unable to log in
				</div><?php
			}
		}
	} ?>
	<form class="register-form outer-top-xs" role="form" method="post" action="login.php">
		<div class="form-group">
		    <label class="info-title">Email Address <span>*</span></label>
		    <input autofocus type="email" placeholder="Enter your email address" required name="emaillog" class="form-control unicase-form-control text-input" maxlength="500">
		</div>
	  	<div class="form-group">
		    <label class="info-title">Password <span>*</span></label>
		    <input type="password" required name="pwlog" placeholder="Enter your password" class="form-control unicase-form-control text-input" maxlength="12">
		</div>
		<div class="radio outer-xs">
		  	<a href="forgot_password.php" class="forgot-password pull-left">Forgot your Password?</a>
		</div>
	  	<input type="submit" name="log" class="btn-upper btn btn-primary checkout-page-button" value="Login"/>
	</form>
</div>

<!--                                                    create a new account                                  -->


<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">create a new account</h4>
	<?php
	if (isset($_GET["error"])){ ?>
		<div class="alert alert-danger alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			This email is already registered. Please try again
		</div>
		<?php
	}
	?>
	<form class="register-form outer-top-xs" id="regForm" role="form" method="post" action="function/acc_activate.php">
				<div class="form-group">
	    	<label class="info-title">First Name <span>*</span></label>
	    	<input type="text" required name="fname" placeholder="Enter your first name" class="form-control unicase-form-control text-input" maxlength="100"/>
	  		</div>
	  		<div class="form-group">
	    	<label class="info-title">Last Name <span>*</span></label>
	    	<input type="text" required name="lname" placeholder="Enter your last name" class="form-control unicase-form-control text-input" maxlength="100"/>
	  		</div>
				<div class="form-group">
	    	<label class="info-title">Address <span>*</span></label>
	    	<input type="text" required name="address" placeholder="Exact Address for delivery" class="form-control unicase-form-control text-input" maxlength="900"/>
	  		</div>
				<div class="form-group">
	    	<label class="info-title">Contact Number <span>*</span></label>
	    	<input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 32 || event.charCode == 40 || event.charCode == 41 || event.charCode == 43 || event.charCode == 45" required name="contact" placeholder="Current contact number" maxlength="30" class="form-control unicase-form-control text-input"/>

	  		</div>
				<div class="form-group">
	    	<label class="info-title">Email Address <span>*</span></label>
	    	<input type="email" required name="email" placeholder="Enter a valid email address" class="form-control unicase-form-control text-input" maxlength="500" onkeyup="showFeedback();" id="email_input" />
				<div id="email_feedback" style="margin-top:5px;"></div>
				</div>
				<div class="form-group">
	    	<label class="info-title">Password <span>*</span></label>
	    	<input type="password" required placeholder="Password must have 6 ~ 12 characters" pattern=".{6,12}" maxlength="12" name="password" id="password_input" class="form-control unicase-form-control text-input" onKeyUp="checkPasswordStrength();"/>
				<div id="password_feedback" style="margin-top:5px;"></div>
	  		</div>

	  	<input type="submit" value="Sign Up" name="su" id="submit" class="btn-upper btn btn-primary checkout-page-button"/>
	</form>
</div>
<!--                                            create a new account                                               -->
</div><!-- /.row -->
</div><!-- /.sigin-in-->
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
			$.post('function/check_email_reg.php', {
				email: regForm.email.value
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
				password: regForm.password.value
			},
		function(result){
			$('#password_feedback').html(result).show();
		});
		});
	});
</script>
</body>
</html>
<?php session_commit();?>
<?php mysqli_close($con); ?>
