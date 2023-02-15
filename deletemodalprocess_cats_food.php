<?php session_start();
include('includes/dbconn.php');
if(isset($_POST['delete'])){
	$id = $_POST['id'];
	$sql= ("DELETE from tblcnp_cats_food WHERE id = '$id'") or die (mysqli_error());
	$result=mysqli_query($con, $sql);
	header("location:update_cnp1_food.php");
	
	}?>