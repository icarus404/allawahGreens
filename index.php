<!Doctype>
<?php
session_start();
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
                        <li class="nav-item"><a href="index.php" class="nav-link p-3" id="active">HOME</a></li>
						<li class="nav-item"><a href="customer_login.php" class="nav-link p-3">LOGIN</a></li>
						<li class="nav-item"><a href="customer/my_account.php" class="nav-link p-3">My Account</a></li>
						<li class="nav-item"><a href="about_us" class="nav-link p-3">ABOUT US</a></li>
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
     <div class="main container-fluid mt-4">
        <div class="row">
                <div class="col-md-2">
                                     
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
                </div>


                      
          
            <?php cart(); ?>
            <div class="col-md-10">                  
                <div id="shopping_cart">
               
                    <span style="float: center; font-size: 18px; padding: 5px; line-height: 40px">

                    <?php
                            if(isset($_SESSION['customer_email']))
                            {
                               echo "<b>Welcome &emsp;</b>".$_SESSION['customer_email'];

                            }

                            else
                            {

                              echo "<b>Welcome Guest!</b>";
                            }
 


                    ?>


                        
                   &emsp;<i>Total Items:<?php total_items(); ?> </i> &emsp;<b>Total Price:</b><?php total_price(); ?>&emsp;
                  <a href="cart.php" style="color: yellow; text-decoration: none"><i>Go to Cart &emsp;</i></a>   <!--   &emsp;   used for creating space -->
                
             

                      <?php

                   if(!isset($_SESSION['customer_email']))
                   {
                     
                     echo "<a href='customer_login.php.php' style='color:red; text-decoration:none;'>Login</a>";
                   }

                   else
                   {
                      
                       echo "<a href='customer/logout.php' style='color:red; text-decoration:none'>Logout</a>";
                   }
                      ?>

                      </span>

                 </div>
            <!-- </div>  -->
    <!-- </div> -->
                    <div class="row">
                  
			              <div id="products_box">
			                  <?php
			                       getpro();
                           getcatpro();
                           getbrandpro();  
			                  ?>
			              </div>
                          
                    
                    </div>
    
     <!-- CONTENTS SECTION ENDS HERE -->
     
 
<!-- MAIN CONTAINER ENDS HERE-->

             </div>
       
            
<?php
	require_once("footer.php");
?>
    

</body>


</html>


