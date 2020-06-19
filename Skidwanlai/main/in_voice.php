<!DOCTYPE html>
<?php session_start();?>
<?php
if (!isset($_SESSION['accid'])){
	header ("Location: login.php");
}
else {
?>
<html lang="en">
<?php include "includes/head.php"; ?>
<style>
    .invoice-box{
        background-color: #fff;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }

    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }

    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }

    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }

    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }

    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }

    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }

    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }

    .invoice-box table tr.details td{
        padding-bottom:20px;
    }

    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }

    .invoice-box table tr.item.last td{
        border-bottom:none;
    }

    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }

        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>
    
    <style>
    @media print{
    .invoice-box{
        background-color: #fff;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }

    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }

    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }

    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }

    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }

    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }

    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }

    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }

    .invoice-box table tr.details td{
        padding-bottom:20px;
    }

    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }

    .invoice-box table tr.item.last td{
        border-bottom:none;
    }

    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }

        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    }
    </style>
    
<body class="cnt-home">
<?php include "includes/header.php"; ?>
<div class="body-content">
<div class="container">
<div class="homepage-container">
<div class="row">
<!-- ============================================== CONTENT ============================================== -->
<div class="col-md-12">
<div class="invoice-box" id="invoice-box">
    <table cellpadding="0" cellspacing="0">
      <tr class="top">
        <td colspan="2">
          <table>
            <tr>
              <td class="title">
                <img src="assets/images/logo.png" style="width:100%; max-width:300px;">
              </td>
              <?php
                $tbl_invoice_c = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice] GROUP BY invoice;");
                while ($row_invoice_c = mysqli_fetch_assoc($tbl_invoice_c)){
                ?>
                  <td>
                    Invoice #: <?php echo $row_invoice_c['invoice'];?><br>
                    Sent: <?php echo date('M d, Y', strtotime($row_invoice_c['dateordered']));?><br>
                    ETA: <?php echo date('M d, Y', strtotime($row_invoice_c['eta']));?><br>
                  </td>
                <?php
                }
              ?>
            </tr>
          </table>
        </td>
      </tr>
      <tr class="information">
        <td colspan="2">
          <table>
            <tr>
              <td>
                Skidwanlai Computer World<br>
                Tanza, Cavite<br>
              </td>
              <?php
                $tbl_invoice_d = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice] GROUP BY invoice;");
                while ($row_invoice_d = mysqli_fetch_assoc($tbl_invoice_d)){
                  ?>
                  <td>
                    <?php echo $row_invoice_d['customername'];?><br>
                    <?php echo $row_invoice_d['address'];?><br>
                    <?php echo $row_invoice_d['brgy'];?><br>
                    <?php echo $row_invoice_d['city'];?><br>
                  </td>
                  <?php
                }
              ?>
              

            </tr>
          </table>
        </td>
      </tr>
      <tr class="heading">
        <td>
          Payment Method
        </td>
        <td>

        </td>
      </tr>
      <tr class="details">
        <?php
          $tbl_invoice_e = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice] GROUP BY invoice;");
          while ($row_invoice_e = mysqli_fetch_assoc($tbl_invoice_e)){
            ?>
              <td>
                <?php echo $row_invoice_e['method'];?>
              </td>
            <?php
          }
        ?>
        

      </tr>
      <tr class="heading">
        <td>
          Item
        </td>
        <td>
          Price
        </td>
      </tr>

      <?php
          $tbl_invoice_f = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice];");
          while ($row_invoice_f = mysqli_fetch_assoc($tbl_invoice_f)){
            ?>
              <tr class="item">
                <td><?php echo $row_invoice_f['name'];?> (x <?php echo $row_invoice_f['qty'];?>)
                <?php
                if ($row_invoice_f['markdown']>0){
                 ?>(less <?php echo $row_invoice_f['markdown']*100 . " %";?>)
                 <?php 
                }
                ?>
                </td>
                <td><?php echo "PHP ".number_format($row_invoice_f['priceMD'], 2);?></td>
      </tr>
            <?php
          }
          ?>
      <?php
          $tbl_invoice_g = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice] GROUP BY invoice;");
          while ($row_invoice_g = mysqli_fetch_assoc($tbl_invoice_g)){
            ?>
              <tr class="item">
                <td>Shipping (<?php echo $row_invoice_g['shipday'];?>)</td>
                <td><?php echo "PHP ".number_format($row_invoice_g['shipcost'], 2);?></td>
              </tr>
            <?php
          }
            ?>
        <?php
          $tbl_invoice_z = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice] GROUP BY invoice;");
          while ($row_invoice_z = mysqli_fetch_assoc($tbl_invoice_z)){
            ?>
              <tr class="item">
                <td>VAT</td>
                <td><?php echo "PHP ".number_format($row_invoice_z['vat'], 2);?></td>
              </tr>
            <?php
          }
            ?>
      <?php
          $tbl_invoice_i = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice] GROUP BY invoice;");
          while ($row_invoice_i = mysqli_fetch_assoc($tbl_invoice_i)){
            ?>
              <tr class="total">
              <td style="border-top: 2px solid #eee; font-weight: bold;">
              Status:
            </td>
            <td>
              <?php echo $row_invoice_i['orderstatus'];?>
            </td>
      </tr>
            <?php
          }
      ?>
      <?php
          $tbl_invoice_h = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice] GROUP BY invoice;");
          while ($row_invoice_h = mysqli_fetch_assoc($tbl_invoice_h)){
            ?>
              <tr class="total">
              <td style="border-top: 2px solid #eee; font-weight: bold;">
              Total:
              <?php
                if ($row_invoice_h['discount']>0){
                  echo "(less ".$row_invoice_h['discount']*100 ." %)";
                }
              ?>
            </td>
            <td>
              <?php echo "PHP ".number_format($row_invoice_h['grandtotal'], 2);?>
            </td>
      </tr>
            <?php
          }
      ?>
      
    </table>

  </div>	
  
</div>
<!-- ============================================== CONTENT : END ============================================== -->
</div><!-- /.row -->
<br>
<div class="row">
	<div class="col-lg-12 pull-right">
  
		<a href="profile.php" class="btn btn-primary"><i class="fa fa-chevron-left"></i>&nbsp;&nbsp;Back</a>&emsp;
    <a target="_blank" href="PDF/pdf_invoice.php?invoice=<?php echo $_GET['invoice'];?>" class="btn btn-yellow"><i class="fa fa-print"></i>&nbsp;&nbsp;Print</a>&emsp;
    <?php
  $chk_stat = mysqli_query($con, "SELECT * FROM tbl_order WHERE orderstatus='Pending' AND invoice=$_GET[invoice];");
  if (mysqli_num_rows($chk_stat)>0){
    ?>
    <a href="#" data-toggle="modal" data-target="#confirm" class="btn btn-danger"><i class="fa fa-ban"></i>&nbsp;&nbsp;Cancel Order</a>
    <?php
  }
  ?>
	</div>
</div>
<br>
<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="panel panel-green" style="width:300px; margin: auto; margin-top: 25%;">
								<div class="panel-heading">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="panel-title" id="myModalLabel">Confirm</h4>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12 text-center">
										<label style="font-size: 14px;font-weight: 400;">Cancel this order?</label>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 text-center">
										<form method="post" action="function/cancel_order.php">
										<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
									
									<input type="hidden" value="<?php echo $_GET['invoice'];?>" name="invoice">
									<input type="submit" name="ok" id="ii" value="Yes" class="btn btn-primary">
									</form>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
<?php //include "includes/widget_brands.php"; ?>
</div><!-- /.container -->
</div>
</div><!-- /.body-content -->
<?php include "includes/footer.php"; ?>
<?php include "includes/javascripts.php"; ?>
</body>
</html>
<?php
}
?>
<?php session_commit();?>
<?php mysqli_close($con); ?>
