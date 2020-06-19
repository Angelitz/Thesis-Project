<div class="sidebar-widget outer-bottom-small wow fadeInUp">
	<h3 class="section-title">New Products</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
<!-- == DITO SIMULA NG LOOP (3 ITEMS PER COLUMN) == -->
<div class="item">
<div class="products special-product">
	<?php
		$tbl_newprod = mysqli_query($con, "SELECT * FROM tbl_prod WHERE categoryname!='Desktop Package' GROUP BY code ORDER BY dateadded DESC LIMIT 3;");
		if ($tbl_newprod){
			while ($row_newprod = mysqli_fetch_assoc($tbl_newprod)){ ?>
				<div class="product">
					<div class="product-micro">
						<div class="row product-micro-row">
							<div class="col col-xs-5">
								<div class="product-image">
									<div class="image">
									<?php
									if ($row_newprod['categoryname']!="Desktop Package"){
									?>
										<a href="category_brand_detail.php?categoryname=<?php echo $row_newprod['categoryname'];?>&brandname=<?php echo $row_newprod['brandname'];?>&code=<?php echo $row_newprod['code'];?>">
									<?php
									}
									else {
									?>
										<a href="package_detail.php?categoryname=<?php echo $row_newprod['categoryname'];?>&brandname=<?php echo $row_newprod['brandname'];?>&code=<?php echo $row_newprod['code'];?>">
									<?php
									}
									?>
											<img src="../Administrator/pages/<?php echo $row_newprod['img'];?>" style="width:100px;">
										</a>
									</div><!-- /.image -->
								</div><!-- /.product-image -->
							</div><!-- /.col -->
			<div class="col col-xs-7">
				<div class="product-info">
				<h3 class="name" style="white-space: nowrap; width: 100%; overflow: hidden; text-overflow: ellipsis;" title="<?php echo $row_newprod['name'];?>">
				<?php
									if ($row_newprod['categoryname']!="Desktop Package"){
									?>
										<a href="category_brand_detail.php?categoryname=<?php echo $row_newprod['categoryname'];?>&brandname=<?php echo $row_newprod['brandname'];?>&code=<?php echo $row_newprod['code'];?>">
									<?php
									}
									else {
									?>
										<a href="package_detail.php?categoryname=<?php echo $row_newprod['categoryname'];?>&brandname=<?php echo $row_newprod['brandname'];?>&code=<?php echo $row_newprod['code'];?>">
									<?php
									}
									?>
				<?php echo $row_newprod["name"];?></a></h3>
				<div class="description">
				<p><?php echo $row_newprod["brandname"];?></p>
				</div>
				<div class="product-price">
					<?php
														if ($row_newprod["markdown"]>0){ ?>
															<span class="price-before-discount" style="color:#666666;">
																<?php echo "PHP ".number_format($row_newprod["price"], 2);?>
															</span><br>
															<span class="price">
																<?php
																$newprice = $row_newprod["price"]-($row_newprod["markdown"]*$row_newprod["price"]);
																echo "PHP ".number_format($newprice, 2);?>
															</span>
														<?php

														}

														else { ?>
															<br>
															<span class="price">
																<?php echo "PHP ".number_format($row_newprod["price"], 2);?>
															</span>

															<?php

														}

													?>
													
													</div><!-- /.product-price -->
				<div class="action">
					<?php
									if ($row_newprod['categoryname']!="Desktop Package"){
									?>
										<a class="lnk btn btn-primary" href="category_brand_detail.php?categoryname=<?php echo $row_newprod['categoryname'];?>&brandname=<?php echo $row_newprod['brandname'];?>&code=<?php echo $row_newprod['code'];?>">
									<?php
									}
									else {
									?>
										<a class="lnk btn btn-primary" href="package_detail.php?categoryname=<?php echo $row_newprod['categoryname'];?>&brandname=<?php echo $row_newprod['brandname'];?>&code=<?php echo $row_newprod['code'];?>">
									<?php
									}
									?>
				<i class="fa fa-eye inner-right-vs"></i>View Details</a></div>
				</div>
			</div><!-- /.col -->
		</div><!-- /.product-micro-row -->
		</div><!-- /.product-micro -->
	</div><!-- /.product -->
			<?php
			}
		} ?>

</div>
</div>
<!-- == DITO TAPOS NG LOOP == -->

		</div>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
