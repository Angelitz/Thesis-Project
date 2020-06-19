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
                        <h1 class="page-header"><a href="acc_user.php" class="page-header-link">User Accounts</a> <small>More: <?php
                        $get_name = mysqli_query($con, "SELECT * FROM tbl_acc JOIN tbl_acc_disc ON tbl_acc.discid = tbl_acc_disc.discid WHERE accid=$_GET[accid];");
                        $row_name = mysqli_fetch_assoc($get_name);
                        echo $row_name['fname']." ".$row_name['lname']." (".$row_name['discname'].")";
                        ?></small></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dataTable_wrapper">
                            <div class="form-group pull-right" style="margin-top: -6.5%;">
                                <a href="acc_user_more_type.php?accid=<?php echo $_GET['accid'];?>" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Change Customer Type</a>
                            </div>
                            <?php
                    if (isset($_GET["success"])){
                        ?>
                        <div class="alert alert-success alert-dismissable">
                            <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                            Customer Type updated successfully!
                            </div>
                        <?php
                    }
                    ?>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                <th>No.</th>
                                <th>Invoice</th>
                                <th>Method</th>
                                <th>Qty</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th></th>
                                </tr>
                                </thead>
                                <tbody><?php
                                    $tbl_acc = mysqli_query($con, "SELECT *, SUM(qty) AS tQty FROM tbl_order WHERE accid=$_GET[accid] GROUP BY invoice;");
                                    $counter=1;
                                    while ($row_acc = mysqli_fetch_assoc($tbl_acc)){ ?>
                                    <tr>
                                    <td><?php echo $counter;?></td>
                                    <td><?php echo $row_acc['invoice'];?></td>
                                    <td><?php echo $row_acc['method'];?></td>
                                    <td><?php echo $row_acc['tQty'];?></td>
                                    <?php
                                        $tbl_order_total = mysqli_query($con, "SELECT SUM(grandtotal) as total FROM tbl_order WHERE accid=$row_acc[accid] GROUP BY invoice;");
                                        $row_order_total = mysqli_fetch_assoc($tbl_order_total);
                                    ?>
                                    <td><?php echo "PHP ".number_format($row_acc['grandtotal'], 2);?></td>
                                    <td><?php echo $row_acc['orderstatus'];?></td>
                                    <td><a href="index_voice.php?invoice=<?php echo $row_acc['invoice'];?>" class="btn btn-primary btn-block btn-sm btn-outline"><i class="fa fa-eye"></i>&nbsp;&nbsp;View</a></td>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group pull-right">
                        <a class="btn btn-danger btn-outline btn-sm" href="acc_user.php"><i class="fa fa-chevron-left"></i>&nbsp;&nbsp;Back</a>
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
                responsive: true
                //"order": [[ 3, "asc" ]]
        });
    });
    </script>

</body>
<?php session_commit();?>
</html>
