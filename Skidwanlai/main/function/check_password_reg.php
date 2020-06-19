<?php
session_start();
$password=$_POST['password'];
if($password==NULL){
  ?>
  <script>
    document.getElementById('submit').disabled=true;
    document.getElementById('password_feedback').style.display="none";
  </script>
  <?php
}
else {
  if (strlen($password)<=5){
    echo "<p id='password_feedback' style='color:#ff6c6c;'>Invalid Password</p>";
    ?>
    <script>
      document.getElementById('submit').disabled=true;
    </script>
    <?php
  }

  else if (strlen($password)>5 && strlen($password)<=6){
    echo "<p id='password_feedback' style='color:#ff6c6c;'>Too Short</p>";
    ?>
    <script>
      document.getElementById('submit').disabled=false;
    </script>
    <?php
  }

  else if (strlen($password)>6 && strlen($password)<=10){
    echo "<p id='password_feedback' style='color:#f1c40f;'>Good</p>";
    ?>
    <script>
      document.getElementById('submit').disabled=false;
    </script>
    <?php
  }

  else if (strlen($password)>10){
    echo "<p id='password_feedback' style='color:#abd07e;'>Strong</p>";
    ?>
    <script>
      document.getElementById('submit').disabled=false;
    </script>
    <?php
  }
}
session_commit();
?>
