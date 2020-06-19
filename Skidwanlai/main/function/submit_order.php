<?php
session_start();
include "db_connect.php";
$invoice = idate("U");
$chk = mysqli_query($con, "SELECT * FROM tbl_basket WHERE accid=$_SESSION[accid];");
$i=0;

if (isset($_POST['periodofpay'])){
	if ($_POST['periodofpay']=="Next day shipping"){
	if (date('w', strtotime(date("Y-m-d"))) == 5){
		while ($i<mysqli_num_rows($chk)){
		$getfrom = mysqli_query($con,
			"SELECT tbl_basket.code, tbl_prod.name, tbl_basket.qty, tbl_prod.price, tbl_prod.markdown, tbl_basket.itemtotal
			FROM tbl_basket
			JOIN tbl_prod ON tbl_basket.code = tbl_prod.code
			WHERE tbl_basket.accid=$_SESSION[accid] LIMIT 1;");

			$get=mysqli_fetch_array($getfrom);

			mysqli_query($con, "INSERT INTO tbl_order
				VALUES (
				$invoice,
				$_SESSION[accid],
				'$get[code]',
				'$get[name]',
				$get[qty],
				$get[price]*$get[qty],
				$get[markdown],
				$get[itemtotal],
				'Awaiting Email Confirmation',
				NOW(),
				DATE_ADD(NOW(), INTERVAL 3 DAY),
				'$_POST[periodofpay]',
				$_POST[periodcost],
				'$_POST[methodofpay]',
				$_SESSION[discpercent]+$_SESSION[acc_discpercent],
                $_SESSION[vat],
				$_SESSION[grand]+$_POST[periodcost]+$_SESSION[vat],
				'$_POST[customername]',
				'$_POST[contact]',
				'$_POST[address]',
				'$_POST[cityadd]',
				'$_POST[brgyadd]',
				'',
				'0000-00-00 00:00:0');");

				mysqli_query($con, "DELETE FROM tbl_basket WHERE accid=$_SESSION[accid] AND code='$get[code]';");
			$i++;
		}
	}

	else if (date('w', strtotime(date("Y-m-d"))) == 6){
		while ($i<mysqli_num_rows($chk)){
		$getfrom = mysqli_query($con,
			"SELECT tbl_basket.code, tbl_prod.name, tbl_basket.qty, tbl_prod.price, tbl_prod.markdown, tbl_basket.itemtotal
			FROM tbl_basket
			JOIN tbl_prod ON tbl_basket.code = tbl_prod.code
			WHERE tbl_basket.accid=$_SESSION[accid] LIMIT 1;");

			$get=mysqli_fetch_array($getfrom);

			mysqli_query($con, "INSERT INTO tbl_order
				VALUES (
				$invoice,
				$_SESSION[accid],
				'$get[code]',
				'$get[name]',
				$get[qty],
				$get[price]*$get[qty],
				$get[markdown],
				$get[itemtotal],
				'Awaiting Email Confirmation',
				NOW(),
				DATE_ADD(NOW(), INTERVAL 2 DAY),
				'$_POST[periodofpay]',
				$_POST[periodcost],
				'$_POST[methodofpay]',
				$_SESSION[discpercent]+$_SESSION[acc_discpercent],
                $_SESSION[vat],
				$_SESSION[grand]+$_POST[periodcost]+$_SESSION[vat],
				'$_POST[customername]',
				'$_POST[contact]',
				'$_POST[address]',
				'$_POST[cityadd]',
				'$_POST[brgyadd]',
				'',
				'0000-00-00 00:00:0');");

				mysqli_query($con, "DELETE FROM tbl_basket WHERE accid=$_SESSION[accid] AND code='$get[code]';");
			$i++;
		}
	}

	else {
		while ($i<mysqli_num_rows($chk)){
			$getfrom = mysqli_query($con,
			"SELECT tbl_basket.code, tbl_prod.name, tbl_basket.qty, tbl_prod.price, tbl_prod.markdown, tbl_basket.itemtotal
				FROM tbl_basket
				JOIN tbl_prod ON tbl_basket.code = tbl_prod.code
				WHERE tbl_basket.accid=$_SESSION[accid] LIMIT 1;");

			$get=mysqli_fetch_array($getfrom);

			mysqli_query($con, "INSERT INTO tbl_order
				VALUES (
				$invoice,
				$_SESSION[accid],
				'$get[code]',
				'$get[name]',
				$get[qty],
				$get[price]*$get[qty],
				$get[markdown],
				$get[itemtotal],
				'Awaiting Email Confirmation',
				NOW(),
				DATE_ADD(NOW(), INTERVAL 1 DAY),
				'$_POST[periodofpay]',
				$_POST[periodcost],
				'$_POST[methodofpay]',
				$_SESSION[discpercent]+$_SESSION[acc_discpercent],
                $_SESSION[vat],
				$_SESSION[grand]+$_POST[periodcost]+$_SESSION[vat],
				'$_POST[customername]',
				'$_POST[contact]',
				'$_POST[address]',
				'$_POST[cityadd]',
				'$_POST[brgyadd]',
				'',
				'0000-00-00 00:00:0');");

				mysqli_query($con, "DELETE FROM tbl_basket WHERE accid=$_SESSION[accid] AND code='$get[code]';");
			$i++;
		}

	}

}

else {
	if (date('w', strtotime(date("Y-m-d"))) == 4){
		while ($i<mysqli_num_rows($chk)){
	$getfrom = mysqli_query($con,
	"SELECT tbl_basket.code, tbl_prod.name, tbl_basket.qty, tbl_prod.price, tbl_prod.markdown, tbl_basket.itemtotal
		FROM tbl_basket
		JOIN tbl_prod ON tbl_basket.code = tbl_prod.code
		WHERE tbl_basket.accid=$_SESSION[accid] LIMIT 1;");

	$get=mysqli_fetch_array($getfrom);

	mysqli_query($con, "INSERT INTO tbl_order
		VALUES (
		$invoice,
		$_SESSION[accid],
		'$get[code]',
		'$get[name]',
		$get[qty],
		$get[price]*$get[qty],
		$get[markdown],
		$get[itemtotal],
		'Awaiting Email Confirmation',
		NOW(),
		DATE_ADD(NOW(), INTERVAL 11 DAY),
		'$_POST[periodofpay]',
		$_POST[periodcost],
		'$_POST[methodofpay]',
		$_SESSION[discpercent]+$_SESSION[acc_discpercent],
        $_SESSION[vat],
		$_SESSION[grand]+$_POST[periodcost]+$_SESSION[vat],
		'$_POST[customername]',
		'$_POST[contact]',
		'$_POST[address]',
		'$_POST[cityadd]',
		'$_POST[brgyadd]',
		'',
		'0000-00-00 00:00:0');");

		mysqli_query($con, "DELETE FROM tbl_basket WHERE accid=$_SESSION[accid] AND code='$get[code]';");
	$i++;
}
	}

	else if (date('w', strtotime(date("Y-m-d"))) == 5){
		while ($i<mysqli_num_rows($chk)){
	$getfrom = mysqli_query($con,
	"SELECT tbl_basket.code, tbl_prod.name, tbl_basket.qty, tbl_prod.price, tbl_prod.markdown, tbl_basket.itemtotal
		FROM tbl_basket
		JOIN tbl_prod ON tbl_basket.code = tbl_prod.code
		WHERE tbl_basket.accid=$_SESSION[accid] LIMIT 1;");

	$get=mysqli_fetch_array($getfrom);

	mysqli_query($con, "INSERT INTO tbl_order
		VALUES (
		$invoice,
		$_SESSION[accid],
		'$get[code]',
		'$get[name]',
		$get[qty],
		$get[price]*$get[qty],
		$get[markdown],
		$get[itemtotal],
		'Awaiting Email Confirmation',
		NOW(),
		DATE_ADD(NOW(), INTERVAL 11 DAY),
		'$_POST[periodofpay]',
		$_POST[periodcost],
		'$_POST[methodofpay]',
		$_SESSION[discpercent]+$_SESSION[acc_discpercent],
        $_SESSION[vat],
		$_SESSION[grand]+$_POST[periodcost]+$_SESSION[vat],
		'$_POST[customername]',
		'$_POST[contact]',
		'$_POST[address]',
		'$_POST[cityadd]',
		'$_POST[brgyadd]',
		'',
		'0000-00-00 00:00:0');");

		mysqli_query($con, "DELETE FROM tbl_basket WHERE accid=$_SESSION[accid] AND code='$get[code]';");
	$i++;
}
	}

	else if (date('w', strtotime(date("Y-m-d"))) == 6){
		while ($i<mysqli_num_rows($chk)){
	$getfrom = mysqli_query($con,
	"SELECT tbl_basket.code, tbl_prod.name, tbl_basket.qty, tbl_prod.price, tbl_prod.markdown, tbl_basket.itemtotal
		FROM tbl_basket
		JOIN tbl_prod ON tbl_basket.code = tbl_prod.code
		WHERE tbl_basket.accid=$_SESSION[accid] LIMIT 1;");

	$get=mysqli_fetch_array($getfrom);

	mysqli_query($con, "INSERT INTO tbl_order
		VALUES (
		$invoice,
		$_SESSION[accid],
		'$get[code]',
		'$get[name]',
		$get[qty],
		$get[price]*$get[qty],
		$get[markdown],
		$get[itemtotal],
		'Awaiting Email Confirmation',
		NOW(),
		DATE_ADD(NOW(), INTERVAL 10 DAY),
		'$_POST[periodofpay]',
		$_POST[periodcost],
		'$_POST[methodofpay]',
		$_SESSION[discpercent]+$_SESSION[acc_discpercent],
        $_SESSION[vat],
		$_SESSION[grand]+$_POST[periodcost]+$_SESSION[vat],
		'$_POST[customername]',
		'$_POST[contact]',
		'$_POST[address]',
		'$_POST[cityadd]',
		'$_POST[brgyadd]',
		'',
		'0000-00-00 00:00:0');");

		mysqli_query($con, "DELETE FROM tbl_basket WHERE accid=$_SESSION[accid] AND code='$get[code]';");
	$i++;
}
	}

	else {
		while ($i<mysqli_num_rows($chk)){
	$getfrom = mysqli_query($con,
	"SELECT tbl_basket.code, tbl_prod.name, tbl_basket.qty, tbl_prod.price, tbl_prod.markdown, tbl_basket.itemtotal
		FROM tbl_basket
		JOIN tbl_prod ON tbl_basket.code = tbl_prod.code
		WHERE tbl_basket.accid=$_SESSION[accid] LIMIT 1;");

	$get=mysqli_fetch_array($getfrom);

	mysqli_query($con, "INSERT INTO tbl_order
		VALUES (
		$invoice,
		$_SESSION[accid],
		'$get[code]',
		'$get[name]',
		$get[qty],
		$get[price]*$get[qty],
		$get[markdown],
		$get[itemtotal],
		'Awaiting Email Confirmation',
		NOW(),
		DATE_ADD(NOW(), INTERVAL 9 DAY),
		'$_POST[periodofpay]',
		$_POST[periodcost],
		'$_POST[methodofpay]',
		$_SESSION[discpercent]+$_SESSION[acc_discpercent],
        $_SESSION[vat],
		$_SESSION[grand]+$_POST[periodcost]+$_SESSION[vat],
		'$_POST[customername]',
		'$_POST[contact]',
		'$_POST[address]',
		'$_POST[cityadd]',
		'$_POST[brgyadd]',
		'',
		'0000-00-00 00:00:0');");

		mysqli_query($con, "DELETE FROM tbl_basket WHERE accid=$_SESSION[accid] AND code='$get[code]';");
	$i++;
}
	}
	}
	unset($_SESSION["discpercent"]);
	unset($_SESSION["acc_discpercent"]);
	unset($_SESSION["grand"]);
    unset($_SESSION["vat"]);
}

//send confirmation email
$to = $_SESSION['email'];
$subject = "Order Confirmation";
$body = "Dear ".$_SESSION['fname']." ".$_SESSION['lname']."\n\nYou have successfully sent us your order:\n";
$order_list = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$invoice AND accid=$_SESSION[accid];");
while ($row_list = mysqli_fetch_assoc($order_list)){
	$body .= "\nProduct:\t\t".$row_list['name']."\nQty:\t\t\t".$row_list['qty']."\nPrice:\t\t\tPHP ".number_format($row_list['priceMD'], 2)."\n";
}
$tot = mysqli_query($con, "SELECT vat, grandtotal, shipcost FROM tbl_order WHERE invoice=$invoice AND accid=$_SESSION[accid] LIMIT 1;");
$row_tot = mysqli_fetch_assoc($tot);
$body .="\nVat:\t\t\tPHP".$row_tot['vat']."\nShipping:\t\tPHP ".number_format($row_tot['shipcost'], 2)."\nGrand Total:\t\tPHP ".number_format($row_tot['grandtotal'], 2)."\n";
$body .="\nIn order to confirm your order, please proceed by clicking the link provided:\nhttp://localhost/Skidwanlai/main/function/confirm_order.php?invoice=".$invoice."&accid=".$_SESSION['accid']."\n\nThank you.";
$headers = "From: Skidwanlai Computer World Tanza <skidwanlaiph@gmail.com>\r\n";
$headers .= "Reply-To: skidwanlaiph@gmail.com\r\n";
$headers .= "Return-Path: skidwanlaiph@gmail.com\r\n";
$headers .= "CC: skidwanlaiph@gmail.com\r\n";
$headers .= "BCC: skidwanlaiph@gmail.com\r\n";
mail($to, $subject, $body, $headers);	

	//echo $_POST['periodofpay'];
	header ("Location: ../profile.php?messagec=1");

session_commit();
?>