<?php
session_start();
require('fpdf.php');
include "../function/db_connect.php";
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('../../../main/assets/images/logo1.png',10,10,67);
    $this->Ln(25);
}
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Helvetica italic 8
    $this->SetFont('Helvetica','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->setFont('Helvetica','',11);
$pdf->setY(10);

//order number and date ordered


$pdf->setFont('Helvetica','B',12);
$pdf->Cell(0,5,'Official Receipt',0,1, 'R');

$pdf->setFont('Helvetica','',10);
$tbl_c = mysqli_query($con, "SELECT * FROM tbl_info;");
$row_i = mysqli_fetch_assoc($tbl_c);
$pdf->Cell(0,5,'TIN: '.$row_i['m_tin'],0,1, 'R');
$tbl_a = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice] GROUP BY invoice;");
while ($row_a = mysqli_fetch_assoc($tbl_a)){
$pdf->Cell(0,5,'Order No: '.$row_a['invoice'],0,1, 'R');
$pdf->Cell(0,5,'Date Ordered: '.date('M d, Y', strtotime($row_a['dateordered'])),0,1, 'R');
$pdf->Cell(0,5,'ETA: '.date('M d, Y', strtotime($row_a['eta'])),0,1, 'R');
}


$pdf->setY(40);
$pdf->Cell(0,5,'Skidwanlai Computer World',0,1, 'L');
$pdf->Cell(0,5,'Tanza, Cavite',0,1, 'L');
$pdf->Cell(0,5,'',0,1, 'L');
$pdf->Cell(0,5,'Prepared by: '.$_SESSION['adminfname'].' '.$_SESSION['adminlname'],0,1, 'L');

$pdf->setY(40);
$tbl_a = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice] GROUP BY invoice;");
while ($row_b = mysqli_fetch_assoc($tbl_a)){
$pdf->setFont('Helvetica','B',12);
$pdf->Cell(0,5,$row_b['customername'],0,1, 'R');
$pdf->setFont('Helvetica','',10);
$pdf->Cell(0,5,$row_b['address'],0,1, 'R');
$pdf->Cell(0,5,$row_b['brgy'],0,1, 'R');
$pdf->Cell(0,5,$row_b['city'],0,1, 'R');
}

$pdf->Ln(5);
$tbl_a = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice] GROUP BY invoice;");
while ($row_c = mysqli_fetch_assoc($tbl_a)){
$pdf->setFont('Helvetica','B',10);
$pdf->Cell(0,8,'Payment Method',1,0,'L');
$pdf->setFont('Helvetica','',10);
$pdf->Cell(0,8,$row_c['method'],0,1,'R');
}

$pdf->Ln(5);

$pdf->setFont('Helvetica','B',10);
$pdf->Cell(20,8,'Qty',1,0,'C');
$pdf->Cell(120,8,'Product',1,0,'C');
$pdf->Cell(50,8,'Total Price',1,1,'C');

$pdf->setFont('Helvetica','',10);
$tbl_b = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice];");
while ($row_d = mysqli_fetch_assoc($tbl_b)){
	$pdf->Cell(20,8,$row_d['qty'],1,0,'C');
	$pdf->Cell(120,8,$row_d['name'],1,0,'L');
	$pdf->Cell(50,8,'PHP '.number_format($row_d['priceMD'], 2),1,1,'R');
}

$pdf->Ln(5);

$tbl_a = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice] GROUP BY invoice;");
while ($row_e = mysqli_fetch_assoc($tbl_a)){
	$pdf->setFont('Helvetica','B',10);
$pdf->Cell(0,8,'Shipping',1,0,'L');
$pdf->setFont('Helvetica','',10);
$pdf->Cell(0,8,'PHP '.number_format($row_e['shipcost'], 2),0,1,'R');
}

$tbl_a = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice] GROUP BY invoice;");
while ($row_f = mysqli_fetch_assoc($tbl_a)){
	$pdf->setFont('Helvetica','B',10);
$pdf->Cell(0,8,'VAT',1,0,'L');
$pdf->setFont('Helvetica','',10);
$pdf->Cell(0,8,'PHP '.number_format($row_f['vat'], 2),0,1,'R');
}

$tbl_a = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice] GROUP BY invoice;");
while ($row_g = mysqli_fetch_assoc($tbl_a)){
$pdf->setFont('Helvetica','B',10);
$pdf->Cell(0,8,'Discount',1,0,'L');
$pdf->setFont('Helvetica','',10);
$pdf->Cell(0,8,$row_g['discount']*100 . '%',0,1,'R');
}

$tbl_a = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice] GROUP BY invoice;");
while ($row_h = mysqli_fetch_assoc($tbl_a)){
$pdf->setFont('Helvetica','B',10);
$pdf->Cell(0,8,'Grand Total',1,0,'L');
$pdf->setFont('Helvetica','',10);
$pdf->Cell(0,8,'PHP '.number_format($row_h['grandtotal'], 2),0,1,'R');
}

$pdf->Ln(15);
$pdf->setFont('Helvetica','U',10);
$pdf->Cell(0,5,'                                                  ',0,1, 'R');
$pdf->setFont('Helvetica','',10);
$pdf->Cell(0,5,'RECEIVED BY',0,1, 'R');

$pdf->AddPage();
$pdf->setFont('Helvetica','B',10);
$pdf->Cell(0,8,'Terms & Conditions',1,1,'C');
$tbl_d = mysqli_query($con, "SELECT * FROM tbl_info;");
$row_j = mysqli_fetch_assoc($tbl_d);
// Output justified text
$pdf->setFont('Helvetica','',8);
$pdf->MultiCell(0,5,$row_j['m_terms_conditions'], 1, 1);

$pdf->Output();
session_commit();
?>