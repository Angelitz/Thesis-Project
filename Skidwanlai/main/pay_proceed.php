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
<!-- ============================================== CONTENT ============================================== -->
<div class="col-md-5 center-block">
<div class="panel panel-green">
<div class="panel-heading">
<h3 class="panel-title">Proceed to Payment</h3>
</div>
<div class="panel-body">
You are about to proceed with PayPal...
<br><br>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="business" value="skidwanlaiph@gmail.com">

<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">

<?php
    $_SESSION["periodofpay"] = $_POST["periodofpay"];
    $_SESSION["periodcost"] = $_POST["periodcost"];
	$_SESSION["methodofpay"] = $_POST["methodofpay"];
	$_SESSION["grand2"] = $_SESSION["grand"]+$_POST["periodcost"];
	$_SESSION["customername"] = $_POST["customername"];
	$_SESSION["contact2"] = $_POST["contact"];
	$_SESSION["address2"] = $_POST["address"];
	$_SESSION["cityadd"] = $_POST["cityadd"];
	$_SESSION["brgyadd"] = $_POST["brgyadd"];
    
    $getvat = mysqli_query($con, "SELECT * FROM tbl_vat;");
        $row_vat = mysqli_fetch_assoc($getvat);
        $vat = number_format(($row_vat["vat_percent"]*$_SESSION["grand"]), 2);
        
    if (isset($_SESSION["periodofpay"])){
        
        $getfrom = mysqli_query($con,
        	"SELECT tbl_basket.code, tbl_prod.name, tbl_basket.qty, tbl_prod.price, tbl_prod.markdown, tbl_basket.itemtotal
			FROM tbl_basket
			JOIN tbl_prod ON tbl_basket.code = tbl_prod.code
			WHERE tbl_basket.accid=$_SESSION[accid] GROUP BY tbl_basket.code;");
            
            $counter=1;
            while($get = mysqli_fetch_array($getfrom)){
            $amount = $get['price']-($get['markdown']*$get['price']);
            echo "<input type='hidden' name='item_name_".$counter."' value='".$get['name']."'>";
            echo "<input type='hidden' name='amount_".$counter."' value='".$amount."'>";
            echo "<input type='hidden' name='quantity_".$counter."' value='".$get['qty']."'>";
            $counter++;
            }
    }
    
    else { ?>
    <script>
        window.location = "index.php";
    </script>
    <?php
    }
?>
<?php
    $tbl_grand = mysqli_query($con, "SELECT SUM(itemtotal)*($_SESSION[discpercent]+$_SESSION[acc_discpercent]) AS grand FROM tbl_basket WHERE accid=$_SESSION[accid];");
    $row_grand = mysqli_fetch_assoc($tbl_grand);
?>
<input type="hidden" name="discount_amount_cart" value="<?php echo $row_grand['grand'];?>">
<input type="hidden" name="tax_cart" value="<?php echo $vat;?>">
<input type="hidden" name="currency_code" value="PHP">
<input type="hidden" name="shipping_1" value="<?php echo $_SESSION['periodcost'];?>">

<input type="hidden" name="return" value="http://skidwanlai-tanza.byethost31.com/main/function/submit_order_pp.php">
<input type="hidden" name="cancel_return" value="http://skidwanlai-tanza.byethost31.com/main/check_out.php">

<div class="pull-left">
    <a href="check_out.php" class="btn btn-danger"><i class="fa fa-ban"></i>&emsp;Cancel</a>
</div>

<div class="pull-right">
<input style="height: 46px;" type="image" name="submit" border="0" src="assets/images/ppb.gif" alt="PayPal - The safer, easier way to pay online">
<img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
</div>

</form>
</div>
</div>
</div><!-- /.homebanner-holder -->
<!-- ============================================== CONTENT : END ============================================== -->
</div><!-- /.row -->
<?php //include "includes/widget_brands.php"; ?>
</div><!-- /.container -->
</div>
</div><!-- /#top-banner-and-menu -->
<?php include "includes/footer.php"; ?>
<script src="assets/js/jquery.php.css.js"></script>
<?php include "includes/javascripts.php"; ?>
</body>
</html>
<?php session_commit();?>
<?php mysqli_close($con);?>
