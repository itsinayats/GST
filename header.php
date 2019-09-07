					
					<?php 
session_start();
?>
<div class="overlay overlay-contentpush">
			<button type="button" class="overlay-close">
				<i class="fa fa-times" aria-hidden="true"></i>
			</button>
			<nav>
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
				<!--	<li>
						<a href="about.php">About</a>
					</li>
					
					<li>
						<a href="services.php">Services</a>
					</li>
					<!--
					<li>
						<a href="blog.php">Blog</a>
					</li> 
					
					<li>
						<a href="gallery.html">Gallery</a>
					</li>
					
					<li>
						<a href="icons.php">Icons</a>
					</li>
					
					<li>
						<a href="typography.php">Typography</a>
					</li>
					-->
					
					
					<?php 
           if(isset($_SESSION["id"])){
			   ?>
			      <li>
				  <?php if($_SESSION["role"] == "user"){  ?>
						<a href="dashboard.php">Dashboard</a>
				  <?php } ?>
				   <?php if($_SESSION["role"] == "admin"){  ?>
						<a href="admin.php">Control Panel</a>
				  <?php } ?>
					</li>
			   <li>
						<a href="logout.php">Logout</a>
					</li>
		   <?php }else{ ?>



					<li>
						<a href="register.php">Register</a>
					</li>
					<li>
						<a href="login.php">Login</a>
					</li>
		   <?php } ?>
				</ul>
			</nav>
		</div>
		<section class="header-top">
			<button id="trigger-overlay" type="button">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</button>
			<h1>
				<a href="index.php">
					<span>G</span>ST</a>
					
			</h1>
			<span style="color:white">Genuine Solution Of Taxes</span>
		</section>