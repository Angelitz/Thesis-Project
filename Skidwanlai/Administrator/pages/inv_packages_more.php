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
                        <h1 class="page-header"><a href="inv_packages.php" class="page-header-link">Computer Packages</a> <small>More</small></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dataTable_wrapper">
                            <div class="form-group pull-right" style="margin-top: -6.5%;">
                                <a href="inv_packages_package.php" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-plus"></i>&nbsp;&nbsp;Package</a>
                            </div>
                            <?php
                            if(isset($_GET['edit_success'])){ ?>
                                <div class="alert alert-success alert-dismissable">
                                <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                                Package updated successfully!
                                </div><?php
                            } ?>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Added</th>
                                <th>Restocked</th>
                                <th>Modified by</th>
                                <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                            $tbl_inv = mysqli_query($con, 
                              "SELECT
                                *, SUM(tbl_prod.stock) AS tStock
                                FROM tbl_prod JOIN tbl_admin ON tbl_prod.adminid=tbl_admin.adminid WHERE code='$_GET[id]' GROUP BY tbl_prod.daterestock ORDER BY daterestock DESC;");
                            $counter=1;
                            while ($row_inv = mysqli_fetch_assoc($tbl_inv)){
                            ?>
                              <tr>
                                <td date-toggle="tooltip" data-placement="right" title="<?php echo "Package Code: ".$row_inv['code']?>"><?php echo $counter; ?></td>
                                <td date-toggle="tooltip" data-placement="right" title="<?php echo $row_inv['name']?>" style="max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $row_inv["name"];?>
                                </td>
                                <td><?php echo $row_inv["tStock"];?></td>
                                <td><?php echo date('M d, Y', strtotime($row_inv["dateadded"]));?></td>
                                <td><?php echo date('M d, Y', strtotime($row_inv["daterestock"]));?></td>
                                <td date-toggle="tooltip" data-placement="right" title="<?php echo $row_inv['adminfname'].' '.$row_inv['adminlname']?>" style="max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $row_inv["adminfname"]." ".$row_inv["adminlname"];?></td>
                                
                                <td><a href="inv_packages_more_edit.php?code=<?php echo $row_inv['code'];?>&daterestock=<?php echo $row_inv['daterestock'];?>" class="btn btn-primary btn-block btn-sm btn-outline"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Edit</a></td>
                              </tr>
                            <?php  
                            $counter++;
                            }
                            ?>
                    </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group pull-right">
                        <a class="btn btn-danger btn-outline btn-sm" href="inv_packages.php"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>&nbsp;&nbsp;
                            <a href="inv_packages_more_edit_all.php?code=<?php echo $_GET['id'];?>" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Edit All</a>
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
