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
                                    <p>Ghumphir is a small tour company that provides Reliable and cheap tour services to Nepalese here in Sydney city. </p>
                                    <p>We provide Nepali speaking tour guides for each tour targeting Non- english speaking and parents/relatives of Nepalese here in Sydney.</p>
                                    <p>Currently we have Kumar basnet for our Sydney city tour,Rabin Tamang our special guide for canberra tour,Muna Rai for Beautiful Blue Mountains and James Karki for our NewCastle tour.</p>
									
									
                                    									
									<ul class="list-icons">
                                        <h3>At Ghumphir </h3>
										<li> Customer satisfaction is our top priority.</li>
										<li> With easy site layout, Browsing had never been easier.</li>
										<li> We gurantee quality service and low price.</li>
										<li> We value our customers, we are ready to assist you.</li>
									</ul>
								</div>

								<aside class="sidebar col-md-6">
									<div class="side vertical-divider-left">
										<div class="block clearfix">
											<h3 class="title margin-top-clear">Be part of us</h3>
											<div class="img">
												<img src="images/places/logo.png">
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
					<h2>Ghumphir Vision</h2>
					<div class="separator-2"></div>
					<p class="lead">All of our team members are continuously working to assist our customers and although we are currently targeting the Nepali community in paticular, we are planning to reach to other broader communities. We are currently working on getting some Hindi speaking Tour Guides to provide services large Indian community here and in near future we will continue to reach for other international communities here as well.  </p>
				</div>
            </div>
			
			<?php
	require_once("footer.php");
?>
   
        

        </div>
	</body>
</html>
