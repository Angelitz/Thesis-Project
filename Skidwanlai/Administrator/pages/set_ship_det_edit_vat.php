<!DOCTYPE html>
<html lang="en">
<?php   session_start();
        include "function/db_connect.php";
        $sql_vat_edit = mysqli_query($con, "SELECT * FROM tbl_vat WHERE vatid=$_GET[vatid];");
        $row_vat_edit = mysqli_fetch_assoc($sql_vat_edit);
        include "includes/head.php";    ?>
<body>
    <div id="wrapper">
        <?php include "includes/navigation.php"; ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Shipping Fees</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="dataTable_wrapper">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                <th>No.</th>
                                <th>Shipping Type</th>
                                <th>Cost</th>
                                <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $tbl_ship = mysqli_query($con, "SELECT * FROM tbl_shippingfee ORDER BY shipid ASC;");
                                    $counter=1;
                                    while ($row_ship = mysqli_fetch_assoc($tbl_ship)){
                                    ?>
                                    <tr>
                                        <td><?php echo $counter;?></td>
                                        <td><?php echo $row_ship["shipday"];?></td>
                                        <td><?php echo "PHP ".number_format($row_ship["cost"], 2);?></td>
                                        <td><a href="set_ship_det_edit.php?shipid=<?php echo $row_ship['shipid']; ?>" class="btn btn-block btn-primary btn-sm btn-outline"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Edit</a></td>
                                    </tr><?php
                                    $counter++;  
                                    }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <form method="post" action="function/ship_edit.php">
                        <div class="form-group">
                        <input type="hidden" value="<?php echo $row_ship_edit['shipid'];?>" name="shipid"/>
                            <label style="font-size: 14px;font-weight: 400;">Shipping Type</label>
                            <input type="text" disabled required name="shipday" class="form-control unicase-form-control text-input"/>
                        </div>
                        <div class="form-group">
                            <label style="font-size: 14px;font-weight: 400;">Shipping Cost</label>
                            <input type="number" disabled min="1" step="0.01" required name="cost" class="form-control unicase-form-control text-input"/>
                        </div>
                        <div class="form-group pull-right">
                            <button type="submit" value="Save" disabled name="saveship" class="btn btn-primary btn-outline btn-sm"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
                        </div>
                        </form>
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><a href="set_ship_det.php" class="page-header-link">VAT</a> <small>Edit</small></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="dataTable_wrapper">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                <th>VAT (%)</th>
                                <th>Description</th>
                                <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $tbl_vat = mysqli_query($con, "SELECT * FROM tbl_vat;");
                                    while ($row_vat = mysqli_fetch_assoc($tbl_vat)){
                                    ?>
                                    <tr>
                                        <td><?php echo $row_vat["vat_percent"]*100 . "%";?></td>
                                        <td title="<?php echo $row_vat['vat_desc'];?>" style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'><?php echo $row_vat["vat_desc"];?></td>
                                        <td><a href="set_ship_det_edit_vat.php?vatid=<?php echo $row_vat['vatid']; ?>" class="btn btn-block btn-primary btn-sm btn-outline"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Edit</a></td>
                                    </tr><?php  
                                    }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <?php
                        if(isset($_GET['edit_vat'])){ ?>
                            <div class="alert alert-success alert-dismissable">
                            <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                            VAT updated successfully!
                            </div><?php
                        }
                        ?>
                        <form method="post" action="function/vat_edit.php">
                        <div class="form-group">
                            <label style="font-size: 14px;font-weight: 400;">VAT (%)</label>
                            <input type="number" step="1" required name="vat_percent" min="0" max="100" class="form-control unicase-form-control text-input" autofocus value="<?php echo $row_vat_edit['vat_percent']*100;?>"/>
                        </div>
                        <div class="form-group">
                            <label style="font-size: 14px;font-weight: 400;">Description</label>
                            <input type="text" required name="vat_desc" value="<?php echo $row_vat_edit['vat_desc'];?>" class="form-control unicase-form-control text-input"/>
                        </div>
                        <div class="form-group pull-right">
                            <button type="submit" value="Save" name="savevat" class="btn btn-primary btn-outline btn-sm"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
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
                responsive: true
                //"order": [[ 1, "asc" ]]
        });
    });
    </script>

</body>
<?php session_commit();?>
</html>
