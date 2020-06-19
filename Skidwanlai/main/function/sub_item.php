<?php
session_start();
include "db_connect.php";
mysqli_query($con, "UPDATE tbl_basket SET qty=qty-1 WHERE code='$_GET[code]' AND accid=$_SESSION[accid];");
mysqli_query($con, "DELETE FROM tbl_basket WHERE qty=0 AND code='$_GET[code]' AND accid=$_SESSION[accid];");
mysqli_query($con, "UPDATE tbl_prod SET stock=stock+1 WHERE code='$_GET[code]' ORDER BY daterestock LIMIT 1;");
header ("Location: ../mycart.php");
mysqli_close($con);
session_commit();
?>