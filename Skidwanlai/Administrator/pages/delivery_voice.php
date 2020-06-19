<!DOCTYPE html>
<html lang="en">
<?php   session_start();
        include "function/db_connect.php";
        include "includes/head.php";    ?>
<body>
    <div id="wrapper">
        <?php include "includes/navigation.php"; ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><a href="index.php" class="page-header-link">Ready for Delivery</a> <small>Order Details</small></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="invoice-box">
                            <table cellpadding="0" cellspacing="0">
                                <tr class="top">
                                    <td colspan="2">
                                        <table>
                                            <tr>
                                                <td class="title">
                                                    <img src="../dist/images/logo.png" style="width:100%; max-width:300px;">
                                                </td>
                                                <?php
                                                $tbl_invoice_c = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice] GROUP BY invoice;");
                                                while ($row_invoice_c = mysqli_fetch_assoc($tbl_invoice_c)){ ?>
                                                <td>
                                                    Invoice #: <?php echo $row_invoice_c['invoice'];?><br>
                                                    Date Ordered: <?php echo date('M d, Y h:i A', strtotime($row_invoice_c['dateordered']));?><br>
                                                    ETA: <?php echo date('M d, Y', strtotime($row_invoice_c['eta']));?><br>
                                                </td>
                                                <?php
                                                } ?>
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
                                                while ($row_invoice_d = mysqli_fetch_assoc($tbl_invoice_d)){ ?>
                                                <td>
                                                    <?php echo $row_invoice_d['customername'];?><br>
                                                    <?php echo $row_invoice_d['address'];?><br>
                                                    <?php echo $row_invoice_d['brgy'];?><br>
                                                    <?php echo $row_invoice_d['city'];?><br>
                                                </td>
                                                <?php
                                                } ?>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="heading">
                                    <td>
                                        Payment Method
                                    </td>
                                    <td></td>
                                </tr>
                                <tr class="details">
                                    <?php
                                    $tbl_invoice_e = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice] GROUP BY invoice;");
                                    while ($row_invoice_e = mysqli_fetch_assoc($tbl_invoice_e)){ ?>
                                    <td>
                                        <?php echo $row_invoice_e['method'];?>
                                    </td>
                                    <?php
                                    } ?>
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
                                while ($row_invoice_f = mysqli_fetch_assoc($tbl_invoice_f)){ ?>
                                <tr class="item">
                                    <td><?php echo $row_invoice_f['name'];?> (x <?php echo $row_invoice_f['qty'];?>) <?php
                                        if ($row_invoice_f['markdown']>0){
                                        ?>(less <?php echo $row_invoice_f['markdown']*100 . " %";?>)<?php 
                                        } ?>
                                    </td>
                                    <td><?php echo "PHP ".number_format($row_invoice_f['priceMD'], 2);?></td>
                                </tr> <?php
                                } ?>
                                <?php
                                $tbl_invoice_g = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice] GROUP BY invoice;");
                                while ($row_invoice_g = mysqli_fetch_assoc($tbl_invoice_g)){ ?>
                                <tr class="item">
                                    <td>Shipping (<?php echo $row_invoice_g['shipday'];?>)</td>
                                    <td><?php echo "PHP ".number_format($row_invoice_g['shipcost'], 2);?></td>
                                  </tr> <?php
                                } ?>
                                <?php
                                $tbl_invoice_i = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice] GROUP BY invoice;");
                                while ($row_invoice_i = mysqli_fetch_assoc($tbl_invoice_i)){ ?>
                                <tr class="total">
                                    <td style="border-top: 2px solid #eee; font-weight: bold;">
                                    Status:
                                    </td>
                                    <td>
                                      <?php echo $row_invoice_i['orderstatus'];?>
                                    </td>
                                </tr> <?php
                                } ?>
                                <?php
                                $tbl_invoice_h = mysqli_query($con, "SELECT * FROM tbl_order WHERE invoice=$_GET[invoice] GROUP BY invoice;");
                                while ($row_invoice_h = mysqli_fetch_assoc($tbl_invoice_h)){ ?>
                                <tr class="total">
                                    <td style="border-top: 2px solid #eee; font-weight: bold;">
                                    Total:
                                    <?php
                                    if ($row_invoice_h['discount']>0){
                                        echo "(less ".$row_invoice_h['discount']*100 ." %)";
                                    } ?>
                                    </td>
                                    <td>
                                      <?php echo "PHP ".number_format($row_invoice_h['grandtotal'], 2);?>
                                    </td>
                                </tr> <?php
                                } ?>
                              
                            </table>
                        </div>  
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-group pull-right">
                            <a href="delivered.php" class="btn btn-danger btn-outline btn-sm"><i class="fa fa-chevron-left"></i>&nbsp;&nbsp;Back</a>&nbsp;&nbsp;
                            <a target='_blank' href="PDF/pdf_receipt.php?invoice=<?php echo $_GET['invoice'];?>" class="btn btn-warning btn-outline btn-sm"><i class="fa fa-print" ></i>&nbsp;&nbsp;Print</a>&nbsp;&nbsp;
                            <a href="#" data-toggle="modal" data-target="#confirm_deliver" class="btn btn-success btn-outline btn-sm"><i class="fa fa-check"></i>&nbsp;&nbsp;Delivered</a>
                        </form>
                    </div>
                </div>

                <div class="modal fade" id="confirm_deliver" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="panel panel-green" style="width:300px; margin: auto; margin-top: 25%;">
                            <div class="panel-heading">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="panel-title" id="myModalLabel">Confirm</h4>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <label style="font-size: 14px;font-weight: 400;">Orders successfully delivered?</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <form method="post" action="function/order_del.php">
                                            <button type="button" class="btn btn-danger btn-outline" data-dismiss="modal">No</button>&nbsp;&nbsp;
                                            <input type="hidden" value="<?php echo $_GET['invoice'];?>" name="invoice">
                                            <input type="submit" name="ok" id="ii" value="Yes" class="btn btn-primary btn-outline">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="../bower_components/datatables-responsive/js/dataTables.responsive.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
<?php session_commit();?>
</html>
