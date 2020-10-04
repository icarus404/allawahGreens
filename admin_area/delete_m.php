<?php
session_start();
if(!isset($_SESSION['user_email']))
{

echo "<script> window.open('login.php?not_admin=You are not a admin !','_self') </script>";


}

else
{


?>




<?php 

  include("includes/db.php");
   
    if(isset($_GET['delete_m']))
     {

      $delete_id=$_GET['delete_m'];

     $delete_m="delete from messages where m_id='$delete_id'";

     $run_delete=mysqli_query($con,$delete_m) or die("Query not working");
     
     if($run_delete)
     {
     	echo "<script>alert('A message has been deleted..!')</script>";
     	echo "<script>window.open('index.php?view_message','_self')</script>";
     }


     }



?>

  
  


  <?php } ?>

