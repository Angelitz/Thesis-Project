<!DOCTYPE html>
<html lang="en">
<?php   session_start();
        include "function/db_connect.php";
        include "includes/head.php";    ?>
<body>
    <div id="wrapper">
        <?php include "includes/navigation.php";?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><a href="inv_hardware.php" class="page-header-link">Computer Hardware</a> <small>Restock Product</small></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group pull-right" style="margin-top: -6.5%;">
                            <a href="inv_hardware_product.php" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-plus"></i>&nbsp;&nbsp;Product</a>&nbsp;&nbsp;
                            <a href="inv_hardware_category.php" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-plus"></i>&nbsp;&nbsp;Category</a>&nbsp;&nbsp;
                            <a href="inv_hardware_brand.php" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-plus"></i>&nbsp;&nbsp;Brand</a>&nbsp;&nbsp;
                            <a href="inv_hardware_supplier.php" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-plus"></i>&nbsp;&nbsp;Supplier</a>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                <?php
                    $show=mysqli_query($con,"SELECT * FROM tbl_prod WHERE code='$_GET[code]' AND daterestock='$_GET[daterestock]';");
                    $sh=mysqli_fetch_array($show);
  
                    if(isset($_POST['up'])){
                        if ($_GET['daterestock']!=date('Y-m-d')){
                            mysqli_query($con,"INSERT INTO tbl_prod (`code`, `categoryname`, `name`, `des`, `brandname`, `img`, `price`, `stock`, `suppliername`, `dateadded`, `daterestock`, `markdown`, `adminid`)
                              VALUES (
                              '$sh[code]',
                              '$sh[categoryname]',
                              '$sh[name]',
                              '$sh[des]',
                              '$sh[brandname]',
                              '$sh[img]',
                              '$sh[price]',
                              $_POST[addstcks],
                              '$sh[suppliername]',
                              '$sh[dateadded]',
                              NOW(),
                              $sh[markdown],
                              $_SESSION[adminid]);");
                            ?>
                            <script>
                                window.location.href="inv_hardware.php?res_success";
                            </script>
                            <?php
                        }

                        else {
                            mysqli_query($con, "UPDATE tbl_prod SET stock=$_POST[addstcks]+stock, adminid=$_SESSION[adminid] WHERE code='$_GET[code]' AND daterestock='$_GET[daterestock]';");
                            ?>
                            <script>
                                window.location.href="inv_hardware.php?res_success";
                            </script>
                            <?php
                        }
                    }?>
                    <div class="col-lg-12">
                        <form method="post" id="frm" enctype="multipart/form-data">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Product Code</label>
                                    <input disabled name="code" type="text" class="form-control unicase-form-control text-input" value="<?php echo $sh['code']; ?>" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Product Name</label>
                                    <input disabled type="text" id="pname" name="pname" class="form-control unicase-form-control text-input" value="<?php echo $sh['name']; ?>"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                <?php
                                    $tbl_sum_stock = mysqli_query($con, "SELECT SUM(stock) AS totalStock FROM tbl_prod WHERE code='$_GET[code]' LIMIT 1;");
                                    $sh_sum_stock = mysqli_fetch_array($tbl_sum_stock); ?>
                                    <label style="font-size: 14px;font-weight: 400;">Stocks</label>
                                    <input disabled type="number" value="<?php echo $sh_sum_stock['totalStock']; ?>" min="0" name="stcks" class="form-control unicase-form-control text-input"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Add Stocks</label>
                                    <input type="number" autofocus value="1" name="addstcks" min="1" class="form-control unicase-form-control text-input"/>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group pull-right">
                                    <input type="hidden" id="sscode" name="code" value="">
                                    <a href="inv_hardware.php" class="btn btn-danger btn-outline btn-sm"><i class="fa fa-ban"></i>&nbsp;&nbsp;Cancel</a>&nbsp;&nbsp;
                                    <button type="submit" name="up" class="btn btn-primary btn-outline btn-sm" value="Update"><i class="fa fa-save"></i>&nbsp;&nbsp;Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
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
    <script type="text/javascript" src="../dist/js/lightbox.min.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                //responsive: true
                "order": [[ 6, "desc" ]]
        });
    });
    </script>

</body>
<?php session_commit();?>
</html>
