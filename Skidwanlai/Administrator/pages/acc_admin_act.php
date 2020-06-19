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
                        <h1 class="page-header"><a href="acc_admin.php" class="page-header-link">Admin Accounts</a> <small>Activities: <?php
                        $get_name = mysqli_query($con, "SELECT * FROM tbl_admin WHERE adminid=$_GET[adminid];");
                        $row_name = mysqli_fetch_assoc($get_name);
                        echo $row_name['adminfname']." ".$row_name['adminlname'];
                        ?></small></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dataTable_wrapper">
                            <div class="form-group pull-right" style="margin-top: -6.5%;">
                                <a href="acc_admin_new.php" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-plus"></i>&nbsp;&nbsp;Create Account</a>
                            </div>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                <th>Activities Done</th>
                                <th>Date</th>
                                </tr>
                                </thead>
                                <tbody><?php
                                    $tbl_admin = mysqli_query($con, "SELECT * FROM tbl_admin_act WHERE adminid=$_GET[adminid];");
                                    //$counter=1;
                                    while ($row_admin = mysqli_fetch_assoc($tbl_admin)){ ?>
                                    <tr>
                                    <td date-toggle='tooltip' data-placement='right' title="<?php echo $row_admin['adminact'];?>" style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'><?php echo $row_admin['adminact'];?></td>
                                    <td><?php echo date("M d, Y ; h:i A", strtotime($row_admin['adminactdate']));?></td>
                                    </tr><?php
                                    //$counter++;
                                    }?>
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
                        <a class="btn btn-danger btn-outline btn-sm" href="acc_admin.php"><i class="fa fa-chevron-left"></i>&nbsp;&nbsp;Back</a>
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

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                //responsive: true
                "order": [[ 1, "desc" ]]
        });
    });
    </script>

</body>
<?php session_commit();?>
</html>
