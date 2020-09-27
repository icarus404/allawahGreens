<!Doctype>
<?php
 
include("includes/db.php");
include("functions/functions.php");
?>

<?php
	require_once("head.php");
?>

<html>
<link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/mfstyle.css">
	
	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>


	
         
        <!-- HEADER ENDS HERE -->
        
       <!-- NAVIGATION BAR STARTS HERE --> 
       <nav class="navbar navbar-expand-sm p-0 sticky-top">
			<div class="row container-fluid">
			<!-- <div class="row"> -->
				<div class="col-md-8">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				  	<i class="fa fa-bars" style="color: white;"></i>
				</button>
				<div class="collapse navbar-collapse justify-content-left p-0" id="collapsibleNavbar">
				  	<ul class="navbar-nav">
                        <li class="nav-item"><a href="index.php" class="nav-link p-3" >HOME</a></li>
						<li class="nav-item"><a href="customer_login.php" class="nav-link p-3" id="active">LOGIN</a></li>
						<li class="nav-item"><a href="customer/my_account.php" class="nav-link p-3">My Account</a></li>
						<li class="nav-item"><a href="aboutUs.php" class="nav-link p-3">ABOUT US</a></li>
						<li class="nav-item"><a href="contact_us.php" class="nav-link p-3">CONTACT US</a></li>
                        </ul>
                        </div>
					</div>
          <div id="form">
		            <form method="get" action="results.php" enctype="multipart/form-data">
		                <input type="text" name="user_query" placeholder="Feel Free To Search" />
		                <input  type="submit" name="search" value="search" />
		            </form>
                </div>
				<!-- </div> -->
			</div>  
		</nav>
     	 <!-- NAVIGATION BAR ENDS HERE --> 



 
<main class="container-fluid">
      <div class="row mt-4">
        <div class="col-md-4 offset-md-4">
	
        <div id="login">
        <form  method="post" action="customer_login">

            
            <h4>Login to your account</h4>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email"  name="email" placeholder="you@example.com" class="form-control">
            </div>
            <div class="form-group">
              <label for="pass">Password</label>
              <input type="password"  name="pass" placeholder="minimum 8 characters" class="form-control">
            </div>
            <button class="btn btn-dark" type="submit" name="login">Login</button>
            
            <h3 style="float:center; padding:25px; al"><a href="customer_register.php">New? Register Here</a></h3>
             
        </form>
        </div>  
        </div>
      </div>
    </main>

      </body>
      </html>

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
               echo "<script> alert('You're Logged in Successfully..!') </script>";
                echo "<script>window.open('customer/my_account.php','_self')</script>";
            }
            else
            {
                 $_SESSION['customer_email']=$c_email;
               echo "<script> alert('You're Logged in Successfully..!') </script>";
                echo "<script>window.open('index.php','_self')</script>";
            }



       }

 



?>




  

