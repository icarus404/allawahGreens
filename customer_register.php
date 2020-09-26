
  <!Doctype>
<?php
  session_start();
include("functions/functions.php");
include("includes/db.php");
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
                        <li class="nav-item"><a href="index.php" class="nav-link p-3" id="active">HOME</a></li>
						<li class="nav-item"><a href="customer_login.php" class="nav-link p-3">LOGIN</a></li>
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
         
     		
     
     <!-- CONTENTS SECTION START HERE -->
              <div class="content">
                                     
			            <div id="sidebar">
			                <div id="sidebar_title">Categories</div>
			                 
			                    <ul id="cats">
			                             <?php  getCats();  ?> 

			                     </ul>

			                <div id="sidebar_title">Brands</div>
			                      <ul id="cats">
			                             <?php  getBrands();  ?>

			                      </ul> 
			                </div>




          <div id="content_area">
                                     <?php cart(); ?>
             <div id=shopping_cart>
               
                  <span style="float: center; font-size: 18px; padding: 5px; line-height: 40px">
                        <b style="font-size: 25px;">   Welcome ! &emsp; &emsp; &emsp; &emsp;  </b>
                  <b style="color: yellow">Shopping Cart: </b> &emsp;<i>Total Items:<?php total_items(); ?> </i> &emsp;<b>Total Price:</b><?php total_price(); ?>&emsp;
                  <a href="cart.php" style="color: yellow; text-decoration: none "><i>Go to Cart</i></a>
                                        <!--   &emsp;   used for creating space -->
                </span>

             </div> 

      </div>


   </div>
     <!-- CONTENTS SECTION ENDS HERE -->
           
       <div id="register">
            <form action="customer_register.php" method="post" enctype="multipart/form-data">

            	<table  align="center" width="750">
            		<tr><br>
            			   <td colspan="2" align="center"  style="color: red"><h2>Create an Account</h2></td>		   
            		</tr>


            		<tr>

            			<td align="right"><br>Name: </td>
            			<td ><br><input type="text"  name="c_name" required></td>
            		</tr>

            		<tr>
            			<td align="right">Email:</td>
            			<td><input type="text" name="c_email" required></td>
            		</tr>

            		<tr>
            			<td align="right">Password:</td>
            			<td><input type="Password" name="c_pass" required></td>
            		</tr>

            		<tr>
            			<td align="right">Image:</td>
            			<td><input type="file" name="c_image" required></td>
            		</tr>

            		

            		<tr>
            			<td align="right">City:</td>
            			<td><input type="text" name="c_city"></td>
            		</tr>

            		<tr>
            			<td align="right">Contact No:</td>
            			<td><input type="text" name="c_contact" required></td>
            		</tr>
            		
            		<tr>
            			<td align="right">Address:</td>
                         <td>
                         	   <textarea cols="20" rows="1" name="c_address"></textarea>
                         </td>
            		</tr>
                   
                   <tr align="center">
                   	<td colspan="2"><input type="submit" name="register" value="Create Account"></td>
                   </tr>



            	</table>
                           	


            </form>
  </div>


 

</div>
<!-- MAIN CONTAINER ENDS HERE-->







</body>
</html>


<?php

 if(isset($_POST['register']))
     {
         $ip=getIp();

         $c_name=$_POST['c_name'];
         $c_email=$_POST['c_email'];
         $c_pass=$_POST['c_pass'];
         $c_image=$_FILES['c_image']['name'];
         $c_image_tmp=$_FILES['c_image']['tmp_name'];
        //  $c_country=$_POST['c_country'];
         $c_city=$_POST['c_city'];
         $c_contact=$_POST['c_contact'];
         $c_address=$_POST['c_address'];

        move_uploaded_file($c_image_tmp, "customer/customer_images/$c_image");

           $insert_c="insert into customers (customer_ip,customer_name,customer_email,customer_pass,customer_city,customer_contact,customer_address,customer_image) 
             values('$ip','$c_name','$c_email','$c_pass','$c_city','$c_contact','$c_address','$c_image')";

          $run_c=mysqli_query($con,$insert_c);

          $sel_cart="select * from cart where ip_add='$ip'";

          $run_cart=mysqli_query($con,$sel_cart);
           
            $check_cart=mysqli_num_rows($run_cart);

            if($check_cart==0)
            {
                $_SESSION['customer_email']=$c_email;
               echo "<script> alert('Account Created Successfully..!') </script>";
                echo "<script>window.open('customer/my_account.php','_self')</script>";
            }
            else
            {
               $_SESSION['customer_email']=$c_email;
               echo "<script> alert('Account Created Successfully..!') </script>";
                echo "<script>window.open('checkout.php','_self')</script>";   
            }




     }






?>


