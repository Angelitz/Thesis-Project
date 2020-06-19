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
                        <h1 class="page-header">Inventory Status</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                <form action="PDF/pdf_inventory.php" method="get" target="_blank">
                    <div class="col-lg-12">
                        <div class="form-group">
                        <label class="info-title" for="exampleInputEmail1">Select Category <span style="color: red;">*</span></label>
                        <select required class="form-control unicase-form-control text-input" name="category">
                        <option value="all">All Products</option>
                        <?php
                          $sql_category = mysqli_query($con, "SELECT categoryname FROM tbl_prod GROUP BY categoryname ORDER BY categoryname ASC;");
                          while ($row_category = mysqli_fetch_assoc($sql_category)){
                            ?>
                              <option value="<?php echo $row_category['categoryname'];?>"><?php echo $row_category['categoryname'];?></option>
                            <?php  
                          }
                        ?>
                        </select>
                        
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <input type="hidden" name="option1" value="inventory">
                          <button type="submit" class="btn-upper btn btn-primary btn-outline btn-sm"><i class="fa fa-eye"></i>&nbsp;&nbsp;View Status</button>
                        </div>
                      </div>
                    <!-- /.col-lg-12 -->
                    </form>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dataTable_wrapper">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Price</th>
                                <th>Beg. Qty</th>
                                <th>Rem. Qty</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql_tbl_prod = mysqli_query($con, "SELECT * FROM tbl_prod;");
                                if (mysqli_num_rows($sql_tbl_prod)<1){}

                                else {
                                $show=mysqli_query($con,"SELECT *, SUM(tbl_prod.stock) AS tStock1 FROM tbl_prod GROUP BY code;");
                                    
                                    while($fet=mysqli_fetch_array($show)){
                                    echo "<tr>";
                                    
                                    echo "<td date-toggle='tooltip' data-placement='right' title='".$fet['name']."' style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'>".$fet['name']."</td>";
                                    echo "<td date-toggle='tooltip' data-placement='right' title='".$fet['categoryname']."' style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'>".$fet['categoryname']."</td>";
                                    echo "<td date-toggle='tooltip' data-placement='right' title='".$fet['brandname']."' style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'>".$fet['brandname']."</td>";
                                    //echo "<td date-toggle='tooltip' data-placement='right' title='".$fet['des']."' style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'>".$fet['des']."</td>";
                                    
                //echo "<td><center><img src='".$fet['img']."' width='64' height='64' ></center></td>";

                                echo "<td>PHP ".number_format($fet['price'], 2)."</td>";
                ?>
                <td>
                    <?php 
                        $bQty = $fet['tStock1'];
                        $qty1 = mysqli_query($con, "SELECT SUM(tbl_order.qty) AS tStock2 FROM tbl_order WHERE tbl_order.code='$fet[code]' GROUP BY tbl_order.code;");
                        
                        if (mysqli_num_rows($qty1)>0){
                            $row_qty1 = mysqli_fetch_assoc($qty1);
                            $bQty+=$row_qty1['tStock2'];
                        }

                        $qty2 = mysqli_query($con, "SELECT SUM(tbl_basket.qty) AS tStock3 FROM tbl_basket WHERE tbl_basket.code='$fet[code]' GROUP BY tbl_basket.code;");
                        
                        if (mysqli_num_rows($qty2)>0){
                            $row_qty2 = mysqli_fetch_assoc($qty2);
                            $bQty+=$row_qty2['tStock3'];
                        }

                    ?>
                    <?php echo $bQty;?>
                  </td>
                <td><?php echo $fet['tStock1'];?></td>
                
                
                
                                

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
