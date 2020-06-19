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
                        <h1 class="page-header"><a href="acc_user.php" class="page-header-link">User Accounts</a> <small>
                        <a href="acc_user_more.php?accid=<?php echo $_GET['accid'];?>" class="page-header-link-2">More: <?php
                        $get_name = mysqli_query($con, "SELECT * FROM tbl_acc JOIN tbl_acc_disc ON tbl_acc.discid = tbl_acc_disc.discid WHERE accid=$_GET[accid];");
                        $row_name = mysqli_fetch_assoc($get_name);
                        echo $row_name['fname']." ".$row_name['lname']." (".$row_name['discname'].")";
                        $fullname = $row_name['fname']." ".$row_name['lname'];
                        ?></a> <small>Change Customer Type</small></small> </h1>
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
                    if (isset($_GET["save"])){
                        mysqli_query($con, "UPDATE tbl_acc SET discid=$_GET[discid] WHERE accid=$_GET[accid];");
                        mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Changed a customer discount type', NOW());");
                    ?>
                        <script>
                            window.location.href="acc_user_more.php?accid=<?php echo $_GET['accid'];?>&success";
                        </script>
                    <?php    
                    }
                    ?>
                        <form method="get">
                        <div class="form-group">
                            <label style="font-size: 14px;font-weight: 400;">Name</label>
                            <input type="text" disabled name="fullname" value="<?php echo $fullname;?>" class="form-control unicase-form-control text-input"/>
                            <input type="hidden" name="accid" value="<?php echo $_GET['accid'];?>">
                        </div>
                        <div class="form-group">
                            <label style="font-size: 14px;font-weight: 400;">Customer Type</label>
                            <select autofocus name="discid" class="form-control unicase-form-control text-input">
                                <option value="<?php echo $row_name[discid];?>"><?php echo $row_name["discname"];?></option>
                                <?php
                                $sql_disc = mysqli_query($con, "SELECT * FROM tbl_acc_disc WHERE discid!=$row_name[discid];");
                                while ($row_disc = mysqli_fetch_assoc($sql_disc)){
                                    ?>
                                    <option value="<?php echo $row_disc['discid'];?>"><?php echo $row_disc["discname"];?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group pull-right">
                            <a class="btn btn-danger btn-outline btn-sm" href="acc_user_more.php?accid=<?php echo $_GET['accid'];?>"><i class="fa fa-ban"></i>&nbsp;&nbsp;Cancel</a>&nbsp;&nbsp;
                            <button type="submit" value="Save" name="save" class="btn btn-primary btn-outline btn-sm"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
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
