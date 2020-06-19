<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
	<?php include "includes/head.php"; ?>
	<body class="cnt-home">
		<?php include "includes/header.php"; ?>
		<div class="body-content outer-top-bd">
			<div class="container">
				<div class="x-page inner-bottom-sm">
					<div class="row">
						<div class="col-md-12 x-text text-center">
							<h1>404</h1>
							<p>We are sorry, the page you've requested is not available. </p>
							<a href="index.php"><i class="fa fa-home"></i>&nbsp;Go To Homepage</a>
						</div>
					</div><!-- /.row -->
				</div><!-- /.sigin-in-->
			</div><!-- /.container -->
		</div><!-- /.body-content -->
		<?php include "includes/footer.php"; ?>
		<?php include "includes/javascripts.php"; ?>
	</body>
</html>
<?php session_commit(); ?>
<?php mysqli_close($con); ?>