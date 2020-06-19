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
    if ($_GET['category']=="all"){
		$this->Cell(0,10,'Inventory Reports: All Products',0,1, 'R');	
	}
	else {
		$this->Cell(0,10,'Inventory Reports: '.$_GET["category"].'',0,1, 'R');
	}
    $this->setFont('Helvetica','',11);
	$this->Cell(0,5,'Skidwanlai Computer World',0,1, 'R');
	$this->Cell(0,5,'Tanza, Cavite',0,1, 'R');
	$this->Cell(0,5,'',0,1, 'R');
	$this->Cell(0,5,'Prepared by: '.$_SESSION['adminfname'].' '.$_SESSION['adminlname'],0,1, 'R');
    $this->Ln(10);
    

    $this->setY(33);
	$this->setFont('Helvetica','B',11);
	$this->Cell(0,10,'as of '.date('M d, Y').'',0,1);
	$this->setY(45);
	$this->Cell(195,10,'Name',1,0,'C');
	$this->Cell(40,10,'Price',1,0,'C');
	$this->Cell(20,10,'Beg. Qty',1,0,'C');
	$this->Cell(20,10,'Rem. Qty',1,1,'C');
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
$pdf = new PDF('L');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->setFont('Helvetica','',11);
$pdf->setY(10);

if (isset($_GET)){
	if($_GET["option1"]=="inventory"){
		if($_GET["category"]=="all"){
			//all products display
			$pdf->setFont('Helvetica','B',11);
			$pdf->setY(55);
			
			
			$pdf->setFont('Helvetica','',11);
			$show=mysqli_query($con,"SELECT * FROM tbl_prod GROUP BY code");
			while($s=mysqli_fetch_array($show)){
				
				$pdf->Cell(195,10,$s['name'],1,0);
				$pdf->Cell(40,10,number_format($s['price'], 2),1,0,'C');

				$bQty = $s['stock'];
                $qty1 = mysqli_query($con, "SELECT SUM(tbl_order.qty) AS tStock2 FROM tbl_order WHERE tbl_order.code='$s[code]' GROUP BY tbl_order.code;");
                        
                if (mysqli_num_rows($qty1)>0){
                	$row_qty1 = mysqli_fetch_assoc($qty1);
                    $bQty+=$row_qty1['tStock2'];
                }

                $qty2 = mysqli_query($con, "SELECT SUM(tbl_basket.qty) AS tStock3 FROM tbl_basket WHERE tbl_basket.code='$s[code]' GROUP BY tbl_basket.code;");
                        
               	if (mysqli_num_rows($qty2)>0){
                	$row_qty2 = mysqli_fetch_assoc($qty2);
                    $bQty+=$row_qty2['tStock3'];
                }

				$pdf->Cell(20,10,$bQty,1,0,'C');
				
				$pdf->Cell(20,10,$s['stock'],1,1,'C');
			}
		}
		else {
			$pdf->setFont('Helvetica','B',11);
			$pdf->setY(55);
			
			$pdf->setFont('Helvetica','',11);
			$show=mysqli_query($con,"SELECT * FROM tbl_prod WHERE categoryname = '$_GET[category]' GROUP BY code");
			while($s=mysqli_fetch_array($show)){
				
				$pdf->Cell(195,10,$s['name'],1,0);
				$pdf->Cell(40,10,number_format($s['price'], 2),1,0,'C');
				
				$bQty = $s['stock'];
                $qty1 = mysqli_query($con, "SELECT SUM(tbl_order.qty) AS tStock2 FROM tbl_order WHERE tbl_order.code='$s[code]' GROUP BY tbl_order.code;");
                        
                if (mysqli_num_rows($qty1)>0){
                	$row_qty1 = mysqli_fetch_assoc($qty1);
                    $bQty+=$row_qty1['tStock2'];
                }

                $qty2 = mysqli_query($con, "SELECT SUM(tbl_basket.qty) AS tStock3 FROM tbl_basket WHERE tbl_basket.code='$s[code]' GROUP BY tbl_basket.code;");
                        
               	if (mysqli_num_rows($qty2)>0){
                	$row_qty2 = mysqli_fetch_assoc($qty2);
                    $bQty+=$row_qty2['tStock3'];
                }

				$pdf->Cell(20,10,$bQty,1,0,'C');

				$pdf->Cell(20,10,$s['stock'],1,1,'C');
			}
		}
	}
}



$pdf->Output();
session_commit();
?>