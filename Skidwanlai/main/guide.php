<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<?php include "includes/head.php"; ?>
<body class="cnt-home">
<?php include "includes/header.php"; ?>
<div class="body-content">
<div class="container">
<div class="homepage-container">
<div class="terms-conditions-page inner-bottom-sm">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
	<div class="side-menu animate-dropdown outer-bottom-xs">
    	<div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Help Guide</div>
    	<nav class="yamm megamenu-horizontal" role="navigation">
        	<ul class="nav">
        		<li class="dropdown menu-item">
					<a href="guide.php?page=1" class="dropdown-toggle">Sign Up</a>
				</li>
				<li class="dropdown menu-item">
					<a href="guide.php?page=2" class="dropdown-toggle">Activation</a>
				</li>
				<li class="dropdown menu-item">
					<a href="guide.php?page=3" class="dropdown-toggle">Login</a>
				</li>
				<li class="dropdown menu-item">
					<a href="guide.php?page=4" class="dropdown-toggle">Forgot Password</a>
				</li>
				<li class="dropdown menu-item">
					<a href="guide.php?page=5" class="dropdown-toggle">Homepage</a>
				</li>
				<li class="dropdown menu-item">
					<a href="guide.php?page=6" class="dropdown-toggle">Basket</a>
				</li>
				<li class="dropdown menu-item">
					<a href="guide.php?page=7" class="dropdown-toggle">Place Order</a>
				</li>
				<li class="dropdown menu-item">
					<a href="guide.php?page=8" class="dropdown-toggle">Check Out: Cash on Delivery</a>
				</li>
				<li class="dropdown menu-item">
					<a href="guide.php?page=9" class="dropdown-toggle">Check Out: PayPal</a>
				</li>
				<li class="dropdown menu-item">
					<a href="guide.php?page=10" class="dropdown-toggle">Order History</a>
				</li>
        	</ul>
        </nav>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-9 terms-conditions">
	<div class="">
	<?php if (!isset($_GET["page"])){ ?>
		<script>
			window.location.href="guide.php?page=1";
		</script>
	<?php	
	}
	else {
		if ($_GET["page"]==1){?>
			<h3>Sign Up</h3>
			<ol>
				<li>Click <b>LOGIN | REGISTER</b> located on the upper right corner of the page.</li>
				<li>On the <b>CREATE A NEW ACCOUNT</b> panel, complete the form needed to register your new account.<br><br>
					<img src="assets/images/guide/1.PNG" style="width:50%;"/>
				</li>
				<li>Once all of the fields are complete, click <b>SIGN UP</b>.</li>
				<li>An activation code will then be sent to your email address.<br><br>
					<img src="assets/images/guide/2.PNG" style="width:100%;"/>
				</li>
			</ol>
		<?php
		}

		else if ($_GET["page"]==2){?>
			<h3>Activation</h3>
			<ol>
				<li>On the <b>ACTIVATION FORM</b>, copy and paste the activation code sent to your email.<br><br>
					<img src="assets/images/guide/3.PNG" style="width:50%;"/>
				</li>
				<li>Once the activation code is entered, click <b>ACTIVATE</b>.</li>
				<li>Your account will be activated and logged in.</li>
				<li>You will be redirected to our <b>HOMEPAGE</b>.</li>
			</ol>
		<?php
		}

		else if ($_GET["page"]==3){?>
			<h3>Login</h3>
			<ol>
				<li>If you already have an existing account, proceed to <b>LOGIN | REGISTER</b>.</li>
				<li>On the <b>SIGN IN</b> panel, enter your existing email and password.<br><br>
					<img src="assets/images/guide/4.PNG" style="width:50%;"/>
				</li>
				<li>Once all of the fields are complete, click <b>LOGIN</b>.</li>
				<li>Your account will be logged in.</li>
				<li>You will be redirected to our <b>HOMEPAGE</b>.</li>
			</ol>
		<?php
		}

		else if ($_GET["page"]==4){?>
			<h3>Forgot Password</h3>
			<ol>
				<li>Click on <b>FORGOT YOUR PASSWORD?</b> below the <b>SIGN IN</b> panel.<br><br>
					<img src="assets/images/guide/4.PNG" style="width:50%;"/>
				</li>
				<li>You will be redirected to the <b>FORGOT PASSWORD FORM</b>.<br><br>
					<img src="assets/images/guide/20.PNG" style="width:50%;"/>
				</li>
				<li>Once all of the fields are complete, click <b>RETRIEVE PASSWORD</b>.</li>
				<li>A notification will appear.<br><br>
					<img src="assets/images/guide/21.PNG" style="width:50%;"/>
				</li>
				<li>Copy your new password and proceed to <b>LOGIN | REGISTER</b>.</li>
			</ol>
		<?php
		}

		else if ($_GET["page"]==5){?>
			<h3>Homepage</h3>
			<ol>
				<li>Once you successfully logged in, you will be greeted by our <b>HOMEPAGE</b>.<br><br>
					<img src="assets/images/guide/5.PNG" style="width:100%;"/>
				</li>
				<li>You will be presented with all of our products available for you.</li>
				<li>From here, you can choose whether to select a <b>CATEGORY</b>, <b>PRODUCT</b>, <b>PACKAGE</b> or even <b>SEARCH</b> for a specific product.<br><br>
				<img src="assets/images/guide/6.PNG" style="width:100%;"/>
				</li>
				<li>View a more in-depth product specification by clicking <b>VIEW DETAILS</b>.</li>
			</ol>
		<?php
		}

		else if ($_GET["page"]==6){?>
			<h3>Basket</h3>
			<ol>
				<li>Adding a product to your basket is simple. Choose an amount of quantity and click <b>ADD TO CART</b>.<br><br>
					<img src="assets/images/guide/7.PNG" style="width:100%;"/>
				</li>
				<li>The product will be successfully added to your basket.<br><br>
					<img src="assets/images/guide/8.PNG" style="width:100%;"/>
				</li>
			</ol>
		<?php
		}

		else if ($_GET["page"]==7){?>
			<h3>Place Order</h3>
			<ol>
				<li>Once you are satisfied with the products that you want to buy, click <b>PLACE ORDER</b> from the <b>TOTAL</b> panel located below the <b>BASKET</b> table.<br><br>
					<img src="assets/images/guide/9.PNG" style="width:50%;"/>
				</li>
				<li>You will be required to please read the <b>TERMS AND CONDITIONS</b>. Click <b>NEXT</b>.<br><br>
					<img src="assets/images/guide/10.PNG" style="width:80%;"/>
				</li>
				<li>You are required to fill up the <b>CUSTOMER ORDER FORM</b>. This includes your full name, personal address and contact number.<br><br>
					<img src="assets/images/guide/11.PNG" style="width:80%;"/>
				</li>
			</ol>
		<?php
		}

		else if ($_GET["page"]==8){?>
			<h3>Check Out: Cash on Delivery</h3>
			<ol>
				<li>Choose <b>CASH ON DELIVERY</b> as the <b>MODE OF PAYMENT</b> and a <b>DELIVERY PERIOD</b>.</li>
				<li>From here, you can see the <b>TOTAL COST</b> of your order.<br><br>
					<img src="assets/images/guide/12.PNG" style="width:100%;"/>
				</li>
				<li>Click <b>SEND</b>.</li>
				<li>Your order will be sent successfully and is awaiting for a confirmation.</li>
			</ol>
		<?php
		}

		else if ($_GET["page"]==9){?>
			<h3>Check Out: PayPal</h3>
			<ol>
				<li>Choose <b>PAYPAL</b> as the <b>MODE OF PAYMENT</b> and a <b>DELIVERY PERIOD</b>.</li>
				<li>From here, you can see the <b>TOTAL COST</b> of your order.<br><br>
					<img src="assets/images/guide/13.PNG" style="width:100%;"/>
				</li>
				<li>Click <b>SEND</b>.</li>
				<li>You will be prompted with a confirmation to proceed to <b>PAYPAL</b>.<br><br>
					<img src="assets/images/guide/14.PNG" style="width:50%;"/>
				</li>
				<li>Click <b>CHECK OUT WITH PAYPAL</b>. You will be redirected to the <b>PayPal</b> page to log in to your account.<br><br>
					<img src="assets/images/guide/15.PNG" style="width:80%;"/>
				</li>
				<li>Review your information and proceed by clicking <b>PAY NOW</b>.<br><br>
					<img src="assets/images/guide/16.PNG" style="width:80%;"/>
				</li>
				<li>You have successfully purchased your orders using <b>PAYPAL</b>. Click <b>RETURN TO SKIDWANLAI COMPUTER WORLD TANZA</b> to go back to your account and be able to view your order history.<br><br>
					<img src="assets/images/guide/17.PNG" style="width:80%;"/>
				</li>
			</ol>
		<?php
		}

		else if ($_GET["page"]==10){?>
			<h3>Order History</h3>
			<ol>
				<li>All of your orders will be viewable within the <b>ORDER HISTORY</b> panel located in your <b>PROFILE</b> page.
				<br><br>
					<img src="assets/images/guide/18.PNG" style="width:80%;"/>
				</li>
				<li>From here, your invoice and order list will be accessible by clicking <b>VIEW</b>.
				<br><br>
					<img src="assets/images/guide/19.PNG" style="width:80%;"/>
				</li>
			</ol>
		<?php
		}

		else { ?>
			<script>
			window.location.href="guide.php?page=1";
			</script>
		<?php
		}
	}
	?>
	</div>
</div>
</div><!-- /.row -->
</div><!-- /.sigin-in-->
<?php //include "includes/widget_brands.php"; ?>
</div><!-- /.container -->
</div>
</div><!-- /.body-content -->
<?php include "includes/footer.php"; ?>
<?php include "includes/javascripts.php"; ?>
</body>
</html>
<?php session_commit();?>
<?php mysqli_close($con); ?>
