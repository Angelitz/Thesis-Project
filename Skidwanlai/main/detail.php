<!DOCTYPE html>
<?php session_start();?>

<html lang="en">
<?php include "includes/head.php"; ?>

<script>
	function mySubmit(){

		var name1=document.getElementById('name1').value;
		document.getElementById('name2').innerHTML=name1;

		var addqty=document.getElementById('addqty').value;
		document.getElementById('qty2').innerHTML=addqty;
	}
</script>
<body class="cnt-home">
<?php include "includes/header.php"; ?>
<div class="body-content">
<div class="container">
<div class="homepage-container">
<div class="row single-product">
<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
<?php include "includes/widget_category.php"; ?>
<?php include "includes/widget_newproducts_long.php";?>
</div>
<!-- ============================================== CONTENT ============================================== -->
<?php
	if(isset($_GET["errorQ"])){
	?>
		<div class='col-md-9'>
		<div class="alert alert-danger alert-dismissable">
      	<button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
      	Your basket is already full! We recommend you to check out your existing basket in order to purchase more products. Thank you.
    	</div>
		</div>
	<?php	
	}
	if(isset($_GET["success"])){
	?>
		<div class='col-md-9'>
		<div class="alert alert-success alert-dismissable">
      	<button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
      	Successfully added to your cart!
    	</div>
		</div>
	<?php	
	}
?>
<div class='col-md-9'>
	<?php
		$query_detail = mysqli_query($con, "SELECT *,SUM(stock) as tStock, min(daterestock) as mindaterestock FROM tbl_prod WHERE code='$_GET[code]';");
		while ($row_detail = mysqli_fetch_assoc($query_detail)){
	?>
		<div class="row" style="border-top:1px solid #e5e5e5;">

			 <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
				<div class="product-item-holder size-big single-product-gallery small-gallery">
					<div id="owl-single-product">
					<div class="single-product-gallery-item" id="slide1" align="center" style="border: none; margin-top:10px;">
							<img WIDTH="300px" src="../Administrator/pages/<?php echo $row_detail['img'];?>"/>
							<?php
								if ($row_detail["markdown"]>0){
									?>
									<div class="tag sale" style="position: absolute; right:25px; top: 20px; font-size: 13px;height:70px; width: 70px; line-height: 70px;">
									<?php echo $row_detail["markdown"]*100 . "% Off";?>
									</div>
									<?php
								}
							?>
					</div><!-- /.single-product-gallery-item -->
					</div><!-- /.single-product-slider -->
				</div><!-- /.single-product-gallery -->
			</div><!-- /.gallery-holder -->
			<div class='col-sm-6 col-md-7 product-info-block'>
				<div class="product-info">
					<h1 class="name" id="name1" style="line-height: 30px;"><?php echo $row_detail['name'];?></h1>
						<div class="rating-reviews m-t-20">
							<div class="row">
								<div class="col-sm-8">
									<div class="reviews">
										<a href="#" class="lnk"><?php echo $row_detail['brandname'];?></a>
									</div>
								</div>
							</div><!-- /.row -->
						</div><!-- /.rating-reviews -->

								<div class="stock-container info-container m-t-10">
									<div class="row">
										<div class="col-sm-12">
											<span style="font-size: 16px; font-family: 'FjallaOneRegular'; line-height: 18px; text-transform: uppercase; color: #666666; font-weight: normal;">Availability :</span>
											&emsp;
											<?php
												if($row_detail['tStock']>0){
												?>
													<span style="color: #1fda9a; font-size: 20px;"><?php echo $row_detail['tStock'];?></span>
												<?php
												}
												else {
												?>
													<span style="color: #ff6c6c; font-size: 20px;">
													Out of stock
													</span>
												<?php
												}
												?>
										</div>
									</div><!-- /.row -->
								</div><!-- /.stock-container -->

								<div class="description-container m-t-20">
								<p><?php echo $row_detail['des'];?></p>
								</div><!-- /.description-container -->

								<div class="price-container info-container m-t-20">
									<div class="row">
										<div class="col-sm-12">
											<div class="price-box">
											<?php
												if ($row_detail['markdown']>0){
												?>
														
													<span style="text-decoration: line-through; color:#666666; font-weight: 400; font-size: 18px;">PHP <?php echo number_format($row_detail['price'],2);?></span><br>
													<span class="price" style="color: #009D66;">PHP <?php echo number_format($row_detail['price']-($row_detail['price']*$row_detail['markdown']), 2);?></span>
													
												<?php	
												}

												else {
												?>
													<span class="price" style="color: #009D66;">PHP <?php echo number_format($row_detail['price'], 2);?></span>
												<?php	
												}

											?>
												

											</div>
										</div>
									</div><!-- /.row -->
								</div><!-- /.price-container -->
								<?php
									if (!isset($_SESSION["accid"])){
									?>
										<div class="quantity-container info-container">
											<div class="row">
												<table>
													<tr>
														<td style="padding-left:5px;">
															<div class="form-group">
																<a href="login.php" class="btn btn-yellow"><i class="fa fa-sign-in inner-right-vs"></i>Log in required</a>
															</div>
														</td>
													</tr>
												</table>	
											</div><!-- /.row -->
										</div><!-- /.quantity-container -->
									<?php	
									}

									else {
									?>
										<?php
											if ($row_detail["tStock"]>0){
											?>
												<div class="quantity-container info-container">
											<div class="row">
												<table>
													<tr>
														<td style="padding-right: 5px;">
															<div class="form-group" >
																<span class="label">Qty :</span>
															</div>
														</td>
														<td style="padding-left: 5px; padding-right: 5px;">
															<div class="form-group" >
																<form method="post" action="function/add_to_cart.php">
																<input type="hidden" id="code" name="code" value="<?php echo $row_detail['code'];?>">
					    										<input name="addqty" id="addqty1" value="1" type="number" style="width:auto;" min="1" max="<?php echo $row_detail['tStock'];?>"class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
															</div>
														</td>
														<td style="padding-left:5px;">
															<div class="form-group">
																<button type="button" onclick="mySubmit();" class="btn btn-primary" data-toggle="modal" data-target="#confirm"><i class="fa fa-shopping-cart inner-right-vs"></i>Add To Cart</button>
															</div>
														</td>
													</tr>
												</table>	
											</div><!-- /.row -->
										</div><!-- /.quantity-container -->
											<?php	
											}

										?>
										
									<?php
									}
									?>
				</div><!-- /.product-info -->
			</div><!-- /.col-sm-7 -->
		</div><!-- /.row -->

					<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="panel panel-green" style="width:300px; margin: auto; margin-top: 25%;">
								<div class="panel-heading">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="panel-title" id="myModalLabel">Confirm</h4>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12 text-center">
										<label style="font-size: 14px;font-weight: 400;">Add this item to your cart?</label>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 text-center">
										<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>&emsp;
									<input type="hidden" value="<?php echo $_GET['categoryname'];?>" name="categoryname"/>
									<input type="hidden" value="<?php echo $_GET['brandname'];?>" name="brandname"/>
									<input type="submit" name="ok" id="ii" value="Yes" class="btn btn-primary">
										</div>
									</div>
									
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="panel panel-green" style="width:300px; margin: auto; margin-top: 25%;">
								<div class="panel-heading">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="panel-title" id="myModalLabel">Message</h4>
								</div>
								<div class="panel-body">
									<label style="font-size: 14px;font-weight: 400;">Product successfully added to your cart.</label>
									<a href="" type="submit" name="suc" id="ii"class="btn btn-primary"></a>
								</div>

							</div>
						</div>
					</div>
		<?php
		}
	?>
				<div style="margin-top: 50px;"></div>
<?php include "includes/widget_similarcategory.php"; ?>
<?php include "includes/widget_morefrom.php"; ?>
</div><!-- /.col -->
<!-- ============================================== CONTENT : END ============================================== -->
</div><!-- /.row -->
<?php //include "includes/widget_brands.php"; ?>
</div>
</div><!-- /.container -->
</div><!-- /.body-content -->
<?php include "includes/footer.php"; ?>
<?php include "includes/javascripts.php"; ?>
</body>
</html>
<?php session_commit();?>
<?php mysqli_close($con);?>
