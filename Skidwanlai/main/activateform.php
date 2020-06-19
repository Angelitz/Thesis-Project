<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['accid'])) {
?>
	<script>
	window.location.href="index.php";
	</script>
<?php
}
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
									<h3 class="panel-title">Activation</h3>
								</div>
								<div class="panel-body">
									An activation code was sent to your email.<br>
									Please follow the procedure sent to your email.
								</div><!-- /.panel-body -->
							</div><!-- /.panel panel-green -->
						</div><!-- /.col-md-5 center-block -->
<!-- ============================================== CONTENT : END ============================================== -->
					</div><!-- /.row -->
				</div><!-- /.homepage-container -->
			</div><!-- /.container -->
		</div><!-- /.body-content -->
		<?php include "includes/footer.php"; ?>
		<script src="assets/js/jquery.php.css.js"></script>
		<?php include "includes/javascripts.php"; ?>
	</body><!-- /.cnt-home -->
</html><!-- /html -->
<?php
}
session_commit();
mysqli_close($con);
?>