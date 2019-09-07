<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?>
<?php 
  session_start(); 

  if (isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: user.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  
  
 ?>
  
<?php 
    include("dbconfig.php");
?>

<?php
if(isset($_POST['submit-btn']))
{
	$uname = strip_tags($_POST['name']);
	$umobile = strip_tags($_POST['mobile']);
	$ulocation = strip_tags($_POST['location']);
    $uquery = strip_tags($_POST['query']);
   
		//$sql="insert into registration values();"
		$sql= mysqli_query($con,"insert into get_in_touch(name,mobile,location,query) values('$uname','$umobile','$ulocation','$uquery')");
		if($sql)
		{  
		   $success_msg = "We will get back to you soon!";
		}
		
}

?>
 
  
  
  

<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>

<body>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
	
	<!--Slider-->
	<div class="banner-slider">
		<?php include 'header.php';?>
		
		<div class="container">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider-info">
							<h3>We offer a range of</h3>
							<p>Direct Taxation</p>
							<h3>Consulting Services​​​​​​​</h3>
						</div>
						<?php 
                      if(!isset($_SESSION["id"])){
			            ?>
						<a href="register.php" class="bnr-button">
						
							<span class="fa fa-phone" aria-hidden="true"></span>Register Here</a>
					  <?php } ?>
					</li>
					<li>
						<div class="slider-info">
							<h3>We offer a range of</h3>
							<p>Indirect Taxation</p>
							<h3>Consulting Services​​​​​​​</h3>
						</div>
						<?php 
                      if(!isset($_SESSION["id"])){
			            ?>
						<a href="register.php" class="bnr-button">
							<span class="fa fa-phone" aria-hidden="true"></span>Register Here</a>
							
					  <?php } ?>
					</li>
			

				</ul>

			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<!--//Slider-->
	<!--//Header-->
	<!-- banner-btm -->
	<div class="banner-btm">
		<div class="container">
			<div class="position-tittle1">
				<h3 class="tittle">About Us</h3>
			</div>
			<div class="row">
			    <div class="col-sm-4" style="padding:0px">
				             <div style="padding:30px">
						<!--	<span class="fa fa-angellist" aria-hidden="true"></span>  -->
							<h2>Income Tax Advice</h2>
							<div class="clearfix"></div>
							<p class="paragraph" style="font-size:17px;color:white">Expert Advice to plan your tax  while remaining compliant with the
							Indian laws. </p>
						<!--	<a href="services.html" class="text-btn">Know More</a> -->
						</div>
				</div>
			    <div class="col-sm-4 " style="padding:0px">
				   <div class="banner-btm-inner a2">

						</div>
				</div>
				<div class="col-sm-4 " style="padding:0px">
				       	<div style="padding:30px">
						<!--	<span class="fa fa-line-chart" aria-hidden="true"></span> -->
							<h2>What we Do?</h2>
							<div class="clearfix"></div>
							<p class="paragraph" style="font-size:15px;color:black">
					Our main focus points are:
					<ul Style="color:white" class="paragraph">
				    <li>Tax Planning to minimize your tax burden</li>
				    <li>Preparation of Tax returns</li>
				    <li>Filing of Tax returns</li>
				    <li>Legal representation before Tax authorities</li>
				    <li>Advice in legal interpretation of Indian Tax Laws</li>
				    <li>Any other issues related with Indian Taxation Laws </li>
				    
				</ul>
						</div>
				</div>
			</div>
			
			<div class="row">
			    <div class="col-sm-4 " style="padding:0px">
				<div class="banner-btm-inner a3">

						</div>
				</div>
			    <div class="col-sm-4 " style="padding:0px">
				<div style="padding:30px">
						<!--	<span class="fa fa-line-chart" aria-hidden="true"></span> -->
							<h3>Goods & Services Tax Advice</h3>
							<div class="clearfix"></div>
							<p class="paragraph" style="font-size:17px;color:white">Expert advice to deal with the Indian GST laws in hassle free manner.</p>
							<!--<a href="services.html" class="text-btn">Know More</a> -->
						</div>
						</div>
				<div class="col-sm-4 " style="padding:0px">
				<div class="banner-btm-inner x4">

						</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner-bottom -->
<!--	<!-- stats 
	<div class="stats">
		<div class="container-fluid">
			<h3 class="Stats-title">20 Years of Immaculate Consulting Services</h3>
			<div class="stats_inner">
				<div class="col-md-3 col-sm-6 stat-grids">
					<div class="stats-text">
						<h3>Successfully completed</h3>
						<p class="counter">1,546</p>
						<h3>Projects</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 stat-grids">
					<div class="stats-text">
						<h3>We have clients in</h3>
						<p class="counter">2,879</p>
						<h3>Countries</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 stat-grids">
					<div class="stats-text">
						<h3>We have more than</h3>
						<p class="counter">1,546</p>
						<h3>experts</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 stat-grids">
					<div class="stats-text">
						<h3>Successful work with</h3>
						<p class="counter">953</p>
						<h3>Clients</h3>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //stats 

	<!-- What-we-do 
	<div class="what-wedo">
		<div class="container">
			<div class="position-tittle2">
				<h3 class="tittle">What We Do</h3>
			</div>
			<div class="wedo-main">
				<div class="wedo-left">
					<h4 class="sub-hdng">consulting service for all kind of businesses</h4>
					<p class="paragraph">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
						eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					<h4 class="sub-hdng">Our team of professionals have experience in</h4>
					<p class="paragraph">
						<span class="fa fa-check" aria-hidden="true"></span>Lorem Ipsum</p>
					<p class="paragraph">
						<span class="fa fa-check" aria-hidden="true"></span>perspiciatis</p>
					<p class="paragraph">
						<span class="fa fa-check" aria-hidden="true"></span>inventore</p>
					<p class="paragraph">
						<span class="fa fa-check" aria-hidden="true"></span>accusantium</p>
				</div>
				<div class="wedo-right">
					<img src="images/we.jpg" alt=" " class="img-responsive">
				</div>
			</div>
		</div>
	</div>
	<!--// What-we-do -->
<!--
	<!--footer
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
	-->

			<!-- contact -->
	<div class="contact-innpage" style="padding-bottom:0px">
		<div class="container">
			<h3 class="tittle">Get in touch</h3>
			<div class="contact-info-sctn">
				<div class="contact-left-grid">
					<div class="contact-inner">
						<!-- <img src="images/t11.jpg" alt="img">  -->
						<div class="right-contact-inner">
							<h4>Km. Shivani Choudhary </h4>
							<p class="working-dept">Advocate, Bar Council Of Delhi</p>
							<div class="span-sub-sctns">
								<span class="fa fa-phone" aria-hidden="true"></span>
								<p class="contact-num">+91 931 558 1053 </p>
							</div>
							<div class="span-sub-sctns">
								<span class="fa fa-envelope" aria-hidden="true"></span>
								<a href="mailto:info@example.com">info@genuinesolutionoftaxes.in</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<br>
					<div class="contact-inner">
						<!--<img src="images/t22.jpg" alt="img">   -->
						<div class="right-contact-inner">
							<h4>Ms Lovely Singh</h4>
							<p class="working-dept">Manager</p>
							<div class="span-sub-sctns">
							<!--	<span class="fa fa-phone" aria-hidden="true"></span> -->
							<!--	<p class="contact-num">+01 543 338 96</p> -->
							</div>
							<div class="span-sub-sctns">
								<span class="fa fa-envelope" aria-hidden="true"></span>
								<a href="mailto:info@example.com">info@genuinesolutionoftaxes.in</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="contact-right-grid" style="padding-bottom:30px;">
					<form action="index.php" method="post" id="form">
						<input type="text" name="name" placeholder="YOUR NAME" required="">
						<input type="text" name="mobile" placeholder="MOBILE No." required="">
							<input type="text" name="location" placeholder="LOCATION" required="">
						<textarea name="query" placeholder="Your Query" required=""></textarea>
						<input type="submit" value="Send Message" name="submit-btn" id="submit-btn">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
	
	<!-- //contact -->
					 
			<div class="clearfix"></div>
		</div>
		
		<?php include 'footer.php' ?>

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

	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 3
			$("#slider3").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- FlexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(function () {

		});
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- FlexSlider -->

	<!-- smooth scrolling -->

		
		
		

	</script>


	<!-- //smooth scrolling -->
	<script type="text/javascript" src="js/bootstrap.js"> </script>
	
	
<?php 	
	if(isset($success_msg)){
		?>
		
	<script>
$(document).ready(function(){
  
    $("#xxx").modal();
 
});
</script>
	<?php }?>
	

<div class="modal fade" id="xxx" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thank You</h4>
            </div>
            <div class="modal-body">
             <center>  We Will get back to you soon.<center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d39ed5a6d808312283a0b25/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>