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
    $this->setFont('Helvetica','B',12);
    $this->Cell(0,10,'Annual Sales Report',0,1, 'R');
    $this->setFont('Helvetica','',11);
    $this->Cell(0,5,'Skidwanlai Computer World',0,1, 'R');
    $this->Cell(0,5,'Tanza, Cavite',0,1, 'R');
    $this->Cell(0,5,'',0,1, 'R');
    $this->Cell(0,5,'Prepared by: '.$_SESSION['fname'].' '.$_SESSION['lname'],0,1, 'R');
    $this->Ln(10);
    $this->setY(33);
    $this->Cell(0,10,'From '.date('Y', strtotime($_GET["date_from"])).' to '.date('Y', strtotime($_GET["date_to"])).'',0,1);

    $this->setY(40);
    $this->Ln(5);

    $this->setFont('Helvetica','B',10);
    $this->Cell(217,8,'Product',1,0,'C');
    $this->Cell(20,8,'Sold (Qty)',1,0,'C');
    $this->Cell(40,8,'Total Price',1,1,'C');
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
$pdf = new PDF("L");
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->setFont('Helvetica','',10);
//$tbl_b = mysqli_query($con, "SELECT *, SUM(vat) AS totalVat, SUM(qty) AS totalQty, SUM(grandtotal) AS totalGrand FROM tbl_order WHERE (orderstatus='Delivered' OR method='Paypal') AND DATE_FORMAT(datedelivered, '%Y') BETWEEN DATE_FORMAT('$_GET[date_from]', '%Y') AND DATE_FORMAT('$_GET[date_to]', '%Y') GROUP BY DATE_FORMAT(datedelivered, '%Y');");
$tbl_b = mysqli_query($con, "SELECT *, SUM(vat) AS totalVat, SUM(qty) AS totalQty, SUM(grandtotal) AS totalGrand FROM tbl_order WHERE (orderstatus='Delivered' OR method='Paypal') AND DATE_FORMAT(datedelivered, '%Y') BETWEEN DATE_FORMAT('$_GET[date_from]', '%Y') AND DATE_FORMAT('$_GET[date_to]', '%Y') GROUP BY code;");
while ($row_d = mysqli_fetch_assoc($tbl_b)){
	//$pdf->Cell(38,8,date('Y', strtotime($row_d['datedelivered'])),1,0,'C');
	$pdf->Cell(217,8,$row_d['name'],1,0);
    $pdf->Cell(20,8,$row_d['totalQty'],1,0,'C');
    $pdf->Cell(40,8,'PHP '.number_format($row_d['totalGrand']-$row_d['totalVat'], 2),1,1,'R');
    
    //$pdf->Cell(38,8,'PHP '.number_format($row_d['totalVat'], 2),1,0,'R');
    //$pdf->Cell(38,8,'PHP '.number_format($row_d['totalGrand'], 2),1,1,'R');
}

$pdf->Ln(5);

$tbl_a = mysqli_query($con, "SELECT SUM(vat) AS totalVat, SUM(grandtotal) AS totalGrand FROM tbl_order WHERE (orderstatus='Delivered' OR method='Paypal') AND DATE_FORMAT(datedelivered, '%Y') BETWEEN DATE_FORMAT('$_GET[date_from]', '%Y') AND DATE_FORMAT('$_GET[date_to]', '%Y');");
while ($row_h = mysqli_fetch_assoc($tbl_a)){
$pdf->setFont('Helvetica','B',10);
$pdf->Cell(0,8,'Sub Total',1,0,'L');
$pdf->setFont('Helvetica','',10);
$pdf->Cell(0,8,'PHP '.number_format($row_h['totalGrand']-$row_h['totalVat'], 2),0,1,'R');
$pdf->setFont('Helvetica','B',10);
$pdf->Cell(0,8,'Total Vat',1,0,'L');
$pdf->setFont('Helvetica','',10);
$pdf->Cell(0,8,'PHP '.number_format($row_h['totalVat'], 2),0,1,'R');
$pdf->setFont('Helvetica','B',10);
$pdf->Cell(0,8,'Grand Total',1,0,'L');
$pdf->setFont('Helvetica','',10);
$pdf->Cell(0,8,'PHP '.number_format($row_h['totalGrand'], 2),0,1,'R');
}
$pdf->Output();
session_commit();
?>