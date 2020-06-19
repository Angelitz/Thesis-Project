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
                        <h1 class="page-header">Admin Accounts</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dataTable_wrapper">
                            <div class="form-group pull-right" style="margin-top: -6.5%;">
                                <a href="acc_admin_new.php" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-plus"></i>&nbsp;&nbsp;Create Account</a>
                            </div>
                            <?php
                        if (isset($_GET["success"])){?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                A new administrator account has beed added.
                            </div><?php
                        }   ?>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <!--<th>Type</th>
                                <th>ENDO</th>-->
                                <th></th>
                                </tr>
                                </thead>
                                <tbody><?php
                                    $tbl_admin = mysqli_query($con, "SELECT * FROM tbl_admin;");
                                    $counter=1;
                                    while ($row_admin = mysqli_fetch_assoc($tbl_admin)){ ?>
                                    <tr>
                                    <td><?php echo $counter;?></td>
                                    <td date-toggle='tooltip' data-placement='right' title="<?php echo $row_admin['adminfname']." ".$row_admin['adminlname'];?>" style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'><?php echo $row_admin['adminfname']." ".$row_admin['adminlname'];?></td>
                                    <td date-toggle='tooltip' data-placement='right' title="<?php echo $row_admin['adminemail'];?>" style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'><?php echo $row_admin['adminemail'];?></td>
                                    
                                    <!--<td>--><?php //echo $row_admin['admintype'];?><!--</td>
                                    <td>--><?php //echo date("M d, Y", strtotime($row_admin['adminexp']));?><!--</td>-->
                                    
                                    <td><a href="acc_admin_act.php?adminid=<?php echo $row_admin['adminid'];?>" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-th-list"></i>&nbsp;&nbsp;Activities</a>

                                    <!--<a class="btn btn-primary btn-sm btn-outline" href="acc_admin_renew.php?adminid=<?php //echo $row_admin['adminid'];?>"><!--<i class="fa fa-refresh"></i>&nbsp;&nbsp;Renew</a>-->
                                    
                                    </td>
                                    </tr><?php
                                    $counter++;
                                    }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
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
                //"order": [[ 3, "asc" ]]
        });
    });
    </script>

</body>
<?php session_commit();?>
</html>
