<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<?php include "includes/head.php"; ?>
<body class="cnt-home">
<?php include "includes/header.php"; ?>
<div class="body-content">
<div class="container">
<div class="homepage-container">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
<?php include "includes/widget_category.php"; ?>
<?php include "includes/widget_packages_long.php";?>
</div>
<!-- ============================================== CONTENT ============================================== -->
<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
<?php include "includes/widget_slideshow.php"; ?>
<?php include "includes/widget_newproducts.php"; ?>
<?php include "includes/widget_topsellers.php"; ?>
</div><!-- /.homebanner-holder -->
<!-- ============================================== CONTENT : END ============================================== -->
</div><!-- /.row -->
<?php //include "includes/widget_brands.php"; ?>
</div>
</div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->
<?php include "includes/footer.php"; ?>
<script src="assets/js/jquery.php.css.js"></script>
<?php include "includes/javascripts.php";?>
</body>
</html>
<?php session_commit();?>
<?php mysqli_close($con);?>
