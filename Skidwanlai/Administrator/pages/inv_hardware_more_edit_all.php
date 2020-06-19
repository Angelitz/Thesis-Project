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
                        <h1 class="page-header"><a href="inv_hardware.php" class="page-header-link">Computer Hardware</a> <small><a href="inv_hardware_more.php?id=<?php echo $_GET['code'];?>" class="page-header-link-2">More</a> <small>Edit All</small></small></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group pull-right" style="margin-top: -6.5%;">
                            <a href="inv_hardware_product.php" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-plus"></i>&nbsp;&nbsp;Product</a>&nbsp;&nbsp;
                            <a href="inv_hardware_category.php" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-plus"></i>&nbsp;&nbsp;Category</a>&nbsp;&nbsp;
                            <a href="inv_hardware_brand.php" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-plus"></i>&nbsp;&nbsp;Brand</a>&nbsp;&nbsp;
                            <a href="inv_hardware_supplier.php" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-plus"></i>&nbsp;&nbsp;Supplier</a>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <?php
                        $id=$_GET['code'];
                        $show=mysqli_query($con,"SELECT * FROM tbl_prod WHERE code='$id' ");
                        $sh=mysqli_fetch_array($show);

                        if(isset($_POST['up'])){
                            $pcode=$sh['code'];
                            $pname=$_POST['pname'];
                            $price=$_POST['price'];
                            $categoryname=$_POST['categoryname'];
                            $brandname=$_POST['brandname'];
                            $des=$_POST['des'];
                            $dir="products/";
                            $file=$dir.basename($_FILES["upload"]["name"]);
                            move_uploaded_file($_FILES["upload"]["tmp_name"], $file);

                            if (empty($_FILES['upload']['name'])) {
                              $file=$sh['img'];
                              mysqli_query($con,"UPDATE tbl_prod SET categoryname='$categoryname', name='$pname', des='$des', brandname='$brandname', img='$file', price='$price', adminid=$_SESSION[adminid] WHERE code='$pcode'");
                              echo "<script>window.location='inv_hardware_more.php?id=".$_GET['code']."&edit_success';</script>";
                            }

                            else{
                              $update=mysqli_query($con,"UPDATE tbl_prod SET categoryname='$categoryname', name='$pname', des='$des', brandname='$brandname',img='$file', price='$price', adminid=$_SESSION[adminid] WHERE code='$pcode'");
                              echo "<script>window.location='inv_hardware_more.php?id=".$_GET['code']."&edit_success';</script>";
                            }
                        }?>
                    <form method="post" id="frm" enctype="multipart/form-data">
                        <div class="col-lg-6">
                            <div class="form-group" >
                            <label style="font-size: 14px;font-weight: 400;">Product Code</label>
                            <input type="text" id="code" name="code" disabled class="form-control unicase-form-control text-input" value="<?php echo $sh['code']; ?>"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" >
                            <label style="font-size: 14px;font-weight: 400;">Product Name</label>
                            <input type="text" maxlength="900" required autofocus id="pname" name="pname" class="form-control unicase-form-control text-input" value="<?php echo $sh['name']; ?>"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" >
                            <label style="font-size: 14px;font-weight: 400;">Price</label>
                            <input required name="price" id="price" min="1" type="number" step="0.01" class="form-control unicase-form-control text-input" value="<?php echo $sh['price']; ?>" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" >
                            <label style="font-size: 14px;font-weight: 400;">Category</label>
                            <select value="<?php echo $sh['categoryname'];?>" id="categoryname" name="categoryname" class="form-control unicase-form-control text-input">
                            <option style="display:none;"><?php echo $sh['categoryname'];?></option>
                            <?php
                                $query_select_category = mysqli_query($con, "SELECT * FROM tbl_category;");
                                if ($query_select_category){
                                while ($row_category = mysqli_fetch_assoc($query_select_category)){ ?>
                                    <option><?php echo $row_category['categoryname'];?></option><?php
                                }
                                }?>
                            </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" >
                            <label style="font-size: 14px;font-weight: 400;">Image</label>
                            <input type="file" id="file" name="upload" class="form-control unicase-form-control text-input"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" >
                            <label style="font-size: 14px;font-weight: 400;">Brand</label>
                            <select value="<?php echo $sh['brandname'];?>" id="brandname" name="brandname" class="form-control unicase-form-control text-input">
                            <option style="display:none;"><?php echo $sh['brandname'];?></option>
                        <?php
                            $query_select_brand = mysqli_query($con, "SELECT * FROM tbl_brand;");
                            if ($query_select_brand){
                            while ($row_brand = mysqli_fetch_assoc($query_select_brand)){ ?>
                            <option><?php echo $row_brand['brandname'];?></option><?php
                            }
                            }?>
                            </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" >
                            <label style="font-size: 14px;font-weight: 400;">Description</label>
                            <textarea required style="resize: none; height: 100px;" id="des" name="des"  form="frm" class="form-control unicase-form-control text-input" maxlength="900"><?php echo $sh['des']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group pull-right">
                                <a class="btn btn-danger btn-outline btn-sm" href="inv_hardware_more.php?id=<?php echo $_GET['code'];?>"><i class="fa fa-ban"></i>&nbsp;&nbsp;Cancel</a>&nbsp;&nbsp;
                                <button type="submit" name="up" class="btn btn-primary btn-outline btn-sm" value="Update"><i class="fa fa-save"></i>&nbsp;&nbsp;Update
                                </button>
                            </div>
                        </div>
                    </form>
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
