<!DOCTYPE html>
<html lang="en">
<?php   session_start();
        include "function/db_connect.php";
        $sql_acc_disc = mysqli_query($con, "SELECT * FROM tbl_acc_disc WHERE discid=$_GET[discid];");
        $row_acc_disc = mysqli_fetch_assoc($sql_acc_disc);
        include "includes/head.php";    ?>
<body>
    <div id="wrapper">
        <?php include "includes/navigation.php"; ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><a href="set_disc_list.php" class="page-header-link">Customer Discount List</a> <small>Edit: <?php echo $row_acc_disc['discname'];?></small></h1>
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
                                <th>Discount Type</th>
                                <th>Discount (%)</th>
                                <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $tbl_disc = mysqli_query($con, "SELECT * FROM tbl_acc_disc ORDER BY discid ASC;");
                                    $counter=1;
                                    while ($row_disc = mysqli_fetch_assoc($tbl_disc)){
                                    ?>
                                    <tr>
                                        <td><?php echo $counter;?></td>
                                        <td><?php echo $row_disc["discname"];?></td>
                                        <td><?php echo ($row_disc["discpercent"]*100)." % Off";?></td>
                                        <td><a href="set_disc_list_edit.php?discid=<?php echo $row_disc['discid']; ?>" class="btn btn-block btn-primary btn-sm btn-outline"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Edit</a></td>
                                    </tr><?php
                                    $counter++;  
                                    }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <form method="post" action="function/acc_disc_edit.php">
                        <div class="form-group">
                            <input type="hidden" value="<?php echo $row_acc_disc['discid'];?>" name="discid"/>
                            <label style="font-size: 14px;font-weight: 400;">Discount Type</label>
                            <input type="text" autofocus required name="discname" maxlength="50" class="form-control unicase-form-control text-input" value="<?php echo $row_acc_disc['discname'];?>"/>
                        </div>
                        <div class="form-group">
                            <label style="font-size: 14px;font-weight: 400;">Discount (%)</label>
                            <input type="number" min="0" step="1" max="100" value="<?php echo $row_acc_disc['discpercent']*100;?>" required name="discpercent" class="form-control unicase-form-control text-input" />
                        </div>
                        <div class="form-group pull-right">
                            <button type="submit" value="Save" name="savedisc" class="btn btn-primary btn-outline btn-sm"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
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
