<?php
include("includes/db.php");
?>

?>
<?php
	require_once("head.php");
?>

<html>
<body>
<!-- <link rel="stylesheet" href ="css/reset.css"/> -->

	
         
        <!-- HEADER ENDS HERE -->
        
       <!-- NAVIGATION BAR STARTS HERE --> 
        <div class="menubar">
            <ul id="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="all_products.php">ALL PRODUCTS</a></li>
                <!-- <li><a href="customer/my_account.php">MY ACCOUNTS</a></li> -->
                <li><a href="customer_login.php">Login</a></li>
                <!-- <li><a href="cart.php">SHOPPING CART</a></li> -->
                <li><a href="contact_us.php">CONTACT US</a></li>
           </ul>

                <div id="form">
		            <form method="get" action="results.php" enctype="multipart/form-data">
		                <input type="text" name="user_query" placeholder="Feel Free To Search" />
		                <input  type="submit" name="search" value="search" />
		            </form>
                </div>


       </div>
     	 <!-- NAVIGATION BAR ENDS HERE --> 
         


<div id="customer_login">
 <!-- <link rel="stylesheet" href ="styles/style.css" media="all" />	     -->
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <main class="container-fluid">
      <div class="row mt-4">
        <div class="col-md-4 offset-md-4">

        <form  method="post" action="customer_login.php">

            <!-- <table width="700" align="center" >
            	<tr align="center">
            		 
             <td colspan="4"><br><br> <h2><i> Log In &emsp; </i> <b>OR</b> &emsp;<i>Register</i>  </h2></td>

            	</tr> 
                 <tr >
                 	<td align="right"><br><br><br><b>Email:</b></td>
                 	<td><br><br><br><input type="text" name="email" placeholder="Enter Your Email" required></td>
                 </tr>

                 <tr>
                 	<td align="right"><b>Password:</b></td>
                 	<td><input type="Password" name="pass"  placeholder="Enter Your Password" required></td>
                 </tr>    

                  <tr align="right">
                 	  <td ><a href="checkout.php?forgot_pass">Forgot Password</a></td>

                 

                 
                 	<td align="center"><input type="submit" name="login" value="Login"/></td>
                      </tr>



            </table> -->
            <h4>Login to your account</h4>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="you@example.com" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" placeholder="minimum 8 characters" class="form-control">
            </div>
            <button class="btn btn-dark" type="submit">Login</button>

            <h3 style="float:center; padding:25px; al"><a href="customer_register.php">New? Register Here</a></h3>
             
 </form>

 </div>
      </div>
    </main>

<?php

     if(isset($_POST['login']))
       {
          $c_email=$_POST['email'];
          $c_pass=$_POST['pass'];

          $sel_c="select * from customers where customer_pass='$c_pass' and customer_email='$c_email'";

           $run_c=mysqli_query($con,$sel_c);

           $check_customer=mysqli_num_rows($run_c);

           if($check_customer==0)
           {

            echo "<script>alert('Password or Email Incorrect, Try again..!') </script>";
            exit();
            }
            
              $ip=getIp();
             $sel_cart="select * from cart where ip_add='$ip'";

          $run_cart=mysqli_query($con,$sel_cart);
           
            $check_cart=mysqli_num_rows($run_cart); 

            if($check_customer>0 and $check_cart==0)
            {

                     $_SESSION['customer_email']=$c_email;
               echo "<script> alert('You Logged in Successfully..!') </script>";
                echo "<script>window.open('customer/my_account.php','_self')</script>";
            }
            else
            {
                 $_SESSION['customer_email']=$c_email;
               echo "<script> alert('You logged in Successfully..!') </script>";
                echo "<script>window.open('checkout.php','_self')</script>";
            }



       }

 



?>



</div>  



  

