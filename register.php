 


 
<?php 
session_start();
 if(isset($_SESSION["id"]))
  {
	   header("location:dashboard.php");
  }


    include("dbconfig.php");
?>


<?php
if(isset($_POST['reg_user']))
{
	
	$uname = strip_tags($_POST['name']);
	$umobile = strip_tags($_POST['mobile']);
	$uemail = strip_tags($_POST['email']);
    $upassword = strip_tags($_POST['password']);
	
	
      $sql=mysqli_query($con,"select * from users where email='$uemail' or mobile='$umobile'");
      if(mysqli_num_rows($sql))
      {
		    echo '<script>alert("Mobile/Email Already Exist, Please Login");</script>';
	  }
	  else{
	
   
		//$sql="insert into registration values();"
		$sql= mysqli_query($con,"insert into users(name,mobile,email,password) values ('$uname','$umobile','$uemail','$upassword')");
		if($sql)
			
		{  
		?>
	<form id="resform" action="login.php" method="post">
	<input type="hidden" name="res" value="success">
     </form>
	 
<script type="text/javascript">
    document.getElementById('resform').submit();
</script>
		   
		   <?php
		}
		
}
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>

<body>
	<!--Slider-->
	<div class="banner-slider inner-banner">
		<?php include 'header.php' ?>
			
		<h6 class="inner-title">Register</h6>
	</div>
	<!--//Slider-->
	<!--//Header-->
	<!--Breadcrumb-->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="index.php">Home</a>
					<span>| |</span>
				</li>
				<li>
				<a href="#">Register</a>
				</li>
			</ul>
		</div>
	</div>
	<!--//Breadcrumb-->
	<!-- contact -->
	<div class="contact-innpage" style="padding-top:15px">
		<div class="container" style="max-width:500px">
				<div class="contact-right-grid-reg">
							<h3 class="tittle">Register</h3>
				<form action="register.php" method="post">
						<input type="text" name="name" value="<?php echo $name; ?>" placeholder="NAME OF THE FARM/INDIVIDUAL" required="">
						<input type="text" name="mobile" value="<?php echo $mobile; ?>"  placeholder="MOBILE No." required="">
							<input type="email" name="email" value="<?php echo $email; ?>"  placeholder="EMAIL" required="">
							<input type="password" name="password" value="<?php echo $password; ?>"    placeholder="PASSWORD" required="">
						<input type="submit" name="reg_user" value="Register" >
						<div style="float:right">Already Registered? &nbsp <a href="login.php">Login</a></div>
					</form>
				</div>
				<div class="clearfix"> </div>
		
		</div>
		<!--
			<div class="social-icons">
				<a class="facebook" href="#">
					<span class="fa fa-facebook"></span>
				</a>
				<a class="twitter" href="#">
					<span class="fa fa-twitter"></span>
				</a>
				<a class="pinterest" href="#">
					<span class="fa fa-pinterest-p"></span>
				</a>
				<a class="linkedin" href="#">
					<span class="fa fa-linkedin"></span>
				</a>
			</div>
			-->
	</div>
	<!-- //contact -->
	<!-- Footer --><!--
	<div class="map-section">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.495758873587!2d-74.0005340845242!3d40.72911557933012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25991b7473067%3A0x59fbd02f7b519ce8!2s550+LaGuardia+Pl%2C+New+York%2C+NY+10012%2C+USA!5e0!3m2!1sen!2sin!4v1516166447283"></iframe>
	</div>
-->
	<!--footer-->
	<!--
	<div class="contact-footer" id="contact">
		<div class="container">
			<h3 class="tittle white-clr">Contacting Details</h3>
			<div class="footer-grids">
				<div class="footer-1">
					<div class="mid-info">
						<h3 class="subheading">Address 1</h3>
						<p>550 LaGuardia Pl, New York, NY 10012, USA</p>
						<p class="white-clr">+012 345 678 91</p>
					</div>
					<div class="mid-info">
						<h3 class="subheading">Address 2</h3>
						<p>45 Rockefeller Plaza, New York, NY 10111, USA</p>
						<p class="white-clr">+012 345 678 91</p>
					</div>
				</div>
				<div class="footer-2">
					<div class="mid-info">
						<h3 class="subheading">Address 3</h3>
						<p>32nd Pl, Long Island City, NY 11101, USA</p>
						<p class="white-clr">+012 345 678 91</p>
					</div>
					<div class="mid-info">
						<h3 class="subheading">Email</h3>
						<p class="white-clr">
							<a href="mailto:info@example.com">info1@example.com</a>
						</p>
						<p class="white-clr">
							<a href="mailto:info@example.com">info2@example.com</a>
						</p>
						<p class="white-clr">
							<a href="mailto:info@example.com">info3@example.com</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
		<div class="container">
			<div class="bottom-nav-main">
				<ul>
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="about.html">About</a>
					</li>
					<li>
						<a href="services.html">Services</a>
					</li>
					<li>
						<a href="gallery.html">gallery</a>
					</li>
					<li>
						<a href="register.html">Register</a>
					</li>
				</ul>
			</div>
			-->
		
		</div>
	</div>
<?php include "footer.php" ?>
	<!--/footer -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- //menu -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/demo7.js"></script>
	<!-- //menu -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->



	<!-- //smooth scrolling -->
	<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>