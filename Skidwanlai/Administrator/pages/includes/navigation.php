n<?php   include "function/auto_accept.php"; ?>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
            <img src="../dist/images/icon_logo.png" style="height: 67px;">
        </a>
    </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-top-links navbar-right">
        <div class="cnt-account">
            <ul class="list-unstyled">
                <?php
                if (isset($_SESSION["adminlname"])){ ?>
                    <li><a href="acc_admin_profile.php"><i class="icon fa fa-user">&nbsp;</i>Welcome, <?php echo $_SESSION['adminfname']." ".$_SESSION['adminlname'];?></a>
                        </li><?php }
                        else { ?>
                        <script>window.location="login.php";</script>
                        <?php } ?>      
                        <li><a href="function/logout.php" style="border-left: 1px solid #1fda9a;"><i class="icon fa fa-sign-out"></i>&nbsp;Logout</a></li>
                    </ul>
                </div>
            </ul>
            <!-- /.navbar-top-links -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Order Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php" style="display:inline-block;"><i class="fa fa-download fa-fw"></i> Incoming Requests</a>
                                    <?php
                                        $count_in = mysqli_query($con, "SELECT * FROM tbl_order WHERE orderstatus='Processing' GROUP BY invoice;");
                                            if (mysqli_num_rows($count_in)>0){
                                            ?>
                                            &nbsp;
                                            <div class="pull-right" style="color: white; padding: 5px 9px 5px 9px; border-radius: 50%; background-color:#d9534f; display:inline-block;margin-right: 15px; margin-top: 2%;">
                                                <?php
                                                echo mysqli_num_rows($count_in);
                                                ?>
                                            </div>
                                            <?php
                                            } ?>
                                </li>
                                <li>
                                    <a href="delivery.php" style="display:inline-block;"><i class="fa fa-check-square-o fa-fw"></i> Ready for Delivery</a>
                                    <?php
                                        $count_red = mysqli_query($con, "SELECT * FROM tbl_order WHERE orderstatus='Ready For Delivery' GROUP BY invoice;");
                                            if (mysqli_num_rows($count_red)>0){
                                            ?>
                                            &nbsp;
                                            <div class="pull-right" style="color: white; padding: 5px 9px 5px 9px; border-radius: 50%; background-color:#f0ad4e; display:inline-block;margin-right: 15px; margin-top: 2%;">
                                                <?php
                                                echo mysqli_num_rows($count_red);
                                                ?>
                                            </div>
                                            <?php
                                            } ?>
                                </li>
                                <li>
                                    <a href="delivered.php" style="display:inline-block;"><i class="fa fa-truck fa-fw"></i> Delivered</a>
                                    <?php
                                        $count_del = mysqli_query($con, "SELECT * FROM tbl_order WHERE orderstatus='Delivered' GROUP BY invoice;");
                                            if (mysqli_num_rows($count_del)>0){
                                            ?>
                                            &nbsp;
                                            <div class="pull-right" style="color: white; padding: 5px 9px 5px 9px; border-radius: 50%; background-color:#5cb85c; display:inline-block;margin-right: 15px; margin-top: 2%;">
                                                <?php
                                                echo mysqli_num_rows($count_del);
                                                ?>
                                            </div>
                                            <?php
                                            } ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-qrcode fa-fw"></i> Product Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="inv_hardware.php" style="display:inline-block;"><i class="fa fa-cogs fa-fw"></i> Computer Hardware</a>
                                    <?php
                                        $count_h_crits = mysqli_query($con, "SELECT SUM(stock) AS tStock FROM tbl_prod WHERE categoryname!='Desktop Package' GROUP BY code;");
                                        $nav_h_crits=0;
                                        while ($row_h_crits = mysqli_fetch_assoc($count_h_crits)){
                                            if ($row_h_crits["tStock"]<=10){
                                                $nav_h_crits+=1;
                                            }
                                        }
                                        if ($nav_h_crits>0){
                                            ?>
                                            &nbsp;
                                            <div class="pull-right" style="color: white; padding: 5px 9px 5px 9px; border-radius: 50%; background-color:#d9534f; display:inline-block;margin-right: 10px; margin-top: 2%;">
                                                <?php
                                                echo $nav_h_crits;
                                                ?>
                                            </div>
                                            <?php
                                        }
                                    ?>
                                </li>
                                <li>
                                    <a href="inv_packages.php" style="display:inline-block;"><i class="fa fa-desktop fa-fw"></i> Computer Packages</a>
                                    <?php
                                        $count_d_crits = mysqli_query($con, "SELECT SUM(stock) AS tStock FROM tbl_prod WHERE categoryname='Desktop Package' GROUP BY code;");
                                        $nav_d_crits=0;
                                        while ($row_d_crits = mysqli_fetch_assoc($count_d_crits)){
                                            if ($row_d_crits["tStock"]<=10){
                                                $nav_d_crits+=1;
                                            }
                                        }
                                        if ($nav_d_crits>0){
                                            ?>
                                            &nbsp;
                                            <div class="pull-right" style="color: white; padding: 5px 9px 5px 9px; border-radius: 50%; background-color:#d9534f; display:inline-block;margin-right: 10px; margin-top: 2%;">
                                                <?php
                                                echo $nav_d_crits;
                                                ?>
                                            </div>
                                            <?php
                                        }
                                    ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Reports<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="rep_inventory.php"><i class="fa fa-database fa-fw"></i> Inventory Status</a>
                                </li>
                                <li>
                                    <a href="rep_sales.php"><i class="fa fa-flag-checkered fa-fw"></i> Sales Report</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Accounts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="acc_user.php"><i class="fa fa-user fa-fw"></i> User Accounts</a>
                                </li>
                                <li>
                                    <a href="acc_admin.php"><i class="fa fa-user-md fa-fw"></i> Administrator</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Settings<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="set_gen_info.php"><i class="fa fa-info-circle fa-fw"></i> General Information</a>
                                </li>
                                <li>
                                    <a href="set_ship_det.php"><i class="fa fa-money fa-fw"></i> Shipping Fees / VAT</a>
                                </li>
                                <li>
                                    <a href="set_disc_list.php"><i class="fa fa-arrow-circle-o-down fa-fw"></i> Customer Discount List</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>