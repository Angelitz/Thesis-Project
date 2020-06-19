<?php
$query_morefrom = mysqli_query($con, "SELECT *, SUM(stock) as tStock FROM tbl_prod WHERE categoryname!='Desktop Package' AND brandname='$_GET[brandname]' AND code!='$_GET[code]' GROUP BY code;");
if (mysqli_num_rows($query_morefrom)<1){

}

else {
?>
	<section class="section featured-product wow fadeInUp">
	<h3 class="section-title">More From:&emsp;<?php echo $_GET['brandname'];?></h3>
	<div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
		<!--START NG LOOP BY CATEGORY-->
		<?php
		
		if ($query_morefrom){
			while ($row_morefrom = mysqli_fetch_assoc($query_morefrom)){
			?>
			<div class="item item-carousel" style="width:200px;margin: auto;">
				<div class="products">
					<div class="product">
						<div class="product-image">
							<div class="image" align="center">
							<a href="category_brand_detail.php?categoryname=<?php echo $row_morefrom['categoryname'];?>&brandname=<?php echo $row_morefrom['brandname'];?>&code=<?php echo $row_morefrom['code'];?>">
							<img  src="../Administrator/pages/<?php echo $row_morefrom['img'];?>" height='150px'/>
							<?php
																			if ($row_morefrom["markdown"]>0){
																			?>
																				<div class="tag sale" style="right:0px; top: 100px; font-size: 13px;height:70px; width: 70px; line-height: 70px;">
																				<?php echo $row_morefrom["markdown"]*100 . "% Off";?>
																				</div>
																			<?php	
																			}

																		?>
							</a>
							</div><!-- /.image -->
						</div><!-- /.product-image -->
						<div class="product-info text-left">
							<h3 date-toggle='tooltip' data-placement='top' title="<?php echo $row_morefrom['name'];?>" class="name" style="white-space: nowrap; width: 100%; overflow: hidden; text-overflow: ellipsis;">
				<a href="category_brand_detail.php?categoryname=<?php echo $row_morefrom['categoryname'];?>&brandname=<?php echo $row_morefrom['brandname'];?>&code=<?php echo $row_morefrom['code'];?>">
				<?php echo $row_morefrom['name'];?></a></h3>
							<div class="description"><p><?php echo $row_morefrom['brandname'];?></p>
								<span style="font-size: 16px; font-family: 'FjallaOneRegular'; line-height: 18px; text-transform: uppercase; color: #666666; padding: 0px; font-weight: normal;">Availability :</span>
					&emsp;

																		<?php
																			if($row_morefrom['tStock']>0){
																				?>
																					<span style="color: #1fda9a; font-size: 20px;"><?php echo $row_morefrom['tStock'];?></span>
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
																		if($row_morefrom['markdown']>0){
																		?>
																		<span class="price-before-discount" style="color:#666666;">PHP <?php echo number_format($row_morefrom['price'], 2);?></span><br>
																			<span class="price" style="font-size: 20px; color: #009D66;">
																			PHP <?php echo number_format($row_morefrom['price']-($row_morefrom['price']*$row_morefrom['markdown']), 2);?></span>
																			
																		<?php	
																		}

																		else {
																		?>
																			<span class="price-before-discount" style="color:#666666;"></span><br>
																			<span class="price" style="font-size: 20px; color: #009D66;">PHP <?php echo number_format($row_morefrom['price'], 2);?></span>
																		<?php	
																		}

																	?>
																		

																	</div><!-- /.product-price -->
						</div><!-- /.product-info -->
						
						<div class="cart clearfix animate-effect">
							<div class="action"><a href="category_brand_detail.php?categoryname=<?php echo $row_morefrom['categoryname'];?>&brandname=<?php echo $row_morefrom['brandname'];?>&code=<?php echo $row_morefrom['code'];?>" class="lnk btn btn-primary"><i class="fa fa-eye inner-right-vs"></i>View Details</a></div>
						</div><!-- /.cart -->
					</div><!-- /.product -->
				</div><!-- /.products -->
			</div><!-- /.item -->
			<?php
			}
		}
		?>
</div><!-- /.home-owl-carousel -->
</section><!-- /.section -->
<?php
}
?>