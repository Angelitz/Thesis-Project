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
                        <h1 class="page-header"><a href="inv_hardware.php" class="page-header-link">Computer Hardware</a> <small><a href="inv_hardware_more.php?id=<?php echo $_GET['code'];?>" class="page-header-link-2">More</a> <small>Edit</small></small></h1>
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
                    if(isset($_POST['up'])){
                    mysqli_query($con, "UPDATE tbl_prod SET suppliername='$_POST[suppliername]', stock=$_POST[stcks], adminid=$_SESSION[adminid] WHERE code='$_GET[code]' AND daterestock='$_GET[daterestock]';");
                        echo "<script>window.location='inv_hardware_more.php?id=".$_GET['code']."&edit_success';</script>"; 
                    }?>
                    <?php
                        $tbl_info_ind = mysqli_query($con, "SELECT * FROM tbl_prod WHERE code='$_GET[code]' AND daterestock='$_GET[daterestock]';");
                        $sh_info_ind = mysqli_fetch_array($tbl_info_ind); ?>
                    <form method="post" id="frm" enctype="multipart/form-data">
                        <div class="col-lg-6">
                            <div class="form-group" >
                            <label style="font-size: 14px;font-weight: 400;">Product Code</label>
                            <input disabled name="code" value="<?php echo $sh_info_ind['code'];?>" type="text" class="form-control unicase-form-control text-input"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" >
                            <label style="font-size: 14px;font-weight: 400;">Product Name</label>
                              <input disabled type="text" name="pname" value="<?php echo $sh_info_ind['name'];?>" class="form-control unicase-form-control text-input"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" >
                            <label style="font-size: 14px;font-weight: 400;">Date Restocked</label>
                            <input disabled name="daterestock" type="text" value="<?php echo date('M d, Y', strtotime($sh_info_ind['daterestock']));?>" class="form-control unicase-form-control text-input"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" >
                            <label style="font-size: 14px;font-weight: 400;">Supplier</label>
                                  <select id="suppliername" name="suppliername" class="form-control unicase-form-control text-input">
                                  <option><?php echo $sh_info_ind['suppliername'];?></option>
                                  <?php
                                   $sql_supplier = mysqli_query($con, "SELECT * FROM tbl_supplier;");
                                    while($row_supplier = mysqli_fetch_assoc($sql_supplier)){
                                    ?>
                                    <option><?php echo $row_supplier['suppliername'];?></option>
                                    <?php 
                                    }
                                  ?>
                                  </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" >
                            <label style="font-size: 14px;font-weight: 400;">Stocks</label>
                            <input required type="number" id="stcks" min="1" value="<?php echo $sh_info_ind['stock'];?>" name="stcks" class="form-control unicase-form-control text-input"/>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group pull-right">
                                <a class="btn btn-danger btn-outline btn-sm" href="inv_hardware_more.php?id=<?php echo $_GET['code'];?>"><i class="fa fa-ban"></i>&nbsp;&nbsp;Cancel</a>&nbsp;&nbsp;
                                <button type="submit" name="up" class="btn btn-primary btn-outline btn-sm" value="Update"><i class="fa fa-save"></i>&nbsp;&nbsp;Update</button>
                            </div>
                        </div>
                    </form>
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
