<?php
session_start();
include "db_connect.php";
$tbl_max_disc = mysqli_query($con, "SELECT MAX(totalfrom) AS tf FROM tbl_totalprod_discount;");
$row_max_disc = mysqli_fetch_assoc($tbl_max_disc);
$max_disc = $row_max_disc["tf"];

$tbl_check = mysqli_query($con, "SELECT * FROM tbl_basket WHERE accid=$_SESSION[accid];");
if (mysqli_num_rows($tbl_check)>0){
    $tbl_check_max = mysqli_query($con, "SELECT SUM(itemtotal) AS it FROM tbl_basket WHERE accid=$_SESSION[accid];");
    $row_check_max = mysqli_fetch_assoc($tbl_check_max);
    $check_max = $row_check_max["it"];
    
    if ($check_max <= $max_disc){
        if (isset($_POST['addqty'])>0){
            $qty_count = 0;
    	    while ($qty_count<$_POST['addqty']){
    		    mysqli_query($con, "UPDATE tbl_prod SET stock=stock-1 WHERE stock>0 AND code='$_POST[code]' ORDER BY daterestock LIMIT 1;");
	        $qty_count++;
	        }
        }

        $query_havecode = mysqli_query($con, "SELECT * FROM tbl_basket WHERE accid=$_SESSION[accid] AND code='$_POST[code]';");
        if (mysqli_fetch_assoc($query_havecode)){
	        mysqli_query($con, "UPDATE tbl_basket SET qty=qty+$_POST[addqty], basketdate=NOW(), dateexp=DATE_ADD(NOW(), INTERVAL 9 DAY) WHERE accid=$_SESSION[accid] AND code='$_POST[code]';");
	        header ("Location: ../detail.php?categoryname=".$_POST['categoryname']."&brandname=".$_POST['brandname']."&code=".$_POST['code']."&success=1");
        }

        else {
	        mysqli_query($con, "INSERT INTO tbl_basket (accid, code, qty, basketdate, dateexp) VALUES ($_SESSION[accid], '$_POST[code]', $_POST[addqty], NOW(), DATE_ADD(NOW(), INTERVAL 9 DAY));");
			    header ("Location: ../detail.php?categoryname=".$_POST['categoryname']."&brandname=".$_POST['brandname']."&code=".$_POST['code']."&success=1");
        }
    }
    
    else {
        header ("Location: ../detail.php?categoryname=".$_POST['categoryname']."&brandname=".$_POST['brandname']."&code=".$_POST['code']."&errorQ=1");
    }
}

else {
    if (isset($_POST['addqty'])>0){
        $qty_count = 0;
	    while ($qty_count<$_POST['addqty']){
		    mysqli_query($con, "UPDATE tbl_prod SET stock=stock-1 WHERE stock>0 AND code='$_POST[code]' ORDER BY daterestock LIMIT 1;");
	        $qty_count++;
	    }
    }

    $query_havecode = mysqli_query($con, "SELECT * FROM tbl_basket WHERE accid=$_SESSION[accid] AND code='$_POST[code]';");
    if (mysqli_fetch_assoc($query_havecode)){
    	mysqli_query($con, "UPDATE tbl_basket SET qty=qty+$_POST[addqty], basketdate=NOW(), dateexp=DATE_ADD(NOW(), INTERVAL 9 DAY) WHERE accid=$_SESSION[accid] AND code='$_POST[code]';");
    	header ("Location: ../detail.php?categoryname=".$_POST['categoryname']."&brandname=".$_POST['brandname']."&code=".$_POST['code']."&success=1");
    }

    else {
    	mysqli_query($con, "INSERT INTO tbl_basket (accid, code, qty, basketdate, dateexp) VALUES ($_SESSION[accid], '$_POST[code]', $_POST[addqty], NOW(), DATE_ADD(NOW(), INTERVAL 9 DAY));");
    	header ("Location: ../detail.php?categoryname=".$_POST['categoryname']."&brandname=".$_POST['brandname']."&code=".$_POST['code']."&success=1");
    }
}

session_commit();
?>

