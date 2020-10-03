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
                        <li class="nav-item"><a href="index.php" class="nav-link p-3" >HOME</a></li>
						<li class="nav-item"><a href="customer_login.php" class="nav-link p-3">LOGIN</a></li>
						<li class="nav-item"><a href="customer/my_account.php" class="nav-link p-3">My Account</a></li>
						<li class="nav-item"><a href="cart.php" class="nav-link p-3">SHOPPING CART</a></li>
						<li class="nav-item"><a href="aboutUs" class="nav-link p-3" id="active">ABOUT US</a></li>
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
			

							<h1 class="page-title">About Us</h1>
							<div class="separator-2"></div>

							<div class="row">
								<div class="col-md-6">
									<p></p>
                                    <p>Allawah Greens is our family owned small local grocery store with all fresh produce. </p>
                                    <p>We have wide varieties of asian spices, fresh produce, ready to eat meals and daily needs item.</p>
                                    <p>We are open everyday from 9am - 10pm, drop by our store.</p>
									
									
                                    									
									<ul class="list-icons">
                                        <h3>At Allawah Greens</h3>
										<li> Customer satisfaction is our top priority.</li>
										<li> Your one stop shop</li>
										<li> Quality items and low price.</li>
										<li> convenient location, near Train station</li>
									</ul>
								</div>

								<aside class="sidebar col-md-6">
									<div class="side vertical-divider-left">
										<div class="block clearfix">
											<h3 class="title margin-top-clear">Support your Local Business</h3>
											<div class="img">
												<img src="images/Allawah1.jpg">
											</div>
										</div>
									</div>
								</aside>
							</div>
						</div>
					</div>
				</div>
			</section>

			<div class="section clearfix">
				<div class="container">
					<h2>Allawah Greens vision</h2>
					<div class="separator-2">Allawah Greens joined The Mission to help provide access to “Clean Water for All by 2030” on 24 May 2019. This Mission was initiated by the United Nations.</div>
					<p class="lead"> </p>
				</div>
            </div>
			
			<?php
	require_once("footer.php");
?>
   
        

        </div>
	</body>
</html>
