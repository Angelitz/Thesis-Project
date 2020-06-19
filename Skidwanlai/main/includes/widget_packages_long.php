<!-- ============================================== SPECIAL OFFER ============================================== -->
<div class="sidebar-widget outer-bottom-small wow fadeInUp">
	<h3 class="section-title">Desktop Packages</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">

			<div class="item">
				<div class="products special-product">
					<?php
						$tbl_packages = mysqli_query($con, "SELECT * FROM tbl_prod WHERE categoryname='Desktop Package' GROUP BY code ORDER BY dateadded DESC LIMIT 3;");
						if ($tbl_packages){
							while ($row_package = mysqli_fetch_assoc($tbl_packages)){ ?>
								<div class="product">
									<div class="product-micro">
										<div class="row product-micro-row">
											<div class="col col-xs-5">
												<div class="product-image">
													<div class="image">
													<?php
									if ($row_package['categoryname']!="Desktop Package"){
									?>
										<a href="category_brand_detail.php?categoryname=<?php echo $row_package['categoryname'];?>&brandname=<?php echo $row_package['brandname'];?>&code=<?php echo $row_package['code'];?>">
									<?php
									}
									else {
									?>
										<a href="package_detail.php?categoryname=<?php echo $row_package['categoryname'];?>&brandname=<?php echo $row_package['brandname'];?>&code=<?php echo $row_package['code'];?>">
									<?php
									}
									?>

															<img src="../Administrator/pages/<?php echo $row_package['img'];?>" style="width:100px;">
														</a>
													</div><!-- /.image -->
												</div><!-- /.product-image -->
											</div><!-- /.col -->
											<div class="col col-xs-7">
												<div class="product-info">
													<h3 class="name" style="white-space: nowrap; width: 100%; overflow: hidden; text-overflow: ellipsis;" title="<?php echo $row_package['name'];?>">
													<?php
									if ($row_package['categoryname']!="Desktop Package"){
									?>
										<a href="category_brand_detail.php?categoryname=<?php echo $row_package['categoryname'];?>&brandname=<?php echo $row_package['brandname'];?>&code=<?php echo $row_package['code'];?>">
									<?php
									}
									else {
									?>
										<a href="package_detail.php?categoryname=<?php echo $row_package['categoryname'];?>&brandname=<?php echo $row_package['brandname'];?>&code=<?php echo $row_package['code'];?>">
									<?php
									}
									?>
													<?php echo $row_package["name"];?></a></h3>
													<div class="product-price">
													<?php
														if ($row_package["markdown"]>0){ ?>
															<span class="price-before-discount" style="color:#666666;">
																<?php echo "PHP ".number_format($row_package["price"], 2);?>
															</span><br>
															<span class="price">
																<?php
																$newprice = $row_package["price"]-($row_package["markdown"]*$row_package["price"]);
																echo "PHP ".number_format($newprice, 2);?>
															</span>
														<?php

														}

														else { ?>
															<br>
															<span class="price">
																<?php echo "PHP ".number_format($row_package["price"], 2);?>
															</span>

															<?php

														}

													?>
													
													</div><!-- /.product-price -->
													<div class="action">
													<?php
									if ($row_package['categoryname']!="Desktop Package"){
									?>
										<a class="lnk btn btn-primary" href="category_brand_detail.php?categoryname=<?php echo $row_package['categoryname'];?>&brandname=<?php echo $row_package['brandname'];?>&code=<?php echo $row_package['code'];?>">
									<?php
									}
									else {
									?>
										<a class="lnk btn btn-primary" href="package_detail.php?categoryname=<?php echo $row_package['categoryname'];?>&brandname=<?php echo $row_package['brandname'];?>&code=<?php echo $row_package['code'];?>">
									<?php
									}
									?>
													<i class="fa fa-eye inner-right-vs"></i>View Details</a></div>
												</div>
											</div><!-- /.col -->
										</div><!-- /.product-micro-row -->
									</div><!-- /.product-micro -->
								</div>
							<?php
							}
						}
					?>
					

		        	
		        	
		  
		       	</div>
	        </div>


	   	</div>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== SPECIAL OFFER : END ============================================== -->
