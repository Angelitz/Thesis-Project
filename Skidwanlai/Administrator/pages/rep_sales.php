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
                        <h1 class="page-header">Sales Report</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                <form method="get">
                    <div class="col-lg-12">
                        <div class="form-group">
                        <label class="info-title" for="exampleInputEmail1">Select Category <span style="color: red;">*</span></label>
                        <select required class="form-control unicase-form-control text-input" name="category">
                        <option value="0">Daily</option>
                        <!--<option value="1">Weekly</option>-->
                        <option value="2">Monthly</option>
                        <option value="3">Annual</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn-upper btn btn-primary btn-outline btn-sm pull-right">Next&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></button>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </form>
                </div>
                <!-- /.row -->
                
                <?php
                if (isset($_GET["category"])){
                    switch ($_GET["category"]){
                        case 0: ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="info-title">Generate Daily Sales Report</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <form method="get" action="PDF/pdf_sales_daily.php" target="_blank">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label class="info-title">Select starting date <span style="color: red;">*</span></label>
                                        <input type="date" name="date_from" required class="form-control unicase-form-control text-input"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label class="info-title">Select end date <span style="color: red;">*</span></label>
                                        <input type="date" name="date_to" required class="form-control unicase-form-control text-input"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn-upper btn btn-primary btn-outline btn-sm pull-right"><i class="fa fa-eye"></i>&nbsp;&nbsp;View Report</button>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-12 -->
                                </form>
                            </div>
                            <!-- /.row -->
                        <?php
                        break;
                        case 1: echo "Weekly";
                        break;
                        case 2: ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="info-title">Generate Monthly Sales Report</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <form method="get" action="PDF/pdf_sales_monthly.php" target="_blank">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label class="info-title">Select starting date <span style="color: red;">*</span></label>
                                        <input type="date" name="date_from" required class="form-control unicase-form-control text-input"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label class="info-title">Select end date <span style="color: red;">*</span></label>
                                        <input type="date" name="date_to" required class="form-control unicase-form-control text-input"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn-upper btn btn-primary btn-outline btn-sm pull-right"><i class="fa fa-eye"></i>&nbsp;&nbsp;View Report</button>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-12 -->
                                </form>
                            </div>
                            <!-- /.row -->
                        <?php
                        break;
                        case 3: ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="info-title">Generate Annual Sales Report</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <form method="get" action="PDF/pdf_sales_annual.php" target="_blank">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label class="info-title">Select starting date <span style="color: red;">*</span></label>

                                        <input type="date" name="date_from" required class="form-control unicase-form-control text-input"/>
                                        
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label class="info-title">Select end date <span style="color: red;">*</span></label>
                                        <input type="date" name="date_to" required class="form-control unicase-form-control text-input"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn-upper btn btn-primary btn-outline btn-sm pull-right"><i class="fa fa-eye"></i>&nbsp;&nbsp;View Report</button>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-12 -->
                                </form>
                            </div>
                            <!-- /.row -->
                        <?php
                        break;
                    }
                }?>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dataTable_wrapper">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                <th>Product</th>
                                <th>Sold</th>
                                <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql_tbl_prod = mysqli_query($con, "SELECT * FROM tbl_prod;");
                                if (mysqli_num_rows($sql_tbl_prod)<1){}

                                else {
                                $show=mysqli_query($con,"SELECT *, SUM(qty) AS tStock1, SUM(priceMD) AS tPrice FROM tbl_order WHERE orderstatus='Delivered' OR method='Paypal' GROUP BY code;");
                                    
                                    while($fet=mysqli_fetch_array($show)){
                                    echo "<tr>";
                                    
                                    echo "<td date-toggle='tooltip' data-placement='right' title='".$fet['name']."' style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'>".$fet['name']."</td>";
                                    echo "<td>".$fet['tStock1']."</td>";
                                    echo "<td>PHP ".number_format($fet['tPrice'], 2)."</td>";
                ?>
                
                
                
                                

                                <?php
                                echo "</tr>";
                                
                            }
}

                        ?>
                    </tbody>
                            </table>
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
