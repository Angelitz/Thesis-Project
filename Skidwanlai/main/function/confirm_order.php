<?php
session_start();
include "db_connect.php";
mysqli_query($con, "UPDATE tbl_order SET orderstatus='Pending' WHERE invoice=$_GET[invoice] AND accid=$_GET[accid];");
header("Location: ../profile.php?confirm=1");
session_commit();
?>