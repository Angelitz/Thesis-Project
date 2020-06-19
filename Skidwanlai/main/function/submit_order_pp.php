<?php
session_start();
include "db_connect.php";
$invoice = idate("U");
$chk = mysqli_query($con, "SELECT * FROM tbl_basket WHERE accid=$_SESSION[accid];");
$i=0;

if (isset($_SESSION['periodofpay'])){
	if ($_SESSION['periodofpay']=="Next day shipping"){
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
				'Processing',
				NOW(),
				DATE_ADD(NOW(), INTERVAL 3 DAY),
				'$_SESSION[periodofpay]',
				$_SESSION[periodcost],
				'$_SESSION[methodofpay]',
				$_SESSION[discpercent]+$_SESSION[acc_discpercent],
                $_SESSION[vat],
				$_SESSION[grand2]+$_SESSION[vat],
				'$_SESSION[customername]',
				'$_SESSION[contact2]',
				'$_SESSION[address2]',
				'$_SESSION[cityadd]',
				'$_SESSION[brgyadd]',
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
				'Processing',
				NOW(),
				DATE_ADD(NOW(), INTERVAL 2 DAY),
				'$_SESSION[periodofpay]',
				$_SESSION[periodcost],
				'$_SESSION[methodofpay]',
				$_SESSION[discpercent]+$_SESSION[acc_discpercent],
                $_SESSION[vat],
				$_SESSION[grand2]+$_SESSION[vat],
				'$_SESSION[customername]',
				'$_SESSION[contact2]',
				'$_SESSION[address2]',
				'$_SESSION[cityadd]',
				'$_SESSION[brgyadd]',
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
				'Processing',
				NOW(),
				DATE_ADD(NOW(), INTERVAL 1 DAY),
				'$_SESSION[periodofpay]',
				$_SESSION[periodcost],
				'$_SESSION[methodofpay]',
				$_SESSION[discpercent]+$_SESSION[acc_discpercent],
                $_SESSION[vat],
				$_SESSION[grand2]+$_SESSION[vat],
				'$_SESSION[customername]',
				'$_SESSION[contact2]',
				'$_SESSION[address2]',
				'$_SESSION[cityadd]',
				'$_SESSION[brgyadd]',
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
		'Processing',
		NOW(),
		DATE_ADD(NOW(), INTERVAL 11 DAY),
		'$_SESSION[periodofpay]',
		$_SESSION[periodcost],
		'$_SESSION[methodofpay]',
		$_SESSION[discpercent]+$_SESSION[acc_discpercent],
        $_SESSION[vat],
		$_SESSION[grand2]+$_SESSION[vat],
		'$_SESSION[customername]',
		'$_SESSION[contact2]',
		'$_SESSION[address2]',
		'$_SESSION[cityadd]',
		'$_SESSION[brgyadd]',
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
		'Processing',
		NOW(),
		DATE_ADD(NOW(), INTERVAL 11 DAY),
		'$_SESSION[periodofpay]',
		$_SESSION[periodcost],
		'$_SESSION[methodofpay]',
		$_SESSION[discpercent]+$_SESSION[acc_discpercent],
        $_SESSION[vat],
		$_SESSION[grand2]+$_SESSION[vat],
		'$_SESSION[customername]',
		'$_SESSION[contact2]',
		'$_SESSION[address2]',
		'$_SESSION[cityadd]',
		'$_SESSION[brgyadd]',
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
		'Processing',
		NOW(),
		DATE_ADD(NOW(), INTERVAL 10 DAY),
		'$_SESSION[periodofpay]',
		$_SESSION[periodcost],
		'$_SESSION[methodofpay]',
		$_SESSION[discpercent]+$_SESSION[acc_discpercent],
        $_SESSION[vat],
		$_SESSION[grand2]+$_SESSION[vat],
		'$_SESSION[customername]',
		'$_SESSION[contact2]',
		'$_SESSION[address2]',
		'$_SESSION[cityadd]',
		'$_SESSION[brgyadd]',
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
		'Processing',
		NOW(),
		DATE_ADD(NOW(), INTERVAL 9 DAY),
		'$_SESSION[periodofpay]',
		$_SESSION[periodcost],
		'$_SESSION[methodofpay]',
		$_SESSION[discpercent]+$_SESSION[acc_discpercent],
        $_SESSION[vat],
		$_SESSION[grand2]+$_SESSION[vat],
		'$_SESSION[customername]',
		'$_SESSION[contact2]',
		'$_SESSION[address2]',
		'$_SESSION[cityadd]',
		'$_SESSION[brgyadd]',
		'',
		'0000-00-00 00:00:0');");

		mysqli_query($con, "DELETE FROM tbl_basket WHERE accid=$_SESSION[accid] AND code='$get[code]';");
	$i++;
}
	}
	}
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

}
	header ("Location: ../profile.php?message=1");

session_commit();
?>