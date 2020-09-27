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
	
	<link rel="stylesheet" type="text/css" href="css/contactstyle.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
  	 
<body>
	
<nav class="navbar navbar-expand-sm p-0 sticky-top">
			<div class="row container-fluid">
			<!-- <div class="row"> -->
				<div class="col-md-8">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				  	<i class="fa fa-bars" style="color: white;"></i>
				</button>
				<div class="collapse navbar-collapse justify-content-left p-0" id="collapsibleNavbar">
				  	<ul class="navbar-nav">
						<li class="nav-item"><a href="index.php" class="nav-link p-3">HOME</a></li>
						<li class="nav-item"><a href="customer_login.php" class="nav-link p-3">Login</a></li>
						<li class="nav-item"><a href="customer/my_account.php" class="nav-link p-3">My Account</a></li>
						<li class="nav-item"><a href="aboutUs.php" class="nav-link p-3">ABOUT US</a></li>
						<li class="nav-item"><a href="contact_us.php" class="nav-link p-3" id="active">contact us</a></li>
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
		
		<main>
			<div class="contact-form">
			    <div class="contact-us">
			        <h2>Contact Us</h2>
			        <p>Swing by our Store, or leave us a message:</p>
			    </div>
			    <div class="row">
			        <div class="column">
							
						<div class="gmap_canvas">
							<iframe id="gmap_canvas"
								src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13234.702927179318!2d151.10538044999998!3d-33.9751732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sau!4v1576375936768!5m2!1sen!2sau" 
								height= "412px" width= "100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
							</iframe>
						</div>
			        </div>
			        <div class="column">
					<div id="contact">
			            <form action="contactUs.php" method="post">
			                <label for="name">Name</label>
			                <input type="text" id="name" name="name" placeholder="Your name..">
			                <label for="email">Email</label>
			                <input type="text" id="email" name="email" placeholder="Your email..">
			                <label for="message">Message</label>
			                <textarea id="message" name="message" placeholder="Write something.." style="height:160px"></textarea>
			                <input type="submit" name="submit" value="Submit">


			            </form>
					</div>	
			        </div>
			    </div>
			</div>
		</main>
		
			
		
	</div>	
</body>
<?php
	require_once("footer.php");
?>
</html>


<?php
include("includes/db.php");
if( isset($_POST['contact'] )){
  
    $name = $_POST['name'];
   $email = $_POST['email'];
    
    $message = $_POST['message'];
   
    $query = "INSERT INTO messages(m_name,m_email,m_message) VALUES ('$name'','$email','$message')";
	$run_query=mysqli_query($con,$query);
   
    if($run_query) {
		$response = "Message Sent. Thank You!";
		echo "<script>window.open('index.php','_self')</script>";
    }
    else{
		$response = "something went wrong";
		echo "<script>window.open('contact_us.php','_self')</script>";
    }
    
}






?>