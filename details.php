<!Doctype>
<?php
session_start();
include("functions/functions.php");

?>
<?php
	require_once("head.php");
?>
<link rel="stylesheet" type="text/css" href="css/reset.css">
 <link rel="stylesheet" type="text/css" href="css/mfstyle.css">
 <link rel="stylesheet" href ="styles/style.css" media="all" />	
	
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<html>
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
						<li class="nav-item"><a href="customer/my_account.php" class="nav-link p-3">MY ACCOUNT</a></li>
						<li class="nav-item"><a href="aboutUs.php" class="nav-link p-3">ABOUT US</a></li>
						<li class="nav-item"><a href="contact_us.php" class="nav-link p-3">CONTACT US</a></li>
                        </ul>
                        </div>
					</div>
					<div class="col-md-4">
						
		            <form method="get" action="results.php" enctype="multipart/form-data">
					<div class="row">
						<div class="form-group col-md-8">
						<input type="text" name="user_query" placeholder="Feel Free To Search" />
					</div>
					<div class="form-group col-md-4 searchbox">
						<input  type="submit"  name="search" value="search" />
					</div>
		            </form>
				
				<!-- <form>
					<input type="text" />
					<input type="submit" value="search">
</form> -->
					
				
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

                
             <div class="col-md-10">
                 <div id="content_area" >
                     <div id=shopping_cart>
               
                         <span style="float: left; font-size: 18px; padding: 5px; line-height: 40px">
                                Welcome !
                                <b style="color: yellow">Shopping Cart:</b>Total Items: Total Price: </b>
                                <a href="cart.php" style="color: yellow ">Go to Cart</a>

                        </span>

                     </div> 
             
			              
			                                  
			                     <?php   

                                     if(isset($_GET['pro_id']))
                                     {    

                                     	$product_id=$_GET['pro_id'];
                                          $get_pro="select * from products where  product_id=$product_id";

                                      $run_pro=mysqli_query($con,$get_pro);

                                                 while($row_pro=mysqli_fetch_array($run_pro))
                                                      {

                                                       $pro_id=$row_pro['product_id'];	
                                                       $pro_cat=$row_pro['product_cat'];
                                                       $pro_brand=$row_pro['product_brand'];
                                                       $pro_title=$row_pro['product_title'];
                                                       $pro_desc=$row_pro['product_desc'];
                                                       $pro_price=$row_pro['product_price'];
                                                       $pro_image=$row_pro['product_image'];
                                                       
                                                       echo "
                                                       
                                                          <div id='single_product'>
                                                                     <h3>$pro_title</h3>
                                                   
                                                                    <img src='admin_area/product_images/$pro_image' width='300' height='300' />

                                                                    <p> $ <b>$pro_price</b></p> 
                                                                    
                                                                    <a href='index.php' style='float:left'>Go Back</a>   
                                                                    <a href='index.php?add_cart=$pro_id'><button style='float:right'>Add to cart</button></a>
                                                                      
                                                                      <br></br>
                                                                       <p>$pro_desc</p>
                                                            </div>
                                                         ";

                                                    }
                                                }    
                                 ?>         
   
                 </div>

             </div>
                     <!-- CONTENTS SECTION ENDS HERE -->

        </div>
    </div>
     <?php
	require_once("footer.php");
?>





<!-- MAIN CONTAINER ENDS HERE-->







</body>
</html>
