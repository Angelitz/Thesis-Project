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
                        <h1 class="page-header"><a href="inv_packages.php" class="page-header-link">Computer Packages</a> <small>New Package</small></h1>
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
                    if(isset($_POST['save'])){
                    $dir="products/";
                    $file=$dir.basename($_FILES["upload"]["name"]);
                    move_uploaded_file($_FILES["upload"]["tmp_name"], $file);

                    $procode=$_POST['code'];
                    $pname=$_POST['pname'];
                    $price=$_POST['price'];
                    $categoryname="Desktop Package";
                    $stcks=$_POST['stcks'];
                    $descript=$_POST['descript'];
                    $brandname="";
                    $suppliername=$_POST['suppliername'];
                    //mysqli_query($con,"INSERT INTO tbl_prod_old VALUES ('$procode','$categoryname','$pname','$descript','$brandname','$file',$price,0, NOW(), NOW(), 0);");
                    
                    mysqli_query($con,
                      "INSERT INTO tbl_prod VALUES
                      ('$procode','$categoryname','$pname','$descript','$brandname','$file','$price', $stcks, '$suppliername', NOW(), NOW(), 0, $_SESSION[adminid]);");

                    echo "<script>window.location='inv_packages.php?add_success';</script>";
                  }
                                ?>
                    <div class="col-lg-12">
                        <form method="post" id="frm" enctype="multipart/form-data">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Package Name</label>
                                    <input required type="text" autofocus name="pname" onkeyup="mySubmit();" onclick="mySubmit();" class="form-control unicase-form-control text-input" maxlength="900" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Price</label>
                                    <input required name="price" type="number" min="1" step="0.01" id="price" class="form-control unicase-form-control text-input"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Stocks</label>
                                    <input required type="number" min="1" id="stcks" name="stcks" class="form-control unicase-form-control text-input"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Image</label>
                                    <input required type="file" name="upload" class="form-control unicase-form-control text-input"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Supplier</label>
                                    <select id="suppliername" name="suppliername" class="form-control unicase-form-control text-input">
                                    <?php
                                    $sql_supplier = mysqli_query($con, "SELECT * FROM tbl_supplier;");
                                        while($row_supplier = mysqli_fetch_assoc($sql_supplier)){ ?>
                                        <option><?php echo $row_supplier['suppliername'];?></option><?php 
                                        }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size: 14px;font-weight: 400;">Description</label>
                                    <textarea required style="resize: none; height: 100px;" name="descript" class="form-control unicase-form-control text-input" maxlength="900"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group pull-right">
                                    <input type="hidden" id="sscode" name="code" value="">
                                    <a href="inv_packages.php" class="btn btn-danger btn-outline btn-sm"><i class="fa fa-ban"></i>&nbsp;&nbsp;Cancel</a>&nbsp;&nbsp;
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
