<!DOCTYPE html>
<?php session_start();
	if (!isset($_SESSION['accid'])){
	header ("Location: login.php");
}

	else {
		if (!isset($_GET["ready"])){
			?>
			<script>
				window.location = "mycart.php";
			</script>
		<?php
		}
		else {
		unset($_SESSION["discpercent"]);
		unset($_SESSION["acc_discpercent"]);
        unset($_SESSION["periodofpay"]);
        unset($_SESSION["periodcost"]);
	    unset($_SESSION["methodofpay"]);
	    unset($_SESSION["grand2"]);
	    unset($_SESSION["grand"]);
        unset($_SESSION["customername"]);
        unset($_SESSION["contact2"]);
        unset($_SESSION["address2"]);
        unset($_SESSION["cityadd"]);
        unset($_SESSION["brgyadd"]);
        unset($_SESSION["vat"]);
?>
		<html lang="en">
		<?php include "includes/head.php"; ?>
		<script type="text/javascript" src="assets/js/customer_address.js"></script>
		<?php
        
        $getvat = mysqli_query($con, "SELECT * FROM tbl_vat;");
        $row_vat = mysqli_fetch_assoc($getvat);
        
        
	$cha=mysqli_query($con, "SELECT * FROM tbl_basket WHERE accid=$_SESSION[accid];");
	if (mysqli_num_rows($cha)<=0){
	?>
		<script>
			window.location = "index.php";
		</script>
	<?php
	}
	else {
		$get_acc_disc = mysqli_query($con, "SELECT * FROM tbl_acc JOIN tbl_acc_disc ON tbl_acc.discid = tbl_acc_disc.discid WHERE tbl_acc.accid=$_SESSION[accid];");
		$row_acc_disc = mysqli_fetch_assoc($get_acc_disc);
		$discid = $row_acc_disc["discid"];
		$discname = $row_acc_disc["discname"];
		$discpercent = $row_acc_disc["discpercent"];
?>
		<body class="cnt-home">
		<?php include "includes/header.php"; ?>
		<!-- ============================================== HEADER : END ============================================== -->

		<form action="" method="POST" id="checkout_form">
		
		<div class="body-content">
			<div class="container">
				<div class="homepage-container">
				<div class="row">
				<div class="col-md-10 center-block">
					<div class="alert alert-info alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<b>Note:</b> Please complete all the important information ( <span style="color: red;">*</span> ) below. Thank you.
					</div>
					<div class="panel panel-green">
						<div class="panel-heading">
							<h3 class="panel-title">Customer Order Form</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
		    							<label class="info-title">Customer Name <span style="color: red;">*</span></label>
		    							<input maxlength="500" autofocus required type="text" name="customername" value="<?php echo $_SESSION['fullname'];?>" class="form-control unicase-form-control text-input" >
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
		    							<label class="info-title">Contact No <span style="color: red;">*</span></label>
		    							<input required type="text" maxlength="30" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 32 || event.charCode == 40 || event.charCode == 41 || event.charCode == 43 || event.charCode == 45" name="contact" value="<?php echo $_SESSION['contact'];?>" class="form-control unicase-form-control text-input" >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
		    							<label class="info-title">Complete Address <span style="color: red;">*</span></label>
		    							<input maxlength="900" required type="text" name="address" value="<?php echo $_SESSION['address'];?>" class="form-control unicase-form-control text-input" >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
		    							<label class="info-title">City/Municipality <span style="color: red;">*</span></label>
		    							<select id="city" name="city" class="form-control unicase-form-control text-input" onchange="populate('city','barangay')">
		    									<option value="" style="display: none;">-- Select --</option>
												<option value="Alfonso">Alfonso</option>
												<option value="Amadeo">Amadeo</option>
												<option value="Bacoor">Bacoor</option>
												<option value="Carmona">Carmona</option>
												<option value="Cavite City">Cavite City</option>
												<option value="Dasmarinas City">Dasmarinas City</option>
												<option value="General Mariano Alvarez">General Mariano Alvarez</option>
												<option value="General Emilio Aguinaldo">General Emilio Aguinaldo</option>
												<option value="General Trias">General Trias</option>
												<option value="Imus">Imus</option>
												<option value="Indang">Indang</option>
												<option value="Kawit">Kawit</option>
												<option value="Magallanes">Magallanes</option>
												<option value="Maragondon">Maragondon</option>
												<option value="Mendez">Mendez</option>
												<option value="Naic">Naic</option>
												<option value="Noveleta">Noveleta</option>
												<option value="Rosario">Rosario</option>
												<option value="Silang">Silang</option>
												<option value="Tagaytay City">Tagaytay City</option>
												<option value="Tanza">Tanza</option>
												<option value="Ternate">Ternate</option>
												<option value="Trece Martires City">Trece Martires City</option>
		    							</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
		    							<label class="info-title">Barangay <span style="color: red;">*</span></label>
		    							<select id="barangay" name="barangay" class="form-control unicase-form-control text-input" disabled>
		    								
		    							</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div style="border: 1px solid #ddd; margin-bottom: 15px;"></div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="panel panel-green">
										<div class="panel-heading">
											<h3 class="panel-title">Your Order List</h3>
										</div>
										<div class="panel-body">
											<div class="dataTable_wrapper">
												<table class="table table-striped table-bordered table-hover" id="dataTables-userbasket">
                    								<thead>
                      									<tr>
                        									<th>Product</th>
                        									<th>Qty</th>
                        									<th>Price</th>
                        									<th>Item Sale</th>
                        									<th>Total</th>
														</tr>
													</thead>
                    								<tbody>
													<?php
														$query_userbasket=mysqli_query($con,
															"SELECT
																DATEDIFF(tbl_basket.dateexp, NOW()) AS dateDiff,
																tbl_prod.code,
																tbl_prod.brandname,
																tbl_prod.categoryname,
																tbl_prod.code,
																tbl_prod.name,
																tbl_prod.img,
																tbl_prod.stock,
																tbl_basket.qty AS qtybasket,
																tbl_prod.price,
																tbl_prod.markdown,
																tbl_prod.price*tbl_basket.qty AS TotalPrice,
																tbl_basket.qty*(tbl_prod.price-(tbl_prod.price*tbl_prod.markdown)) AS TotalPriceM
															FROM
																tbl_prod JOIN tbl_basket ON tbl_prod.code = tbl_basket.code
															WHERE tbl_basket.accid = $_SESSION[accid]
															GROUP BY tbl_prod.code;");
																while($row_userbasket=mysqli_fetch_array($query_userbasket)){
																	mysqli_query($con, 
																		"UPDATE tbl_basket
																		SET itemtotal=$row_userbasket[TotalPriceM]
																		WHERE code='$row_userbasket[code]' AND accid=$_SESSION[accid];");
													?>
																		<tr>
																			<td style='width: 300px; max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'><?php echo $row_userbasket['name'];?></td>
																			<td style="max-width: 0; width: 50px;">
																			<?php echo $row_userbasket['qtybasket'];?>
																			</td>
																			<td>Php <?php echo $row_userbasket['price'];?></td>
																<?php
																	if($row_userbasket['markdown']>=0.01){
																	?>
																		<td><?php echo $row_userbasket['markdown']*100 . " %";?></td>
																		<td>Php <?php echo number_format($row_userbasket['TotalPriceM'], 2);?></td>
																		
																	<?php	
																	}

																	else {
																	?>
																		<td></td>
																		<td>Php <?php echo number_format($row_userbasket['TotalPrice'], 2);?></td>
																		
																	<?php
																	}
																?>
															</tr>
															<?php
														}
													?>
							                    	</tbody>
                  								</table>
                							</div>
                							<div class="row">
                								<div class="col-md-12">
                									<a href="mycart.php" class="btn btn-yellow pull-right"><i class="fa fa-shopping-cart"></i>&emsp;Back to your cart</a>
                								</div>
                							</div>

                							
										</div>
									</div>
								</div>
							</div>
							<div class="row">
                								<div class="col-md-6">
                									<div class="panel panel-green">
                										<div class="panel-heading">
                											<h3 class="panel-title">Mode of Payment</h3>
                										</div>
                										<div class="panel-body">
								<div class="form-group">
		    						<label class="info-title" for="exampleInputPassword1">Please choose your mode of payment <span style="color: red;">*</span></label>
		    						<select class="form-control unicase-form-control text-input" id="paymethod" disabled>
		    							<option style="display:none;"></option>
		    							<?php
		    								$chk_pymnt_amt = mysqli_query($con, "SELECT SUM(itemtotal) as t FROM tbl_basket WHERE accid=$_SESSION[accid];");
		    								$row_pymnt_amt = mysqli_fetch_assoc($chk_pymnt_amt);
		    								if($row_pymnt_amt['t'] >= 10000){ ?>
		    									<option value="Paypal">Paypal</option>
		    								<?php
		    								}
		    								else {?>
		    									<option value="Cash on Delivery">Cash on Delivery</option>
		    									<option value="Paypal">Paypal</option>
		    								<?php
		    								}
		    							?>
		    						</select>
		    						
		    					</div>
		    					<div class="form-group">
		    						<label class="info-title" for="exampleInputPassword1">Please choose your delivery period <span style="color: red;">*</span></label>
		    						<select class="form-control unicase-form-control text-input" id="payperiod" disabled>

		    							<option style="display:none;"></option>
		    							<?php
		    								$sql_shipoption = mysqli_query($con, "SELECT * FROM tbl_shippingfee;");
		    								while ($row_shipoption = mysqli_fetch_assoc($sql_shipoption)){
		    									?>
		    									<option value="<?php echo $row_shipoption['cost'];?>"><?php echo $row_shipoption['shipday']." (".$row_shipoption['cost'].")";?></option>
		    									<?php
		    								}
		    							?>
		    						
		    						</select>
		    						
		    					</div>
							</div>
                									</div>
                								</div>
                								<div class="col-md-6">
                									<div class="panel-heading">
			<h3 class="panel-title">Total
			</h3>
		</div>
		<div class="panel-body">
			<table class="table">
		<thead>
			<tr>
				<th style="border-bottom: none; border-top: none; padding: 2px; text-align:right;text-transform: uppercase;">
					Sub
				</th>
				<th style="border-bottom: none; border-top: none; padding: 2px; text-align:right;text-transform: uppercase;">
					<?php
					$subtotal=mysqli_query($con, 
						"SELECT SUM(itemtotal) AS sum FROM tbl_basket WHERE accid=$_SESSION[accid] LIMIT 1;");
						$row_subtotal=mysqli_fetch_array($subtotal);
						echo "Php ". number_format($row_subtotal['sum'],2);
					?>
				</th>
			</tr>
			<tr>
				<th style="border-top: none; border-bottom: none; padding: 2px; text-align:right;text-transform: uppercase;">
					Discount
				</th>
				<th style="border-top: none; border-bottom: none; padding: 2px; text-align:right;text-transform: uppercase;">
					<?php
					$sum=$row_subtotal['sum'];
					$sql_disc_f = mysqli_query($con,
						"SELECT discpercent FROM tbl_totalprod_discount WHERE $sum>=totalfrom AND $sum<=totalto;");
					$row_disc_f = mysqli_fetch_array($sql_disc_f);
						echo $row_disc_f['discpercent']*100 . " % ( - PHP ".number_format(($sum*$row_disc_f['discpercent']), 2).")";

						$_SESSION['discpercent']=$row_disc_f['discpercent'];
						$disc = $row_disc_f['discpercent'];
					?>
				</th>
			</tr>
			<tr>
				<th style="border-top: none; border-bottom: none; padding: 2px; text-align:right;text-transform: uppercase;">
					<?php echo $discname;?>
				</th>
				<th style="border-top: none; border-bottom: none; padding: 2px; text-align:right;text-transform: uppercase;">
					<?php echo $discpercent*100 . " % ( - PHP ".number_format(($sum*$discpercent), 2).")";
					$_SESSION['acc_discpercent']=$discpercent;
					?>
				</th>
			</tr>
            <tr>
        		<th style="border-top: none; border-bottom: none; padding: 2px; text-align:right;text-transform: uppercase;">
					VAT
				</th>
				<th style="border-top: none; border-bottom: none; padding: 2px; text-align:right;text-transform: uppercase">
					<?php echo "PHP ".number_format(($sum*$row_vat['vat_percent']), 2);?>
				</th>
			</tr>
			<tr>
				<th style="border-top: none; border-bottom: none; padding: 2px; text-align:right;text-transform: uppercase;">
					Method
				</th>
				<th style="border-top: none; border-bottom: none; padding: 2px; text-align:right;text-transform: uppercase;" id="methodofpay">
				</th>
			</tr>
			<tr>
				<th style="border-top: none; padding: 2px; text-align:right;text-transform: uppercase;">
					Delivery Period
				</th>
				<th style="border-top: none; padding: 2px; text-align:right;text-transform: uppercase;" id="periodofpay">
				</th>
			</tr>
			<tr>
				<th style="border-bottom: none; padding: 2px; text-align:right;text-transform: uppercase;">
					Grand
				</th>
				<th style="border-bottom: none; padding: 2px; text-align:right;text-transform: uppercase;" id="subgrand">
					<?php
                    $vat = $row_vat["vat_percent"]*$sum;
					$Grand = $sum-(($sum*$disc)+($sum*$discpercent));
                    $Grand_2 = $sum-(($sum*$disc)+($sum*$discpercent))+$vat;
					$_SESSION['grand']=$Grand;
                    $_SESSION['vat']=number_format($vat, 2);
					echo "PHP ". number_format($Grand_2,2);
					?>
				</th>
			</tr>
		</thead><!-- /thead -->
		
	</table><!-- /table -->
			<div class="cart-checkout-btn pull-right">
				<button type="button" data-toggle="modal" data-target="#confirm" class="btn btn-primary" id="ptc" disabled>Send&emsp;<i class="fa fa-envelope-o"></i></button>
			</div>
		</div>
                								</div>
                							</div>
						</div>
					</div>
				</div>
					<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="panel panel-green" style="width:300px; margin: auto; margin-top: 25%;">
								<div class="panel-heading">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="panel-title" id="myModalLabel">Confirm</h4>
								</div>
								<div class="panel-body" style="text-align:center;">
									<label style="font-size: 14px;font-weight: 400;">Do you want to send this order now?</label>

									<br/>
									<table align="center">
										<tr>
										<td><button type="button" class="btn btn-danger" data-dismiss="modal">No</button>&emsp;
										</td>
										<td>
										
										<input type="hidden" name="methodofpay" id="methodofpayv">
										<input type="hidden" name="periodofpay" id="periodofpayv">
										<input type="hidden" name="periodcost" id="periodcostv">
										<input type="hidden" name="cityadd" id="cityadd">
										<input type="hidden" name="brgyadd" id="brgyadd">
										
										<input type="submit" value="Yes" class="btn btn-primary">
										
										</td>
										</tr>
									</table>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.container -->
			</div>
		</div><!-- /.body-content -->

		
</form>
		<?php include "includes/footer.php"; ?>
		<?php include "includes/javascripts.php";?>
		<script>
    		document.getElementById("paymethod").onchange = function() {
        			document.getElementById("payperiod").disabled=false;
        			document.getElementById("methodofpay").innerHTML = document.getElementById("paymethod").value;
        			document.getElementById("methodofpayv").value = document.getElementById("paymethod").value;
        			var frm = document.getElementById('checkout_form')
        			if (document.getElementById("paymethod").value=="Paypal"){
        				frm.action = "pay_proceed.php";
        			}
        			else {
        				frm.action="function/submit_order.php";
        			}
        		};
		</script>
		<script>
    		document.getElementById("barangay").onchange = function() {
    				document.getElementById("paymethod").disabled = false;
    				document.getElementById("brgyadd").value = document.getElementById("barangay").value;
        		};
		</script>
		<script>
		    document.getElementById("payperiod").onchange = function(){
		    	var z = document.getElementById("payperiod");
		    	var z2 = z.options[z.selectedIndex].text;
		    	var y = document.getElementById("payperiod");
		    	var y2 = z.options[z.selectedIndex].value;
		    	document.getElementById("periodofpay").innerHTML = z2;
		    	document.getElementById("periodofpayv").value = z2.replace(" ("+y2+")", "");
		    	document.getElementById("periodcostv").value = y2;

		    	var sgrand = "<?php echo $Grand_2;?>";
		    	var s = Number(sgrand)+Number(y2);
		    	document.getElementById("subgrand").innerHTML = "PHP "+s.toLocaleString();
		    	
		    	document.getElementById("ptc").disabled = false;
		    }
		</script>
</body>
</html>
<?php }}} ?>
<?php session_commit();?>
<?php mysqli_close($con); ?>
