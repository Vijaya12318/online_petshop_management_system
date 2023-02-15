
               <?php include('includes/dbconn.php');
			   $stat = $_POST['filter'];
			   $sql= ("SELECT tblcnp_dogs.*,tblorders_dogs.*
			   								FROM tblorders_dogs LEFT JOIN 
											tblcnp_dogs ON tblorders_dogs.cnpoid = tblcnp_dogs.id WHERE tblorders_dogs.ostatus = '$stat' order by tblorders_dogs.id LIMIT 0,30") or die (mysqli_error());
         $result=mysqli_query($con, $sql);
				if(mysqli_num_rows($result)>0){
					while($row = mysqli_fetch_assoc($result)){?>
               <tr class="success" style="cursor:pointer;">
               		<td style="text-align:center;"><a href="admin_reject_completed_dogs.php?id=<?php echo $row['id']?>" class="btn btn-default"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
                <td style="text-align:center;"><?php echo $row['cname'];?></td>
                <td style="text-align:center;"><?php echo $row['name'];?></td>
                <td style="text-align:center;"><?php echo $row['address'];?></td>
                <td style="text-align:center;"><?php echo $row['contact'];?></td>
                <td style="text-align:center;"><?php echo $row['timestamp'];?></td>
               
               
               </tr>
                 
               <?php }}else {echo'<strong style="color:red">No '.$stat.' record from database</strong>';}?>
        