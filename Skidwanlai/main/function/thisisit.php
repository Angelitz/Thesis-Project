<?php
  session_start();
  include "db_connect.php";
  if(isset($_GET["activationcode"])){
    $activationcode = $_GET['activationcode'];
    $query_activate = mysqli_query($con, "SELECT * FROM tbl_acc WHERE activationcode='$activationcode';");
    if (mysqli_num_rows($query_activate)>0){
      mysqli_query($con, "UPDATE tbl_acc SET status='Active' WHERE activationcode='$activationcode';");
      $query_login=mysqli_query($con, "SELECT * FROM tbl_acc WHERE activationcode='$activationcode' AND status='Active';");
      if(mysqli_num_rows($query_login)>0){
        while ($row_login = mysqli_fetch_assoc($query_login)){
          $_SESSION["accid"]=$row_login["accid"];
          $_SESSION["fname"]=$row_login["fname"];
          $_SESSION["lname"]=$row_login["lname"];
          $_SESSION["fullname"]=$row_login["fname"]." ".$row_login["lname"];
          $_SESSION["email"]=$row_login["email"];
          $_SESSION["password"]=$row_login["pw"];
          $_SESSION["address"]=$row_login["ad"];
          $_SESSION["contact"]=$row_login["con"];
          header("Location: ../index.php");
        }
      }
    }
  }
  session_commit();
?>