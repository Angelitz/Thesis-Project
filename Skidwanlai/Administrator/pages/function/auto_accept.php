<?php
$auto_accept = mysqli_query($con, "SELECT dateordered FROM tbl_order;");
if (mysqli_num_rows($auto_accept) > 0){
	while(mysqli_fetch_assoc($auto_accept)){
	mysqli_query($con, "UPDATE tbl_order SET orderstatus='Processing' WHERE orderstatus='Pending' AND ADDTIME(dateordered, '01:00:00') <= NOW();");
	}
}
$deny_order = mysqli_query($con, "SELECT * FROM tbl_order WHERE orderstatus='Awaiting Email Confirmation' AND ADDTIME(dateordered, '01:00:00') <= NOW();");
	if (mysqli_num_rows($deny_order)>0){
		while($row_deny = mysqli_fetch_assoc($deny_order)){
			mysqli_query($con, "UPDATE tbl_prod SET stock=stock+$row_deny[qty] WHERE code='$row_deny[code]' ORDER BY daterestock LIMIT 1;");
			mysqli_query($con, "DELETE FROM tbl_basket WHERE code='$row_deny[code]' LIMIT 1;");
		}
	}
?>