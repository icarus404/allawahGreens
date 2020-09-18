<!Doctype>
<?php
session_start();
include("functions/functions.php");

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
                     
                     echo "<a href='checkout.php' style='color:red; text-decoration:none;'>Login</a>";
                   }

                   else
                   {
                      
                       echo "<a href='logout.php' style='color:red; text-decoration:none'>Logout</a>";
                   }
               ?>

             


                </span>

             </div>
            <!-- </div>  -->
    <!-- </div> -->
                  <!-- <div class="row"> -->
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
<?php
	require_once("footer.php");
?>

</div>


</body>
</html>


