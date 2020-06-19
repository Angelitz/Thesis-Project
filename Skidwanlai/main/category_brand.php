<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<?php include "includes/head.php"; ?>
<style>
.dataTables_wrapper > .row > .col-sm-6 {
	width: auto;
}
</style>
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
				<div class='col-md-9'>
					<div class="search-result-container">
						<div id="myTabContent" class="tab-content">
							<!-- == START OF LIST LAYOUT == -->
							<div class="tab-pane active"  id="list-container">
							<div class="breadcrumb" style="margin-bottom: 10px;">
									<div class="container">
										<div class="breadcrumb-inner">
											<ul class="list-inline list-unstyled">
												<li><a href="index.php">Home</a></li>
												<li><a href="category.php?categoryname=<?php echo $_GET['categoryname'];?>"><?php echo $_GET["categoryname"];?></a></li>
												<li class='active'><?php echo $_GET["brandname"];?></li>
											</ul>
										</div><!-- /.breadcrumb-inner -->
									</div><!-- /.container -->
								</div><!-- /.breadcrumb -->
								<div class="category-product  inner-top-vs">
									<?php
									if (!isset($_GET['sortby'])){
										$query_items = mysqli_query($con, "SELECT *,SUM(stock) as tStock, MIN(daterestock) AS mindaterestock FROM tbl_prod WHERE categoryname='$_GET[categoryname]' AND brandname='$_GET[brandname]' GROUP BY code;");
									}

									else {
										if ($_GET['sortby']==1){
											$query_items = mysqli_query($con, "SELECT *,SUM(stock) as tStock, MIN(daterestock) AS mindaterestock FROM tbl_prod WHERE categoryname='$_GET[categoryname]' AND brandname='$_GET[brandname]' GROUP BY code ORDER BY price ASC;");
										}

										else {
											$query_items = mysqli_query($con, "SELECT *,SUM(stock) as tStock, MIN(daterestock) AS mindaterestock FROM tbl_prod WHERE categoryname='$_GET[categoryname]' AND brandname='$_GET[brandname]' GROUP BY code ORDER BY price DESC;");
										}
									}
									?>
									<div class="dataTable_wrapper">
										<div class="dataTables_length" id="dataTables-customerOrder_length">
											
						<div class="col-md-4">
							Sort by:
							<?php
							if (!isset($_GET['sortby'])){
							?>
								<select name="sortby" id="sortby" style="display: inline; width: auto;" class="form-control input-sm">
								<option style="display:none;"></option>
								<option value="category.php?categoryname=<?php echo $_GET['categoryname'];?>&brandname=<?php echo $_GET['brandname'];?>&sortby=1">Price: Lowest - Highest</option>
								<option value="category.php?categoryname=<?php echo $_GET['categoryname'];?>&brandname=<?php echo $_GET['brandname'];?>&sortby=2">Price: Highest - Lowest</option>
								</select>
							<?php
							}
							else {
								if ($_GET['sortby']==1){
								?>
									<select name="sortby" id="sortby" style="display: inline; width: auto;" class="form-control input-sm">
									<option value="category.php?categoryname=<?php echo $_GET['categoryname'];?>&brandname=<?php echo $_GET['brandname'];?>&sortby=1">Price: Lowest - Highest</option>
									<option value="category.php?categoryname=<?php echo $_GET['categoryname'];?>&brandname=<?php echo $_GET['brandname'];?>&sortby=2">Price: Highest - Lowest</option>
									</select>
								<?php	
							}
								else {
								?>
									<select name="sortby" id="sortby" style="display: inline; width: auto;" class="form-control input-sm">
									<option value="category.php?categoryname=<?php echo $_GET['categoryname'];?>&brandname=<?php echo $_GET['brandname'];?>&sortby=2">Price: Highest - Lowest</option>
									<option value="category.php?categoryname=<?php echo $_GET['categoryname'];?>&brandname=<?php echo $_GET['brandname'];?>&sortby=1">Price: Lowest - Highest</option>
									</select>
								<?php	
								}
								
							}	
							
							?>
							

							<script>
    							document.getElementById("sortby").onchange = function() {
        							if (this.selectedIndex!==0) {
            						window.location.href = this.value;
        						}
    							};
							</script>
						
						</div><!-- /.row -->
					
										</div>
										<table class="table table-hover" id="dataTables-customerOrder">
						                    <thead>
						                    	<tr>
													<th style="visibility:hidden;border:0;"></th>
													<th style="visibility:hidden;border:0;"></th>
												</tr>

											</thead>
											<tbody>
											<?php
												if ($query_items){
													while ($row_items = mysqli_fetch_assoc($query_items)){?>
														<tr>
															<td style="padding: 0px;">
															<div class="image" align="center">
																<img src="../Administrator/pages/<?php echo $row_items['img'];?>" width="170px;"/>
																<?php
																if ($row_items["markdown"]>0){ ?>
																	<div class="tag sale" style="margin-top: -70px; margin-right: -170px; position: relative; font-size: 13px;height:70px; width: 70px; line-height: 70px;">
																	<?php echo $row_items["markdown"]*100 . "% Off";?>
																	</div>
																	<?php	
																}?>
															</div>
														</td>
														<td style="max-width: 620px; text-overflow: ellipsis;">
															<div class="category-product-inner">
																<div class="products">
																	<div class="product-list product">
																		<div class="row product-list-row">
																			<div class="product-info" style="padding: 0px 0px 20px 40px;">
																				<h3 class="name"><a href="category_brand_detail.php?categoryname=<?php echo $row_items['categoryname'];?>&brandname=<?php echo $row_items['brandname'];?>&code=<?php echo $row_items['code'];?>"><?php echo $row_items['name'];?></a></h3>
																				<div class="description">
																					<p><?php echo $row_items['brandname'];?></p>
																					<span style="font-size: 16px; font-family: 'FjallaOneRegular'; line-height: 18px; text-transform: uppercase; color: #666666; padding: 0px; font-weight: normal;">Availability :</span>
																						&emsp;
																					<?php
																			if($row_items['tStock']>0){
																				?>
																					<span style="color: #1fda9a; font-size: 20px;"><?php echo $row_items['tStock'];?></span>
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
																	<div class="product-price">
																	<?php
																		if($row_items['markdown']>0){
																		?>
																			<span class="price" style="font-size: 20px; color: #009D66;">
																			PHP <?php echo number_format($row_items['price']-($row_items['price']*$row_items['markdown']), 2);?></span>
																			<span class="price-before-discount" style="color:#666666;">PHP <?php echo number_format($row_items['price'], 2);?></span>
																		<?php	
																		}

																		else {
																		?>
																			<span class="price" style="font-size: 20px; color: #009D66;">PHP <?php echo number_format($row_items['price'], 2);?></span>
																		<?php	
																		}

																	?>
																		

																	</div><!-- /.product-price -->
																	<div class="description m-t-10" style="white-space: nowrap; width: 95%; overflow: hidden; text-overflow: ellipsis;">
																	<?php echo $row_items['des'];?></div>
																		<div class="cart clearfix animate-effect">
																			<div class="action">
																				<a href="category_brand_detail.php?categoryname=<?php echo $row_items['categoryname'];?>&brandname=<?php echo $row_items['brandname'];?>&code=<?php echo $row_items['code'];?>" class="btn btn-primary">
																				<i class="fa fa-eye inner-right-vs"></i>View Details
																				</a>
																			</div>
																		</div><!-- /.cart -->
																</div><!-- /.product-info -->


														</div><!-- /.product-list-row -->

													</div><!-- /.product-list -->

												</div><!-- /.products -->

										</div><!-- /.category-product-inner -->
									</td>
														</tr>
													<?php }
												}
											?>
												
											</tbody>
										</table>
									</div>
									
											

											
											
								</div><!-- /.category-product -->
							</div><!-- /.tab-pane #list-container -->
							<!-- == END OF LIST LAYOUT == -->
						</div><!-- /.tab-content -->
					</div><!-- /.search-result-container -->
				</div><!-- /.col -->
				<!-- ============================================== CONTENT : END ============================================== -->
			</div><!-- /.row -->
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
