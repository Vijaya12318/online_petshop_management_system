<?php
    include('includes/dbconn.php');
   $id = $_GET['id'];
   $sql = ("DELETE FROM tblorders_birds where id = '$id'") or die (mysqli_error());
   $result=mysqli_query($con, $sql);
   header("location:index.php");
?>