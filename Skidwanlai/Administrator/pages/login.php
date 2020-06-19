<!DOCTYPE html>
<html lang="en">
<?php   session_start();
        include "function/db_connect.php";
        include "includes/head.php";    ?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <img src="../dist/images/icon_logo.png" style="margin-top: 40px;" class="img-responsive center-block"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                    <?php
                    if (isset($_GET['adminemail'])){
                        $chk_login = mysqli_query($con, "SELECT * FROM tbl_admin WHERE adminemail='$_GET[adminemail]' AND adminpassword='$_GET[adminpassword]';");
                        if($row_login = mysqli_fetch_assoc($chk_login)) {

                            $_SESSION['adminid']=$row_login['adminid'];
                            $_SESSION['adminemail']=$_GET['adminemail'];
                            $_SESSION['adminpassword']=$_GET['adminpassword'];
                            $_SESSION['adminfname']=$row_login['adminfname'];
                            $_SESSION['adminlname']=$row_login['adminlname'];
                            $_SESSION['adminname']=$row_login['adminfname']." ".$row_login['adminfname'];
                            $_SESSION['admintype']=$row_login['admintype'];
                            $_SESSION['adminexp']=$row_login['adminexp'];
                            
                            mysqli_query($con, "INSERT INTO tbl_admin_act VALUES ($_SESSION[adminid], 'Logged in', NOW());");   ?>
                            <script>
                                window.location.href= "index.php";
                            </script><?php
                        }
                        else {  ?>
                            <div class="alert alert-danger alert-dismissable">
                                <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                                Invalid account
                            </div><?php
                        }
                    }   ?>
                        <form role="form" method='GET'>
                            <fieldset>
                                <div class="form-group">
                                    <input autofocus required class="form-control" placeholder="E-mail" name="adminemail" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input required class="form-control" placeholder="Password" name="adminpassword" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-outline btn-sm btn-block"><i class="fa fa-sign-in"></i>&emsp;Login</button>
                                <br>
                                <a href="../../main/index.php" class="btn btn-lg btn-danger btn-outline btn-sm btn-block"><i class="fa fa-chevron-left"></i>&emsp;Back to <b>Skidwanlai Computer World</b></a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
<?php session_commit();?>
</html>
