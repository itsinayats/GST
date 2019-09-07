  
<?php 
session_start();
 if(isset($_SESSION["id"]))
  {
	   header("location:dashboard.php");
  }

    include("dbconfig.php");
?>

<?php 
  if(isset($_POST["btn-login"]))
  {
      $userid=$_POST["mobile"];
	  $pass=$_POST["password"];
      
      $sql=mysqli_query($con,"select * from users where (email='$userid' or mobile='$userid') and password='$pass'");
      if(mysqli_num_rows($sql))
      {
          while($row=mysqli_fetch_array($sql))
          {   
                $name=$row["name"];
			    $mobile=$row["mobile"];
			    $email=$row["email"];
				$role = $row["role"];
              $id=$row["id"];
              session_start();
              $_SESSION["id"]=$id;
			  $_SESSION["name"]=$name;
			   $_SESSION["role"]=$role;
              
          }
		  if($role == "admin"){
			   header("location:admin.php");
		  }else
        header("location:dashboard.php");
      }
      else{
         //$error="";
         //echo '<script>alert("plz inter valid password");</script>';
		 $wrongcred=true;

      }

  }

?>



<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>

<body>
	<!--Slider-->
	<div class="banner-slider inner-banner">
		<?php include 'header.php';?>
		<h6 class="inner-title">Login</h6>
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
				<a href="#">Login</a>
				</li>
				
			</ul>
		</div>
	</div>
	<!--//Breadcrumb-->
	<!-- contact -->
	<div class="contact-innpage" style="padding-top:15px">
		<div class="container" style="max-width:500px">

			
				
				<div class="contact-right-grid-login">
							<h3 class="tittle">Login</h3>
					<form method="post">
						    <input type="text" name="mobile" placeholder="MOBILE/EMAIL" required="">
							<input type="password" name="password" placeholder="PASSWORD" required="">
						<input type="submit" class="btn btn-sm" value="Login" name="btn-login">
						<div style="float:right"><a href="register.php">Register Here</a></div>
						<div style="margin-top:10px"><input style="min-width:100%;" type="button" id="forget" class="btn btn-success btn-sm" value="Forgot Password?" data-toggle="modal" href="#alertmodal"></div>
					</form>
				</div>
				<div class="clearfix"> </div>
		
		</div>
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



<?php

if(isset($_POST['res'])){
?>
	
	<script>
$(document).ready(function(){
  
    $("#xxx").modal();
 
});

</script>
<?php  }?>



<?php

if($wrongcred){
?>
	
	<script>
$(document).ready(function(){
  
    $("#wrongcred").modal();
 
});

</script>
<?php  }?>


<div class="modal fade" id="xxx" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thank You</h4>
            </div>
            <div class="modal-body">
             <center>Successfully Registerd,Login Here<center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="alertmodal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Alert</h4>
            </div>
            <div class="modal-body">
             <center>Contact at <a href="mailto:admin@example.com"> admin@example.com</a> with your registered email<center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="wrongcred" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Alert</h4>
            </div>
            <div class="modal-body">
             <center>Wrong userid/email/password provided<center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</body>

</html>