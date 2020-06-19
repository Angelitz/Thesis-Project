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
                        <h1 class="page-header"><a href="inv_hardware.php" class="page-header-link">Computer Hardware</a> <small>Brand</small></h1>
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
                    <div class="col-lg-6">
                    <?php
                        if(isset($_GET['remove_brand'])){ ?>
                            <div class="alert alert-success alert-dismissable">
                            <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                            Brand removed successfully!
                            </div><?php
                        }
                    ?>
                        <div class="dataTable_wrapper">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                <th>No.</th>
                                <th>Brand</th>
                                <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $tbl_brand = mysqli_query($con, "SELECT * FROM tbl_brand ORDER BY brandname ASC;");
                                    $counter=1;
                                    while ($row_brand = mysqli_fetch_assoc($tbl_brand)){
                                    ?>
                                    <tr>
                                        <td><?php echo $counter;?></td>
                                        <td><?php echo $row_brand["brandname"];?></td>
                                        <td><a href="function/brand_del.php?brandid=<?php echo $row_brand['brandid']; ?>" class="btn btn-block btn-danger btn-sm btn-outline"><i class="fa fa-trash"></i>&nbsp;Remove</a></td>
                                    </tr><?php
                                    $counter++;  
                                    }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <?php
                        if(isset($_GET['add_brand'])){ ?>
                            <div class="alert alert-success alert-dismissable">
                            <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                            Brand added successfully!
                            </div><?php
                        }
                        if(isset($_GET['dup_brand'])){ ?>
                            <div class="alert alert-danger alert-dismissable">
                            <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                            Brand already exists!
                            </div><?php
                        }
                        ?>
                        <form method="post" action="function/brand_add.php">
                        <div class="form-group">
                            <label style="font-size: 14px;font-weight: 400;">New brand</label>
                            <input type="text" maxlength="50" autofocus required name="brandname" class="form-control unicase-form-control text-input"/>
                        </div>
                        <div class="form-group pull-right">
                            <a href="inv_hardware.php" class="btn btn-danger btn-outline btn-sm"><i class="fa fa-ban"></i>&nbsp;&nbsp;Cancel</a>&nbsp;&nbsp;
                            <button type="submit" value="Save" name="savebrand" class="btn btn-primary btn-outline btn-sm"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
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
