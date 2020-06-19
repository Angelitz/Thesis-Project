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
                        <h1 class="page-header"><a href="inv_hardware.php" class="page-header-link">Computer Hardware</a> <small>Supplier</small></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group pull-right" style="margin-top: -6.5%;">
                            <a href="inv_hardware_product.php" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-plus"></i>&nbsp;&nbsp;Product</a>
                            <a href="inv_hardware_category.php" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-plus"></i>&nbsp;&nbsp;Category</a>
                            <a href="inv_hardware_brand.php" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-plus"></i>&nbsp;&nbsp;Brand</a>
                            <a href="inv_hardware_supplier.php" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-plus"></i>&nbsp;&nbsp;Supplier</a>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-8">
                    <?php
                        if(isset($_GET['remove_supplier'])){ ?>
                            <div class="alert alert-success alert-dismissable">
                            <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                            Supplier removed successfully!
                            </div><?php
                        }
                    ?>
                        <div class="dataTable_wrapper">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                <th>No.</th>
                                <th>Supplier</th>
                                <th>Address</th>
                                <th>Contact No.</th>
                                <th>Email</th>
                                <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $tbl_supplier = mysqli_query($con, "SELECT * FROM tbl_supplier ORDER BY suppliername ASC;");
                                    $counter=1;
                                    while ($row_supplier = mysqli_fetch_assoc($tbl_supplier)){
                                    ?>
                                    <tr>
                                        <td><?php echo $counter;?></td>
                                        <td style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;' date-toggle='tooltip' data-placement='right' title="<?php echo $row_supplier['suppliername'];?>" ><?php echo $row_supplier["suppliername"];?></td>
                                        <td style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;' date-toggle='tooltip' data-placement='right' title="<?php echo $row_supplier['supplieraddress'];?>" ><?php echo $row_supplier["supplieraddress"];?></td>
                                        <td style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;' date-toggle='tooltip' data-placement='right' title="<?php echo $row_supplier['suppliercon'];?>" ><?php echo $row_supplier["suppliercon"];?></td>
                                        <td style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;' date-toggle='tooltip' data-placement='right' title="<?php echo $row_supplier['supplieremail'];?>" ><?php echo $row_supplier["supplieremail"];?></td>
                                        <td><a href="function/supplier_del.php?supplierid=<?php echo $row_supplier['supplierid']; ?>" class="btn btn-block btn-danger btn-sm btn-outline"><i class="fa fa-trash"></i>&nbsp;Remove</a></td>
                                    </tr><?php
                                    $counter++;  
                                    }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-4">
                        <?php
                        if(isset($_GET['add_supplier'])){ ?>
                            <div class="alert alert-success alert-dismissable">
                            <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                            Supplier added successfully!
                            </div><?php
                        }
                        if(isset($_GET['dup_supplier'])){ ?>
                            <div class="alert alert-danger alert-dismissable">
                            <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                            Supplier already exists!
                            </div><?php
                        }
                        ?>
                        <form method="post" action="function/supplier_add.php">
                        <div class="form-group">
                            <label style="font-size: 14px;font-weight: 400;">New Supplier</label>
                            <input type="text" autofocus required name="suppliername" class="form-control unicase-form-control text-input" maxlength="500" />
                        </div>
                        <div class="form-group">
                            <label style="font-size: 14px;font-weight: 400;">Address</label>
                            <input type="text" required name="supplieraddress" class="form-control unicase-form-control text-input" maxlength="500" />
                        </div>
                        <div class="form-group">
                            <label style="font-size: 14px;font-weight: 400;">Contact No.</label>
                            <input type="text" required name="suppliercon" maxlength="30" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 32 || event.charCode == 40 || event.charCode == 41 || event.charCode == 43 || event.charCode == 45" class="form-control unicase-form-control text-input"/>
                        </div>
                        <div class="form-group">
                            <label style="font-size: 14px;font-weight: 400;">Email</label>
                            <input type="email" name="supplieremail" class="form-control unicase-form-control text-input" maxlength="100" />
                        </div>
                        <div class="form-group pull-right">
                            <a href="inv_hardware.php" class="btn btn-danger btn-outline btn-sm"><i class="fa fa-ban"></i>&nbsp;&nbsp;Cancel</a>&nbsp;&nbsp;
                            <button type="submit" value="Save" name="savesupplier" class="btn btn-primary btn-outline btn-sm"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
                        </div>
                        </form>
                    </div>
                    <!-- /.col-lg-6 -->
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

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                //responsive: true
                "order": [[ 1, "asc" ]]
        });
    });
    </script>

</body>
<?php session_commit();?>
</html>
