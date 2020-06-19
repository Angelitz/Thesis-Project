<?php
	session_start();
	unset($_SESSION['accid']);
	unset($_SESSION["fname"]);
	unset($_SESSION["lname"]);
	unset($_SESSION["fullname"]);
	unset($_SESSION["email"]);
	unset($_SESSION["password"]);
	unset($_SESSION["address"]);
	unset($_SESSION["contact"]);
    unset($_SESSION["grand"]);
    unset($_SESSION["discpercent"]);
	session_commit();
	header ("Location: ../index.php");
?>