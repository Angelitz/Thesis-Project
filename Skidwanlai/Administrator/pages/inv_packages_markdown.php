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
                        <h1 class="page-header"><a href="inv_packages.php" class="page-header-link">Computer Packages</a> <small>Package Markdown</small></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group pull-right" style="margin-top: -6.5%;">
                            <a href="inv_packages_package.php" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-plus"></i>&nbsp;&nbsp;Package</a>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                <?php
                    $show=mysqli_query($con,"SELECT * FROM tbl_prod WHERE code='$_GET[id]';");
                    $sh=mysqli_fetch_array($show);
                    if(isset($_POST['up'])){
                        mysqli_query($con, "UPDATE tbl_prod SET markdown=$_POST[markdown]/100, adminid=$_SESSION[adminid] WHERE code='$_GET[id]';");
                        ?>
                        <script>
                            window.location.href="inv_packages.php?mark_success";
                        </script>
                        <?php
                    }
                ?>
                    <div class="col-lg-12">
                        <form method="post" id="frm" enctype="multipart/form-data">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Package Code</label>
                                    <input disabled name="code" type="text" class="form-control unicase-form-control text-input" value="<?php echo $sh['code']; ?>" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Package Name</label>
                                    <input disabled type="text" id="pname" name="pname" class="form-control unicase-form-control text-input" value="<?php echo $sh['name']; ?>"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Price</label>
                                    <input disabled type="number" value="<?php echo $sh['price']; ?>" name="price" id="price" class="form-control unicase-form-control text-input"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Markdown (%)</label>
                                    <input type="number" value="<?php echo $sh['markdown']*100;?>" step="0.01" name="markdown" min="0" max="100" class="form-control unicase-form-control text-input"/>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group pull-right">
                                    <input type="hidden" id="sscode" name="code" value="">
                                    <a href="inv_packages.php" class="btn btn-danger btn-outline btn-sm"><i class="fa fa-ban"></i>&nbsp;&nbsp;Cancel</a>&nbsp;&nbsp;
                                    <button type="submit" name="up" class="btn btn-primary btn-outline btn-sm" value="Update"><i class="fa fa-save"></i>&nbsp;&nbsp;Update</button>
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
