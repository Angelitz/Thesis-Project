<?php
include "db_connect.php";
session_start();
$email=$_POST['email'];
$check=mysqli_query($con, "SELECT * FROM tbl_acc WHERE accid!=$_SESSION[accid] AND email='$email';");
if($email==NULL){
  ?>
  <script>
    document.getElementById('submit').disabled=true;
    document.getElementById('email_feedback').style.display="none";
  </script>
  <?php
}
else {
  if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if(mysqli_fetch_assoc($check)){
      echo "<p id='email_feedback' style='color:#ff6c6c;'>Not Available</p>";
      ?>
      <script>
        document.getElementById('submit').disabled=true;
      </script>
      <?php
    }
    else {
      echo "<p id='email_feedback' style='color:#abd07e;'>Available</p>";
      ?>
      <script>
        document.getElementById('submit').disabled=false;
      </script>
      <?php
    }
      }
      else {
        echo "<p id='email_feedback' style='color:#ff6c6c;'>Invalid Email</p>";
        ?>
        <script>
          document.getElementById('submit').disabled=true;
        </script>
        <?php
      }


}
session_commit();
?>
