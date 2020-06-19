<!DOCTYPE html>
<?php session_start();?>
<?php
if (!isset($_SESSION['accid'])){
header ("Location: login.php");
}
else {
?>
<html lang="en">
<?php include "includes/head.php"; ?>
<?php
$getvat = mysqli_query($con, "SELECT * FROM tbl_vat;");
$row_vat = mysqli_fetch_assoc($getvat);
?>
<script>
function showUpdate(){
document.getElementById("updateBox").style.display="block";
document.getElementById("updateText").style.display="none";
}
</script>
<?php
$get_acc_disc = mysqli_query($con, "SELECT * FROM tbl_acc JOIN tbl_acc_disc ON tbl_acc.discid = tbl_acc_disc.discid WHERE tbl_acc.accid=$_SESSION[accid];");
$row_acc_disc = mysqli_fetch_assoc($get_acc_disc);
$discid = $row_acc_disc["discid"];
$discname = $row_acc_disc["discname"];
$discpercent = $row_acc_disc["discpercent"];
?>
<body class="cnt-home">
<?php include "includes/header.php"; ?>
<div class="body-content">
<div class="container">
<div class="homepage-container">
<div class="row inner-bottom-sm">
<!-- ============================================== CONTENT ============================================== -->
<div class="shopping-cart">
<div class="col-md-12 col-sm-12">
<div class="alert alert-info alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<b>Note:</b> We encourage you to purchase the products below within 9 days to ensure the availability of each product for you.<br>
Products which exceed this limit will again be available for others. Thank you.
</div>
<div class="panel panel-green">
<div class="panel-heading">
<h3 class="panel-title">User Basket</h3>
</div>
<div class="panel-body">
<div class="dataTable_wrapper">
<table class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-customerOrder">
<thead>
<tr>
<th>No</th>
<th>Product</th>
<th></th>
<th>Qty</th>
<th></th>
<!--<th>Price</th>
<th>Item Sale</th>-->
<th>Total</th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<?php
$query_userbasket=mysqli_query($con, "SELECT DATEDIFF(tbl_basket.dateexp, NOW()) AS dateDiff, tbl_prod.code, tbl_prod.brandname, tbl_prod.categoryname, tbl_prod.code, tbl_prod.name, tbl_prod.img, tbl_prod.stock, tbl_basket.qty AS qtybasket, tbl_prod.price, tbl_prod.markdown, tbl_prod.price*tbl_basket.qty AS TotalPrice, tbl_basket.qty*(tbl_prod.price-(tbl_prod.price*tbl_prod.markdown)) AS TotalPriceM FROM tbl_prod JOIN tbl_basket ON tbl_prod.code = tbl_basket.code WHERE tbl_basket.accid = $_SESSION[accid] GROUP BY tbl_prod.code;");
$counter = 1;
while($row_userbasket=mysqli_fetch_array($query_userbasket)){
mysqli_query($con, "UPDATE tbl_basket SET itemtotal=$row_userbasket[TotalPriceM] WHERE
code='$row_userbasket[code]' AND accid=$_SESSION[accid];");
?>
<tr>
<td style="text-align: center;">
<?php echo $counter;?>
</td>

<td date-toggle='tooltip' data-placement='top' title="<?php echo $row_userbasket['name'];?>" style='width: 300px; max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'><?php echo $row_userbasket['name'];?></td>
<td>
	<a class="btn btn-danger" href="function/sub_item.php?code=<?php echo $row_userbasket['code'];?>">&nbsp;<i class="fa fa-minus"></i>&nbsp;</a>
</td>
<td style="max-width: 0; width: 50px;">
<?php echo $row_userbasket['qtybasket'];?>
</td>

	<?php
	$chk_qty = mysqli_query($con, "SELECT SUM(stock) AS sum_qty FROM tbl_prod WHERE code='$row_userbasket[code]';");
	$row_qty = mysqli_fetch_assoc($chk_qty);
	if ($row_qty["sum_qty"] < 1){
		echo "<td style='color: #ff6c6c;'>Out of Stock</td>";
	}
	else {
		?>
			<td><a class="btn btn-primary" href="function/add_item.php?code=<?php echo $row_userbasket['code'];?>">&nbsp;<i class="fa fa-plus"></i>&nbsp;</a></td>
		<?php
	}
	?>
	

<!--<td>PHP <?php echo $row_userbasket['price'];?></td>-->
<?php
if($row_userbasket['markdown']>=0.01){
?>
<!--<td><?php echo $row_userbasket['markdown']*100 . " %";?></td>-->
<td>PHP <?php echo number_format($row_userbasket['TotalPriceM'], 2);?></td>
<td style="max-width: 0; width: 140px;"><a class="btn btn-primary btn-block" href="detail.php?categoryname=<?php echo $row_userbasket['categoryname'];?>&brandname=<?php echo $row_userbasket['brandname'];?>&code=<?php echo $row_userbasket['code'];?>"><i class="fa fa-eye inner-right-vs"></i>View Details</a></td>
<?php	
}
else {
?>
<!--<td></td>-->
<td>PHP <?php echo number_format($row_userbasket['TotalPrice'], 2);?></td>
<td style="max-width: 0; width: 140px;"><a class="btn btn-primary btn-block" href="detail.php?categoryname=<?php echo $row_userbasket['categoryname'];?>&brandname=<?php echo $row_userbasket['brandname'];?>&code=<?php echo $row_userbasket['code'];?>"><i class="fa fa-eye inner-right-vs"></i>View Details</a></td>
<?php
}
?>
<td>
<a class="btn btn-danger btn-block" href="function/delete_cart.php?code=<?php echo $row_userbasket['code'];?>&qty=<?php echo $row_userbasket['qtybasket'];?>"><i class="fa fa-trash-o"></i>&emsp;Remove</a>
</td>
</tr>
<?php
$counter++;
}
?>
</tbody>
                  </table>
                </div>
                <div class="cart-checkout-btn pull-right">
				<a href="allprod.php" class="btn btn-yellow btn-outline"><i class="fa fa-share"></i>&emsp;Continue Shopping</a>
				</div>
			</div>

		</div>
		
	</div><!-- /.shopping-cart-table -->

<div class="col-md-4 col-sm-12 estimate-ship-tax">
	<div class="panel panel-green">
		<div class="panel-heading">
			<h3 class="panel-title">Shipping Information
			</h3>
		</div>
		<div class="panel-body">
			<table>
	<tr>
	<td valign="baseline"><p style="color: #009D66;">Name</p></td>
	<td valign="baseline" style="padding-left: 10px;"><label class="info-title"><?php echo $_SESSION['fullname']." (".$discname.")";?></label></td>
	</tr>
	<tr>
	<td valign="baseline"><p style="color: #009D66;">Email</p></td>
	<td valign="baseline" style="padding-left: 10px;"><label class="info-title"><?php echo $_SESSION['email'];?></label></td>
	</tr>
	<tr>
	<td valign="baseline"><p style="color: #009D66;">Address</p></td>
	<td valign="baseline" style="padding-left: 10px;"><label class="info-title"><?php echo $_SESSION['address'];?></label></td>
	</tr>
	<tr>
	<td valign="baseline"><p style="color: #009D66;">Contact no</p></td>
	<td valign="baseline" style="padding-left: 10px;"><label class="info-title"><?php echo $_SESSION['contact'];?></label></td>
	</tr>
	</table>
		</div>
	</div>
    
    <div class="panel panel-green">
    	<div class="panel-heading">
			<h3 class="panel-title">Value Added Tax
			</h3>
		</div>
		<div class="panel-body">
			<table>
	<tr>
	<td valign="baseline"><p style="color: #009D66;">VAT (%)</p></td>
	<td valign="baseline" style="padding-left: 10px;"><label class="info-title"><?php
    echo $row_vat["vat_percent"]*100 . "% of total price";
    ?></label></td>
	</tr>
	</table>
		</div>
	</div>
</div><!-- /.estimate-ship-tax -->
<div class="col-md-4 col-sm-12 estimate-ship-tax">
	<div class="panel panel-green">
		<div class="panel-heading">
			<h3 class="panel-title">Fees & Discounts
			</h3>
		</div>
		<div class="panel-body">
			<table>
			<?php
				$sql_acc_disc = mysqli_query($con, "SELECT * FROM tbl_acc_disc;");
				while($sh_acc_disc = mysqli_fetch_assoc($sql_acc_disc)){
					?>
					<tr>
					<td valign="baseline"><p style="color: #009D66;"><?php echo $sh_acc_disc['discname'];?></p></td>
					<td valign="baseline" style="padding-left: 10px;"><label class="info-title"><?php echo $sh_acc_disc['discpercent']*100 . "% Total Price Off" ;?></label></td>
					</tr>
					<?php
				}

			?>
			</table>
			<div style="border: 1px solid #ddd; margin-bottom:10px;"></div>
			<table>
			<?php
				$sql_shipping = mysqli_query($con, "SELECT * FROM tbl_shippingfee;");
				while($sh_shipping = mysqli_fetch_assoc($sql_shipping)){
					?>
					<tr>
					<td valign="baseline"><p style="color: #009D66;"><?php echo $sh_shipping['shipday'];?></p></td>
					<td valign="baseline" style="padding-left: 10px;"><label class="info-title"><?php echo $sh_shipping['cost'];?></label></td>
					</tr>
					<?php
				}

			?>
			
			</table>
			<div style="border: 1px solid #ddd; margin-bottom:10px;"></div>
			<table>
				<?php
				$sql_disc = mysqli_query($con, "SELECT * FROM tbl_totalprod_discount;");
				while($sh_disc = mysqli_fetch_assoc($sql_disc)){
					?>
					<tr>
					<td valign="baseline"><p style="color: #009D66;">
					Php <?php echo number_format($sh_disc['totalfrom'],2);?> <b>to</b>
					Php <?php echo number_format($sh_disc['totalto'],2);?> </p></td>
					<td valign="baseline" style="padding-left: 10px;"><label class="info-title">
					<?php echo $sh_disc['discpercent']*100 . " %";?></label></td>
					</tr>
					<?php
				}

			?>
			</table>
		</div>
	</div>

</div><!-- /.estimate-ship-tax -->
<?php
$cha=mysqli_query($con, "SELECT * FROM tbl_basket WHERE accid=$_SESSION[accid];");
if (mysqli_num_rows($cha)>=1){
?>

<div class="col-md-4 col-sm-12 cart-shopping-total">
	<div class="panel panel-green">
		<div class="panel-heading">
			<h3 class="panel-title">Total
			</h3>
		</div>
		<div class="panel-body">
			<table class="table">
		<thead>
			<tr>
				<th style="border-bottom: none; border-top: none; padding: 2px;">
					Sub
				</th>
				<th style="border-bottom: none; border-top: none; padding: 2px;">
					<?php
					$subtotal=mysqli_query($con, 
						"SELECT SUM(itemtotal) AS sum FROM tbl_basket WHERE accid=$_SESSION[accid] LIMIT 1;");
						$row_subtotal=mysqli_fetch_array($subtotal);
						echo "Php ". number_format($row_subtotal['sum'],2);
					?>
				</th>
			</tr>
			<tr>
				<th style="border-top: none; border-bottom: none; padding: 2px;">
					Discount
				</th>
				<th style="border-top: none; border-bottom: none; padding: 2px;">
					<?php
					$sum=$row_subtotal['sum'];
					$sql_disc_f = mysqli_query($con,
						"SELECT discpercent FROM tbl_totalprod_discount WHERE $sum>=totalfrom AND $sum<=totalto;");
					$row_disc_f = mysqli_fetch_array($sql_disc_f);
						echo $row_disc_f['discpercent']*100 . " % ( - PHP ".number_format(($sum*$row_disc_f['discpercent']), 2).")";
						$disc = $row_disc_f['discpercent'];
					?>
				</th>
			</tr>
			<tr>
				<th style="border-top: none; border-bottom: none; padding: 2px;">
					<?php echo $discname; ?>
				</th>
				<th style="border-top: none; border-bottom: none; padding: 2px;">
					<?php echo $discpercent*100 . " % ( - PHP ".number_format(($sum*$discpercent), 2).")";?>
				</th>
			</tr>
            <tr>
    			<th style="border-top: none; padding: 2px;">
					VAT
				</th>
				<th style="border-top: none; padding: 2px;">
					<?php echo "PHP ".number_format(($sum*$row_vat['vat_percent']), 2);?>
				</th>
			</tr>
			<tr>
				<th style="border-bottom: none; border-top: none; padding: 2px;">
					Grand
				</th>
				<th style="border-bottom: none; border-top: none; padding: 2px;">
					<?php
                    $vat = $row_vat["vat_percent"]*$sum;
					$Grand = $sum-(($sum*$disc)+($sum*$discpercent))+$vat;
					echo "Php ". number_format($Grand,2);
					?>
				</th>
			</tr>
		</thead><!-- /thead -->

	</table><!-- /table -->
			<div class="cart-checkout-btn pull-right">
				<a href="place_order.php?ready" class="btn btn-primary">Place Order&emsp;<i class="fa fa-chevron-right"></i></a>
			</div>
		</div>
	</div>


</div><!-- /.cart-shopping-total -->
<?php
}
?>
</div><!-- /.shopping-cart -->
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
<?php
}
?>
<?php session_commit();?>
<?php mysqli_close($con); ?>
