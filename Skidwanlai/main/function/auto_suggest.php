<?php
session_start();
include "db_connect.php";
	if (isset($_POST['query_autosuggest'])){
		$query_autosuggest = $_POST['query_autosuggest'];
		$get_tbl = mysqli_query($con, "SELECT * FROM tbl_prod WHERE name LIKE '%($query_autosuggest)%' OR categoryname LIKE '%($query_autosuggest)%' OR brandname LIKE '%($query_autosuggest)%' AND stock>0;");
		while($row_get_tbl = mysqli_fetch_assoc($get_tbl)){
			$array[]=$row_get_tbl['name'];
		}
	}
session_commit();
?>