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
                        <h1 class="page-header">Incoming Requests</h1>
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
                                <th>Method</th>
                                <th>Order Date</th>
                                <th>Shipping Period</th>
                                <th>ETA</th>
                                <th>Total</th>
                                <th></th>
                                </tr>
                                </thead>
                                <tbody><?php
                                    $tbl_order = mysqli_query($con, "SELECT *, SUM(qty) AS tQty FROM tbl_order WHERE orderstatus='Processing' GROUP BY invoice ORDER BY dateordered ASC;");
                                    $counter=1;
                                    while ($row_order = mysqli_fetch_assoc($tbl_order)){ ?>
                                    <tr>
                                    <td date-toggle="tooltip" data-placement="right" title="<?php echo "Invoice: ".$row_order['invoice']?>"><?php echo $counter;?></td>
                                    <td date-toggle='tooltip' data-placement='right' title="<?php echo $row_order['customername'];?>" style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'><?php echo $row_order['customername'];?></td>
                                    <td><?php echo $row_order['method'];//echo $row_order['tQty'];?></td>
                                    <td><?php echo date('M d, Y ; h:i A', strtotime($row_order['dateordered']));?></td>
                                    <td><?php echo $row_order['shipday'];?></td>
                                    <td><?php echo date('M d, Y', strtotime($row_order['eta']));?></td>
                                    <td><?php echo "PHP ".number_format($row_order['grandtotal'], 2);?></td>
                                    <td><a href="index_voice.php?invoice=<?php echo $row_order['invoice'];?>" class="btn btn-primary btn-block btn-sm btn-outline"><i class="fa fa-eye"></i>&nbsp;View</a></td>
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
                //responsive: true
                "order": [[ 3, "asc" ]]
        });
    });
    </script>

</body>
<?php session_commit();?>
</html>
