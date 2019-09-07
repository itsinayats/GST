
 
<?php 
session_start();
 if(!isset($_SESSION["id"]))
  {
	   header("location:login.php");
  }

    include("dbconfig.php");
?>



<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>
 
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" type="text/css" />


<body>
	<!--Slider-->
	<div class="banner-slider inner-banner">
		<?php include 'header.php' ?>
			
		<h6 class="inner-title"><?php if(isset($_SESSION["name"])){
					echo "Welcome <strong>".strtoupper($_SESSION["name"])."</strong>"; 
					} ?> </h6>
	</div>
	<!--//Slider-->
	<!--//Header-->
	<!--Breadcrumb-->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">	
				<li>
				<a>Services</a>
				</li>
				
			</ul>
		</div>
	</div>
	<!--//Breadcrumb-->
	
	<!-- Services -->
	<div class="services">
		<div class="container">
			<h3 class="tittle">Our services</h3>
			<div class="services-left-sctn">
				<div class="services-left-sctn-grid">
					<div class="col-md-4 services-icon">
						<div class="services-icon-info">
							<i class="fa fa-cog" aria-hidden="true"></i>
						</div>
						<div class="services-icon-text">
							<h4>Human resources Planning</h4>
							<p class="paragraph">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
						</div>
					</div>
					<div class="col-md-4 services-icon">
						<div class="services-icon-info">
							<i class="fa fa-angellist" aria-hidden="true"></i>
						</div>
						<div class="services-icon-text">
							<h4>Business plan Consulting</h4>
							<p class="paragraph">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
						</div>
					</div>
					<div class="col-md-4 services-icon">
						<div class="services-icon-info">
							<i class="fa fa-line-chart" aria-hidden="true"></i>
						</div>
						<div class="services-icon-text">
							<h4>Exit Planning</h4>
							<p class="paragraph">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="services-left-sctn-grid">
					<div class="col-md-4 services-icon">
						<div class="services-icon-info">
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
						</div>
						<div class="services-icon-text">
							<h4>Market Research</h4>
							<p class="paragraph">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
						</div>
					</div>
					<div class="col-md-4 services-icon">
						<div class="services-icon-info">
							<i class="fa fa-envira" aria-hidden="true"></i>
						</div>
						<div class="services-icon-text">
							<h4>Conflict Management</h4>
							<p class="paragraph">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
						</div>
					</div>
					<div class="col-md-4 services-icon">
						<div class="services-icon-info">
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
						</div>
						<div class="services-icon-text">
							<h4>Mergers & Acquisitions</h4>
							<p class="paragraph">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
	<!--// Services -->
	<!--footer-->
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
	<div>
		
	
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
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>


	<a href="#home" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<!-- //smooth scrolling -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
<?php include 'footer.php' ?>
</body>

</html>