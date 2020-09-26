<!Doctype>
<?php
session_start();
include("functions/functions.php");

?>
<?php
	require_once("head/head.php");
?>

<style><?php include 'styles/style.css'; ?></style>

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
						<li class="nav-item"><a href="../index.php" class="nav-link p-3" >HOME</a></li>
						<li class="nav-item"><a href="../customer_login.php" class="nav-link p-3">LOGIN</a></li>
						<li class="nav-item"><a href="my_account.php" class="nav-link p-3" id="active">My Account</a></li>
						<li class="nav-item"><a href="../aboutUs.php" class="nav-link p-3">ABOUT US</a></li>
						<li class="nav-item"><a href="../contact_us.php" class="nav-link p-3">CONTACT US</a></li>
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
              <div class="content">      
			            <div id="sidebar">
			                <div id="sidebar_title">My Account</div>
			                 
			                    <ul id="cats">
                                   <?php
                                    $user=$_SESSION['customer_email'];

                                    $get_img="select * from customers where customer_email='$user'";
                                    $run_img=mysqli_query($con,$get_img);

                                    $row_img=mysqli_fetch_array($run_img);

                                    $c_image=$row_img['customer_image'];

                                    $c_name=$row_img['customer_name'];


                                    echo "<p style='text-align:center;'>  <img src='customer_images/$c_image' width='150' height='150' />";





                                     ?>

			                       <li><a href="my_account.php?my_orders">My Orders</a></li>
			                       <li><a href="my_account.php?edit_account">Edit Account</a></li>
			                       <li><a href="my_account.php?change_pass">Change Password</a></li>
			                       <li><a href="my_account.php?delete_account">Delete Account</a></li>       

			                     </ul>

			              
			            </div>
              </div>
            </div>               

            <div class="col-md-10"> 
                <div id="content_area">
                                        <?php cart(); ?>
                            <div id="shopping_cart">
                            
                                <span style="float: left; font-size: 18px; padding: 5px; line-height: 40px">

                                    <?php
                                            if(isset($_SESSION['customer_email']))
                                            {
                                            echo "<b>Welcome &emsp;</b>".$_SESSION['customer_email'];

                                            }

                                    
                


                                    ?>


                                        <?php

                                            if(!isset($_SESSION['customer_email']))
                                            {
                                                
                                                echo "<a href='../customer_login.php' style='color:red; text-decoration:none;'>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Login</a>";
                                            }

                                            else
                                            {
                                                
                                                echo "<a href='logout.php' style='color:red; text-decoration:none'>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Logout</a>";
                                            }
                                        ?>

                            
                                </span>

                            </div> 

                
                            <div id="products_box">
    
                                <?php
                                    if(!isset($_GET['my_orders']))
                                    {

                                        if(!isset($_GET['edit_account']))
                                        {
                                            if(!isset($_GET['change_pass']))
                                            {
                
                                            if(!isset($_GET['delete_account']))
                                                {
                                    
                                                    echo 	"<h2> Welcome  $c_name </h2><br>";

                                                    echo  "<b>You Can See Your orders progress by clicking this <a href='my_account.php?my_orders'>link</a></b>";
                                
                                                }

                                            }
                        
                                        }

                                    }


                                ?>



                                <?php

                                    if(isset($_GET['edit_account']))
                                    {
                                        include("edit_account.php");
                                    }

                                        if(isset($_GET['change_pass']))
                                    {
                                        include("change_pass.php");
                                    }

                                    if(isset($_GET['delete_account']))
                                    {
                                        include("delete_account.php");
                                    }


                                ?>
                            </div>	
                </div>
            </div>                       

     
        </div>
     <!-- CONTENTS SECTION ENDS HERE -->

        

    </div>
       

       



<!-- MAIN CONTAINER ENDS HERE-->


<?php
	require_once("footer/footer.php");
?>
    




</body>
</html>
