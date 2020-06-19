<!DOCTYPE html>
<html lang="en">
<?php   session_start();
        include "function/db_connect.php";
        include "includes/head.php";
        $crits=0;    ?>
<body>
    <div id="wrapper">
        <?php include "includes/navigation.php";?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Computer Packages</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dataTable_wrapper">
                            <div class="form-group pull-right" style="margin-top: -6.5%;">
                                <a href="inv_packages_package.php" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-plus"></i>&nbsp;&nbsp;Package</a>
                            </div>
                            <?php
                            if(isset($_GET['add_success'])){ ?>
                                <div class="alert alert-success alert-dismissable">
                                <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                                Package added successfully!
                                </div><?php
                            }
                            if(isset($_GET['mark_success'])){ ?>
                                <div class="alert alert-success alert-dismissable">
                                <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                                Package markdown updated successfully!
                                </div><?php
                            }
                            if(isset($_GET['res_success'])){ ?>
                                <div class="alert alert-success alert-dismissable">
                                <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                                Package restocked successfully!
                                </div><?php
                            }
                            ?>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th><i class="fa fa-long-arrow-down"></i></th>
                                <th>Qty</th>
                                <th>Restocked</th>
                                <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql_tbl_prod = mysqli_query($con, "SELECT * FROM tbl_prod WHERE categoryname='Desktop Package';");
                                if (mysqli_num_rows($sql_tbl_prod)<1){}

                                else {
                                $show=mysqli_query($con,"SELECT *, SUM(stock) AS tStock, max(daterestock) AS maxdaterestock FROM tbl_prod WHERE categoryname='Desktop Package' GROUP BY code ORDER BY maxdaterestock DESC;");
                                    $counter=1;
                                    while($fet=mysqli_fetch_array($show)){
                                echo "<tr>";
                                echo "<td date-toggle='tooltip' data-placement='right' title='Package Code: ".$fet['code']."'>".$counter."</td>";
                                echo "<td date-toggle='tooltip' data-placement='right' title='".$fet['name']."' style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'>".$fet['name']."</td>";
                                echo "<td date-toggle='tooltip' data-placement='right' title='".$fet['des']."' style='max-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'>".$fet['des']."</td>";
                ?>
                  <td>
                                <a class="btn btn-primary btn-block btn-sm btn-outline" href="<?php echo $fet['img'];?>" data-lightbox="a" data-title="<?php echo $fet['name'];?>">
                                    View
                                    <div class="zoom-overlay"></div>
                                </a>
                  </td>
                <?php
                //echo "<td><center><img src='".$fet['img']."' width='64' height='64' ></center></td>";

                                echo "<td>PHP ".number_format($fet['price'], 2)."</td>";
                ?>
                <td>
                    <?php echo $fet['markdown']*100 . " %" ;?>
                  </td>
                <?php
                    if ($fet['tStock']<=10){
                        ?>
                        <td style="background-color: #ff6c6c;"><?php echo $fet['tStock'];?></td>
                        <?php
                        $crits = 1;
                    }

                    else {
                        ?>
                        <td><?php echo $fet['tStock'];?></td>
                        <?php
                    }
                ?>
                <!--<td>
                  <?php //echo $fet['dateadded'];?>
                </td>-->
                <td>
                  <?php echo date('M d, Y', strtotime($fet['maxdaterestock']));?>
                </td>
                                <td style="text-align: center;">
                  <a href="inv_packages_more.php?id=<?php echo $fet['code']; ?>" target="_parent" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-th-list"></i>&nbsp;&nbsp;More</a>
                  <a href="inv_packages_markdown.php?id=<?php echo $fet['code']; ?>" target="_parent" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-arrow-down"></i></a>
                  <a href="inv_packages_restock.php?daterestock=<?php echo $fet['maxdaterestock'];?>&stock=<?php echo $fet['stock'];?>&code=<?php echo $fet['code'];?>" target="_parent" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-plus"></i></a>
                                </td>

                                <?php
                                echo "</tr>";
                                $counter++;
                            }
}

                        ?>
                    </tbody>
                            </table>
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
    <script type="text/javascript" src="../dist/js/lightbox.min.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <?php
    if ($crits==1){
        ?>
        <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                //responsive: true
                "order": [[ 6, "asc" ]]
        });
    });
    </script>
        <?php
    }
    else {
        ?>
            <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                //responsive: true
                "order": [[ 7, "desc" ]]
        });
    });
    </script>
        <?php
    }
    ?>

</body>
<?php session_commit();?>
</html>
