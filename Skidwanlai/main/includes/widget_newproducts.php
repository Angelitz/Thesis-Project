<!-- ============================================== NEW PRODUCTS ============================================== -->
<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
	<div class="more-info-tab clearfix ">
		<h3 class="new-product-title pull-left">New Products</h3>
	</div>
	<div class="tab-content outer-top-xs">
		<div class="tab-pane in active" id="all">
			<div class="product-slider">
				<div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
<!-- LOOP -->
<?php
$shownew = mysqli_query($con, "SELECT *, SUM(stock) as tStock FROM tbl_prod GROUP BY code ORDER BY dateadded DESC LIMIT 10;");
if ($shownew){
	while ($row_shownew=mysqli_fetch_assoc($shownew)){ ?>
	<div class="item item-carousel" style="width:200px;margin: auto;">
		<div class="products">
			<div class="product">
				<div class="product-image">
					<div class="image" align="center">
						<?php
									if ($row_shownew['categoryname']!="Desktop Package"){
									?>
										<a href="category_brand_detail.php?categoryname=<?php echo $row_shownew['categoryname'];?>&brandname=<?php echo $row_shownew['brandname'];?>&code=<?php echo $row_shownew['code'];?>">
									<?php
									}
									else {
									?>
										<a href="package_detail.php?categoryname=<?php echo $row_shownew['categoryname'];?>&brandname=<?php echo $row_shownew['brandname'];?>&code=<?php echo $row_shownew['code'];?>">
									<?php
									}
									?>

							<img src="../Administrator/pages/<?php echo $row_shownew['img'];?>" height="170px;">
							<?php
							if ($row_shownew["markdown"]>0){ ?>
								<div class="tag sale" style="right:0px; top: 100px; font-size: 13px;height:70px; width: 70px; line-height: 70px;">
									<?php echo $row_shownew["markdown"]*100 . "% Off";?>
								</div><?php	
							} ?>
						</a>
					</div><!-- /.image -->
				</div><!-- /.product-image -->
			<div class="product-info text-left">
				<h3 date-toggle='tooltip' data-placement='top' title="<?php echo $row_shownew['name'];?>" class="name" style="white-space: nowrap; width: 100%; overflow: hidden; text-overflow: ellipsis;">

					<?php
									if ($row_shownew['categoryname']!="Desktop Package"){
									?>
										<a href="category_brand_detail.php?categoryname=<?php echo $row_shownew['categoryname'];?>&brandname=<?php echo $row_shownew['brandname'];?>&code=<?php echo $row_shownew['code'];?>">
									<?php
									}
									else {
									?>
										<a href="package_detail.php?categoryname=<?php echo $row_shownew['categoryname'];?>&brandname=<?php echo $row_shownew['brandname'];?>&code=<?php echo $row_shownew['code'];?>">
									<?php
									}
									?>
				<?php echo $row_shownew['name'];?></a></h3>
					<div class="description">
					<?php
						if ($row_shownew['categoryname']=="Desktop Package"){
							?>
							<p><?php echo $row_shownew['categoryname'];?></p>
							<?php
						}
						else {
							?>
							<p><?php echo $row_shownew['brandname'];?></p>
							<?php
						}
					?>
					

					<span style="font-size: 16px; font-family: 'FjallaOneRegular'; line-height: 18px; text-transform: uppercase; color: #666666; padding: 0px; font-weight: normal;">Availability :</span>
					&emsp;

																		<?php
																			if($row_shownew['tStock']>0){
																				?>
																					<span style="color: #1fda9a; font-size: 20px;"><?php echo $row_shownew['tStock'];?></span>
																				<?php
																			}

																			else {
																				?>
																					<span style="color: #ff6c6c; font-size: 16px;">
																					Out of stock
																					</span>
																				<?php
																			}
																		?>
					</div>
					<div class="product-price">
																	<?php
																		if($row_shownew['markdown']>0){
																		?>
																		<span class="price-before-discount" style="color:#666666;">PHP <?php echo number_format($row_shownew['price'], 2);?></span><br>
																			<span class="price" style="font-size: 20px; color: #009D66;">
																			PHP <?php echo number_format($row_shownew['price']-($row_shownew['price']*$row_shownew['markdown']), 2);?></span>
																			
																		<?php	
																		}

																		else {
																		?>
																			<span class="price-before-discount" style="color:#666666;"></span><br>
																			<span class="price" style="font-size: 20px; color: #009D66;">PHP <?php echo number_format($row_shownew['price'], 2);?></span>
																		<?php	
																		}

																	?>
																		

																	</div><!-- /.product-price -->
			</div><!-- /.product-info -->
			<?php
			if (!isset($_SESSION['accid'])){
				?>
				<div class="cart clearfix animate-effect">
				<div class="action">
					<?php
									if ($row_shownew['categoryname']!="Desktop Package"){
									?>
										<a class="lnk btn btn-primary" href="category_brand_detail.php?categoryname=<?php echo $row_shownew['categoryname'];?>&brandname=<?php echo $row_shownew['brandname'];?>&code=<?php echo $row_shownew['code'];?>">
									<?php
									}
									else {
									?>
										<a class="lnk btn btn-primary" href="package_detail.php?categoryname=<?php echo $row_shownew['categoryname'];?>&brandname=<?php echo $row_shownew['brandname'];?>&code=<?php echo $row_shownew['code'];?>">
									<?php
									}
									?>
					<i class="fa fa-eye inner-right-vs"></i>View Details</a>
				</div>
			</div><!-- /.cart -->
				<?php
			}
			else {
			?>
			<div class="cart clearfix animate-effect">
				<div class="action">
					<?php
									if ($row_shownew['categoryname']!="Desktop Package"){
									?>
										<a class="lnk btn btn-primary" href="category_brand_detail.php?categoryname=<?php echo $row_shownew['categoryname'];?>&brandname=<?php echo $row_shownew['brandname'];?>&code=<?php echo $row_shownew['code'];?>">
									<?php
									}
									else {
									?>
										<a class="lnk btn btn-primary" href="package_detail.php?categoryname=<?php echo $row_shownew['categoryname'];?>&brandname=<?php echo $row_shownew['brandname'];?>&code=<?php echo $row_shownew['code'];?>">
									<?php
									}
									?>
					<i class="fa fa-eye inner-right-vs"></i>View Details</a>
				</div>
			</div><!-- /.cart -->
			<?php
			}
			?>
			</div><!-- /.product -->

		</div><!-- /.products -->
	</div><!-- /.item -->

		<?php	
		}
	}
?>
<!-- END: LOOP -->
	
				</div><!-- /.home-owl-carousel -->
			</div><!-- /.product-slider -->
		</div><!-- /.tab-pane -->
	</div><!-- /.tab-content -->
</div><!-- /.scroll-tabs -->
<!-- ============================================== NEW PRODUCTS : END ============================================== -->