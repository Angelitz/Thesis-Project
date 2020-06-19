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
                        <h1 class="page-header"><a href="acc_admin.php" class="page-header-link">Admin Accounts</a> <small>New Account</small></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    <?php
                    if(isset($_GET['save'])){
                        $adminemail = $_GET["adminemail"];
                        $adminpassword = $_GET["adminpassword"];
                        $adminfname = $_GET["adminfname"];
                        $adminlname = $_GET["adminlname"];
                        //$admintype = $_GET["admintype"];
                        $admintype = "Regular";
                        
                    $chk_email_dup = mysqli_query($con, "SELECT * FROM tbl_admin WHERE adminemail='$adminemail';");
                    if (mysqli_num_rows($chk_email_dup)>0){ ?>
                        <script>
                            window.location.href="acc_admin_new.php?failed";
                        </script>
                        <?php

                    }
                    else {
                        if ($admintype=="Regular"){
                            mysqli_query($con, "INSERT INTO tbl_admin (adminemail, adminpassword, adminfname, adminlname, admintype, adminexp) VALUES ('$adminemail', '$adminpassword', '$adminfname', '$adminlname', '$admintype', DATE_ADD(NOW(), INTERVAL 1 YEAR));");
                        }

                        else {
                            mysqli_query($con, "INSERT INTO tbl_admin (adminemail, adminpassword, adminfname, adminlname, admintype, adminexp) VALUES ('$adminemail', '$adminpassword', '$adminfname', '$adminlname', '$admintype', DATE_ADD(NOW(), INTERVAL 1 MONTH));");
                        }?>
                        <script>
                            window.location.href="acc_admin.php?success";
                        </script>
                        <?php

                        //Admin activities
                        mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Registered $adminfname $adminlname as a new Administrator', NOW());");
                    }
                  }

                  if (isset($_GET["success"])){?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                A new administrator account has beed added.
                            </div>
                    <?php
                  }

                  if (isset($_GET["failed"])){ ?>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                The an administrator account with the email you are registering already exists.
                            </div>
                        <?php
                  }
                ?>
                        <form method="get" id="frm" enctype="multipart/form-data">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">First Name</label>
                                    <input autofocus required type="text" name="adminfname" maxlength="150" class="form-control unicase-form-control text-input"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Last Name</label>
                                    <input required type="text" name="adminlname" maxlength="150" class="form-control unicase-form-control text-input"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Email Address</label>
                                    <input required type="email" name="adminemail" maxlength="500" class="form-control unicase-form-control text-input"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Password</label>
                                    <input required type="password" name="adminpassword" maxlength="30" class="form-control unicase-form-control text-input"/>
                                </div>
                            </div>
                            <!--<div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Contract Type</label>
                                    <select required name="admintype" class="form-control unicase-form-control text-input">
                                        <option style="display:none;"></option>
                                        <option value="Regular">Regular (1 year contract)</option>
                                        <option value="Contractual">Contractual (1 month contract)</option>
                                    </select>
                                </div>
                            </div>-->
                            
                            <div class="col-lg-12">
                                <div class="form-group pull-right">
                                    <a href="acc_admin.php" class="btn btn-danger btn-outline btn-sm"><i class="fa fa-ban"></i>&nbsp;&nbsp;Cancel</a>&nbsp;&nbsp;
                                    <button type="submit" name="save" class="btn btn-primary btn-outline btn-sm" value="Save"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
