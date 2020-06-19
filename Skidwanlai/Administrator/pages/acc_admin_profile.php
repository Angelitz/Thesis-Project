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
                        <h1 class="page-header">Personal Profile</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                            <div class="col-lg-6">
                            <?php
                            if (isset($_GET["saveprofile"])){
                                if ($_GET["adminemail"]==$_SESSION["adminemail"]){
                                    mysqli_query($con, "UPDATE tbl_admin SET adminfname='$_GET[adminfname]', adminlname='$_GET[adminlname]', adminemail='$_GET[adminemail]', adminpassword='$_GET[adminpassword]' WHERE adminid=$_SESSION[adminid];");

                                    //Admin activities
                                    mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Updated personal profile', NOW());");
                                    ?>
                                    <script>
                                        window.location.href="acc_admin_profile.php?success";
                                    </script>
                                    <?php
                                }

                                else {
                                    $chk_email = mysqli_query($con, "SELECT * FROM tbl_admin WHERE adminemail='$_GET[adminemail]';");
                                    if (mysqli_num_rows($chk_email) > 0) {
                                    ?>
                                    <div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        There is another account associated with this email.
                                    </div>
                                    <?php
                                    }

                                    else {
                                        mysqli_query($con, "UPDATE tbl_admin SET adminfname='$_GET[adminfname]', adminlname='$_GET[adminlname]', adminemail='$_GET[adminemail]', adminpassword='$_GET[adminpassword]' WHERE adminid=$_SESSION[adminid];");
                                        //Admin activities
                                        mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Updated personal profile', NOW());");
                                        ?>
                                        <script>
                                            window.location.href="acc_admin_profile.php?success";
                                        </script>
                                        <?php
                                    }

                                }
                            }
                            ?>
                            <?php
                            if (isset($_GET["success"])){
                                ?>
                                    <div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        Successfully updated your personal profile.
                                    </div>
                                    <?php
                            }
                            ?>
                            <form method="GET">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">First Name</label>
                                    <input autofocus required type="text" name="adminfname" maxlength="150" class="form-control unicase-form-control text-input" value="<?php echo $_SESSION['adminfname'];?>"/>
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Last Name</label>
                                    <input required type="text" name="adminlname" maxlength="150" class="form-control unicase-form-control text-input" value="<?php echo $_SESSION['adminlname'];?>"/>
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Email Address</label>
                                    <input required type="email" name="adminemail" maxlength="500" class="form-control unicase-form-control text-input" value="<?php echo $_SESSION['adminemail'];?>"/>
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Password</label>
                                    <input required type="password" name="adminpassword" maxlength="30" class="form-control unicase-form-control text-input" value="<?php echo $_SESSION['adminpassword'];?>"/>
                                </div>
                                <!--<div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Contract Type</label>
                                    <input disabled type="text" name="admintype" value="<?php //echo $_SESSION['admintype'];?>" class="form-control unicase-form-control text-input"/>
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">ENDO</label>
                                    <input disabled type="text" name="adminexp" value="<?php //echo date('M d, Y', strtotime($_SESSION['adminexp']));?>" class="form-control unicase-form-control text-input"/>
                                </div>-->
                                <div class="form-group pull-right">
                                    <button type="submit" value="Save" name="saveprofile" class="btn btn-primary btn-outline btn-sm"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
                        </div>
                        </form>
                            </div>
                        

                        <div class="col-lg-6">
                            <div class="dataTable_wrapper">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                <th>No.</th>
                                <th>Activities Done</th>
                                <th>Date</th>
                                </tr>
                                </thead>
                                <tbody><?php
                                    $tbl_admin = mysqli_query($con, "SELECT * FROM tbl_admin_act WHERE adminid=$_SESSION[adminid] ORDER BY adminactdate DESC;");
                                    $counter=1;
                                    while ($row_admin = mysqli_fetch_assoc($tbl_admin)){ ?>
                                    <tr>
                                    <td><?php echo $counter;?></td>
                                    <td date-toggle='tooltip' data-placement='right' title="<?php echo $row_admin['adminact'];?>" style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'><?php echo $row_admin['adminact'];?></td>
                                    <td><?php echo date("M d, Y ; h:i A", strtotime($row_admin['adminactdate']));?></td>
                                    </tr><?php
                                    $counter++;
                                    }?>
                                </tbody>
                            </table>
                        </div>
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
                "order": [[ 2, "desc" ]]
        });
    });
    </script>

</body>
<?php session_commit();?>
</html>
