<!-- ============================================== HEADER ============================================== -->
<?php
	$query_info = mysqli_query($con, "SELECT * FROM tbl_info;");
	$show_info = mysqli_fetch_assoc($query_info);
?>
<?php 	include "function/auto_accept.php";	?>
<?php
	$chk_always_basket = mysqli_query($con, "SELECT * FROM tbl_basket WHERE dateexp<=NOW();");
	if (mysqli_num_rows($chk_always_basket)>0){
		while($row_chk_basket = mysqli_fetch_assoc($chk_always_basket)){
			mysqli_query($con, "UPDATE tbl_prod SET stock=stock+$row_chk_basket[qty] WHERE code='$row_chk_basket[code]' ORDER BY daterestock LIMIT 1;");
			mysqli_query($con, "DELETE FROM tbl_basket WHERE code='$row_chk_basket[code]' AND dateexp<=NOW() LIMIT 1;");
		}
	}
?>
<header class="header-style-1">
<!-- ============================================== TOP MENU ============================================== -->
<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
        <a href="index.php">
		<img class="pull-left" src="assets/images/favicon.png" style="height: 67px; margin-right: 10px;"/><img class="pull-left" src="assets/images/logo2.png"/>
        </a>
			<div class="cnt-account" style="padding-top: 2%;">
				<ul class="list-unstyled">
					<?php
						if (isset($_SESSION["accid"])){
							$get_acc_disc = mysqli_query($con, "SELECT * FROM tbl_acc JOIN tbl_acc_disc ON tbl_acc.discid = tbl_acc_disc.discid WHERE tbl_acc.accid=$_SESSION[accid];");
							$row_acc_disc = mysqli_fetch_assoc($get_acc_disc);
							$discid = $row_acc_disc["discid"];
							$discname = $row_acc_disc["discname"];
							$discpercent = $row_acc_disc["discpercent"];
					?>	<li><a href="profile.php"><i class="icon fa fa-user">&nbsp</i>
							Welcome, <?php echo $_SESSION["fullname"];?></a>
							</li>
						<li><a href="profile.php"><i class="icon fa fa-key"></i>&nbsp;Order History</a>
							<?php
								$query_count_pending = mysqli_query($con, "SELECT * FROM tbl_order WHERE accid=$_SESSION[accid] AND orderstatus='Pending' GROUP BY invoice;");
									if (mysqli_num_rows($query_count_pending)>0){ ?>
										&nbsp;	<div title="Pending" style="color: white; padding: 5px 8px 5px 8px; border-radius: 50%; display:inline;background-color:#ff6c6c;"> <?php
											echo mysqli_num_rows($query_count_pending);?>
												</div> <?php
									} ?>
								<?php
								$query_count_pro = mysqli_query($con, "SELECT * FROM tbl_order WHERE accid=$_SESSION[accid] AND orderstatus='Processing' GROUP BY invoice;");
									if (mysqli_num_rows($query_count_pro)>0){ ?>
										&nbsp;	<div title="Processing" style="color: white; padding: 5px 8px 5px 8px; border-radius: 50%; display:inline;background-color:#337ab7;"> <?php
											echo mysqli_num_rows($query_count_pro); ?>
												</div> <?php
									} ?>
								<?php
								$query_count_delivery = mysqli_query($con, "SELECT * FROM tbl_order WHERE accid=$_SESSION[accid] AND orderstatus='Ready For Delivery' GROUP BY invoice;");
									if (mysqli_num_rows($query_count_delivery)>0){ ?>
										&nbsp;	<div title="Orders ready for delivery" style="color: white; padding: 5px 8px 5px 8px; border-radius: 50%; display:inline;background-color:#f0ad4e;"> <?php
											echo mysqli_num_rows($query_count_delivery); ?>
												</div> <?php
									} ?>
								<?php
								$query_count_delivered = mysqli_query($con, "SELECT * FROM tbl_order WHERE accid=$_SESSION[accid] AND orderstatus='Delivered' GROUP BY invoice;");
									if (mysqli_num_rows($query_count_delivered)>0){ ?>
										&nbsp;	<div title="Orders delivered" style="color: white; padding: 5px 8px 5px 8px; border-radius: 50%; display:inline;background-color:#5cb85c;"> <?php
											echo mysqli_num_rows($query_count_delivered); ?>
												</div> <?php
									} ?>

						</li>
						<li><a style="display:inline;" href="mycart.php">
							<i class="icon fa fa-shopping-cart"></i>&nbsp;
							My Cart</a>
								<?php
								$query_count_basket = mysqli_query($con, "SELECT SUM(qty) AS TotalQty FROM tbl_basket WHERE accid=$_SESSION[accid];");
									if ($count_basket=mysqli_fetch_assoc($query_count_basket)){
										if ($count_basket['TotalQty']!=NULL){
											?>
											&nbsp;
											<div style="color: white; padding: 5px 8px 5px 8px; border-radius: 50%; display:inline;background-color:#f1c40f;">
												<?php
												echo $count_basket['TotalQty'];
												?>
											</div>
											<?php
										}

									}
								?>
							</li>
                        <li><a href="guide.php?page=1"><i class="icon fa fa-question-circle"></i>&nbsp;Help Guide</a></li>
						<li><a href="function/logout.php"><i class="icon fa fa-sign-out"></i>&nbsp;Logout</a></li>
					<?php
						}
						else {
					?>
                        <li><a href="guide.php?page=1"><i class="icon fa fa-question-circle"></i>&nbsp;Help Guide</a></li>
                        <li><a href="login.php"><i class="icon fa fa-sign-in"></i>&nbsp;Login | Register</a></li>
					<?php	}
					?>
				</ul>

			</div><!-- /.cnt-account -->

			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->
<!-- ============================================== TOP MENU : END ============================================== -->

<!-- ============================================== NAVBAR ============================================== -->
<div class="header-nav animate-dropdown" style="margin-bottom: 25px;">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
					<span class="icon-bar"></span>
                </button>
            </div>
	<div class="nav-bg-class">
        <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
		<div class="nav-outer">
			<ul class="nav navbar-nav">
				<li class="dropdown">
				<a href="index.php" class="dropdown-toggle">Home</a>
				</li>
				<li class="dropdown">
				<a href="allprod.php">All Products</a>
				</li>
				<li class="dropdown">
				<a href="allpackages.php">Desktop Packages</a>
				</li>
				<!--<li class="dropdown">
				<a href="aboutus.php">About Us</a>
				</li>-->
			</ul><!-- /.navbar-nav -->
				<div class="col col-md-4 col-xs-12 pull-right" style="margin-top: 1%;">
				<form method="GET" action="search.php">
				    <input type='text' name="search_input" class="search-field form-control unicase-form-control text-input" placeholder="Search here..." />
				</form>
				</div>
		<div class="clearfix"></div>
		</div><!-- /.nav-outer -->
		</div><!-- /.navbar-collapse -->
	</div><!-- /.nav-bg-class -->
        </div><!-- /.navbar-default -->
    </div><!-- /.container-class -->
</div><!-- /.header-nav -->
<!-- ============================================== NAVBAR : END ============================================== -->
</header>
<!-- ============================================== HEADER : END ============================================== -->
