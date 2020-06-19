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
                        <h1 class="page-header">General Information</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                <?php
                    

                    if(isset($_GET['save'])){
                        $m_email = $_GET["m_email"];
                        $m_contact = $_GET["m_contact"];
                        $m_address = $_GET["m_address"];
                        $m_about = $_GET["m_about"];
                        $m_tin = $_GET["m_tin"];
                        $m_terms_conditions = addslashes($_GET["m_terms_conditions"]);
                        mysqli_query($con, "UPDATE tbl_info SET m_address='$m_address', m_contact='$m_contact', m_email='$m_email', m_about='$m_about', m_terms_conditions='$m_terms_conditions', m_tin='$m_tin';");
                        //Admin activities
                        mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Updated the store website general information', NOW());");
                        ?>
                            <script>
                                window.location.href="set_gen_info.php?success";
                            </script>
                        <?php
                  }
                                ?>
                    <div class="col-lg-12">
                    <?php
                        if (isset($_GET["success"])){?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                General information updated.
                            </div><?php
                        } ?>
                        <form method="GET" id="frm" enctype="multipart/form-data">
                        <?php $tbl_info = mysqli_query($con, "SELECT * FROM tbl_info;");
                            $row_info = mysqli_fetch_assoc($tbl_info);?>
                        <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Terms & Conditions</label>
                                    <textarea style="resize: none; height: 248px;" name="m_terms_conditions" class="form-control unicase-form-control text-input" required ><?php echo $row_info['m_terms_conditions'];?>
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">TIN No</label>
                                    <input required type="text" autofocus name="m_tin" class="form-control unicase-form-control text-input" maxlength="50" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 45" value="<?php echo $row_info['m_tin'];?>"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Store Address</label>
                                    <input required type="text" autofocus name="m_address" class="form-control unicase-form-control text-input" maxlength="900" value="<?php echo $row_info['m_address'];?>"/>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Contact No</label>
                                    <input required name="m_contact" type="text" maxlength="30" class="form-control unicase-form-control text-input" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 32 || event.charCode == 40 || event.charCode == 41 || event.charCode == 43 || event.charCode == 45" value="<?php echo $row_info['m_contact'];?>"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Email Address</label>
                                    <input required name="m_email" type="email" class="form-control unicase-form-control text-input" maxlength="500" value="<?php echo $row_info['m_email'];?>"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">About</label>
                                    <textarea required style="resize: none; height: 100px;" name="m_about" class="form-control unicase-form-control text-input" maxlength="900"><?php echo $row_info['m_about'];?></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group pull-right">
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
</body>
<?php session_commit();?>
</html>
