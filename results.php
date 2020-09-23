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
                              <li class="nav-item"><a href="index.php" class="nav-link p-3" id="active">HOME</a></li>
						<li class="nav-item"><a href="customer_login.php" class="nav-link p-3">LOGIN</a></li>
						<li class="nav-item"><a href="customer/my_account.php" class="nav-link p-3">My Account</a></li>
						<li class="nav-item"><a href="about_us" class="nav-link p-3">ABOUT US</a></li>
						<li class="nav-item"><a href="contact_us.php" class="nav-link p-3">CONTACT US</a></li>
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
             <div id=shopping_cart>
               
                  <span style="float: center; font-size: 18px; padding: 5px; line-height: 40px">
                  Welcome !&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                  Total Items: &emsp;Total Price: &emsp;</b>
                  <a href="cart.php" style="color: yellow; text-decoration:none">Go to Cart &emsp;&emsp;</a>
                
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
             
			              <div id="products_box">
			                <?php
			                     if(isset($_GET['search']))
			                     {
			                     	$search_query=$_GET['user_query'];
			                        
			                        echo '<link rel="stylesheet" href ="styles/style.css" media="all" />';
                                             
                                    	global $con;

                                      $get_pro="select * from products where product_keywords like '%$search_query%'  ";

                                      $run_pro=mysqli_query($con,$get_pro);

                                                 $count_keywords=mysqli_num_rows($run_pro);
                                                    if($count_keywords==0)
                                                     {


                                                          echo "<script>alert('SORRY ! No Product available for your Search')</script>";
                                                          echo "<script>   window.location.href ='index.php'</script>";
                                                        
                                                     }

                                                     else
                                                    { 	


                                                 while($row_pro=mysqli_fetch_array($run_pro))
                                                      {

                                                       $pro_id=$row_pro['product_id'];	
                                                       $pro_cat=$row_pro['product_cat'];
                                                       $pro_brand=$row_pro['product_brand'];
                                                       $pro_title=$row_pro['product_title'];
                                                       $pro_price=$row_pro['product_price'];
                                                       $pro_image=$row_pro['product_image'];
                                                       
                                                       echo "
                                                       
                                                          <div id='single_product'>
                                                                     <h3>$pro_title</h3>
                                                   
                                                                    <img src='admin_area/product_images/$pro_image' width='180' height='180' />

                                                                    <p> $ <b>$pro_price</b></p> 

                                                                    <a href='details.php?pro_id=$pro_id' style='float:left'>Details</a>
                                                                    <a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to cart</button></a>

                                                            </div>
                                                         ";

                                                    }            
                                      }
                                 }     
			                  ?>
			              </div>
          </div>


     
    </div>
     <!-- CONTENTS SECTION ENDS HERE -->

        

     <?php
	require_once("footer.php");
?>



</div>
<!-- MAIN CONTAINER ENDS HERE-->







</body>
</html>






