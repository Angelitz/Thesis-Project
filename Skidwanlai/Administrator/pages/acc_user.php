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
                        <h1 class="page-header">User Accounts</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dataTable_wrapper">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Contact No.</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Orders</th>
                                <th>Total</th>
                                <th>Type</th>
                                <th></th>
                                </tr>
                                </thead>
                                <tbody><?php
                                    $tbl_acc = mysqli_query($con, "SELECT * FROM tbl_acc JOIN tbl_acc_disc ON tbl_acc.discid = tbl_acc_disc.discid;");
                                    $counter=1;
                                    while ($row_acc = mysqli_fetch_assoc($tbl_acc)){ ?>
                                    <tr>
                                    <td><?php echo $counter;?></td>
                                    <td date-toggle='tooltip' data-placement='right' title="<?php echo $row_acc['fname']." ".$row_acc['lname'];?>" style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'><?php echo $row_acc['fname']." ".$row_acc['lname'];?></td>
                                    <td date-toggle='tooltip' data-placement='right' title="<?php echo $row_acc['ad'];?>" style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'><?php echo $row_acc['ad'];?></td>
                                    <td date-toggle='tooltip' data-placement='right' title="<?php echo $row_acc['con'];?>" style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'><?php echo $row_acc['con'];?></td>
                                    <td date-toggle='tooltip' data-placement='right' title="<?php echo $row_acc['email'];?>" style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'><?php echo $row_acc['email'];?></td>
                                    <td><?php echo $row_acc['status'];?></td>
                                    <?php
                                        $tbl_order = mysqli_query($con, "SELECT * FROM tbl_order WHERE accid=$row_acc[accid] GROUP BY invoice;");
                                    ?>
                                    <td><?php echo mysqli_num_rows($tbl_order);?></td>
                                    <?php
                                        $tbl_order_total = mysqli_query($con, "SELECT SUM(grandtotal) as total FROM tbl_order WHERE accid=$row_acc[accid];");
                                        $row_order_total = mysqli_fetch_assoc($tbl_order_total);
                                    ?>
                                    <td><?php echo "PHP ".number_format($row_order_total['total'], 2);?></td>
                                    <td><?php echo $row_acc['discname'];?></td>
                                    <td><a href="acc_user_more.php?accid=<?php echo $row_acc['accid'];?>" class="btn btn-primary btn-block btn-sm btn-outline"><i class="fa fa-th-list"></i>&nbsp;&nbsp;More</a></td>
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
