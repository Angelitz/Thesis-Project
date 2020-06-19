<?php
include "../function/db_connect.php";
$datedelivered = date("Y-m-d", strtotime($_GET["datedelivered"]));
$output = 'SALES REPORT:&emsp;'.$datedelivered;
$tbl_daily = mysqli_query($con, "SELECT * FROM tbl_order WHERE (method='Paypal' OR orderstatus='Delivered') AND datedelivered LIKE '%$datedelivered%' GROUP BY invoice;");
if (mysqli_num_rows($tbl_daily) > 0){
	$output .= '
				<table bordered="2">
					<tr>
						<th>Invoice</th>
						<th>Method</th>
						<th>Shipping Cost</th>
						<th>Discount</th>
						<th>VAT</th>
						<th>Sub Total</th>
						<th>Grand Total</th>
					</tr>
	';

	while ($row_daily = mysqli_fetch_assoc($tbl_daily)){
		$sub_total = $row_daily["grandtotal"]-$row_daily["vat"]-$row_daily["shipcost"];
		$output .='
					<tr>
						<td>'.$row_daily["invoice"].'</td>
						<td>'.$row_daily["method"].'</td>
						<td>'.$row_daily["shipcost"].'</td>
						<td>'.$row_daily["discount"].'%</td>
						<td>'.$row_daily["vat"].'</td>
						<td>'.$sub_total.'</td>
						<td>'.$row_daily["grandtotal"].'</td>
					</tr>
		';
	}
}
$output .='
	</table>
';
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=download.xls");
echo $output;
?>