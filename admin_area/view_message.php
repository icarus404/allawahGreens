<?php

if(!isset($_SESSION['user_email']))
{

echo "<script> window.open('login.php?not_admin=You are not a admin !','_self') </script>";


}

else
{




?>




   <table width="100%"  align="center"  bgcolor="skyblue">
   	
<tr align="center">
	<td colspan="6"> <h2>View All Messages Here</h2></td>
</tr>


<tr align="center" bgcolor="skyblue">

	    <th><br>S.N</th>
	    <th><br>Name</th>
	     <th><br>Email</th>
	      <th><br>Date</th>
           <th><br>Message</th>
	        <th><br>Delete</th>
	         	         
</tr>

  <?php

include("includes/db.php");

$get_m="select * from messages";

$run_m=mysqli_query($con,$get_m);

$i=0;

while($row_m=mysqli_fetch_array($run_m))
{
  $m_id=$row_m['m_id']; 	
  $m_name=$row_m['m_name'];
  $m_email=$row_m['m_email'];
  $m_date=$row_m['m_date'];
  $m_message=$row_m['m_message'];
  $i++;

?>
<tr align="center">
	
    <td><br><?php echo $i;  ?></td>
	<td><br><?php echo $m_name;  ?></td>
	<td><br><?php echo $m_email;  ?></td>
    <td><br><?php echo $m_date;  ?></td>
	<td><br><?php echo $m_message;  ?></td>
	<td><br><a href="delete_m.php?delete_m=<?php echo $m_id; ?> ">Delete</a></td>

</tr>


<?php } ?>




   </table>
  


<?php } ?>