
 
<?php 
session_start();
 if(!isset($_SESSION["id"]))
  {
	   header("location:login.php");
  }
  
  if(null !== $_SESSION["role"] && $_SESSION["role"] != "admin")
  {
	   die("Unauthorized Access");
  }

    include("dbconfig.php");
?>


<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>
<style>
.img-center {margin:0 auto;margin-bottom:10px;}	
.tr {
	background:transparent !important;
	color:white !important;
	border:none;
	padding:5px;
	
}
label,input{color:white}
.white{color:white}
body{background:#eb222c}
</style>
<!--Slider-->
<!--Slider-->
	<div class="banner-slider inner-banner">
		<?php include 'header.php' ?>
			
		<h6 class="inner-title">Control Panel</h6>
	</div>
	<!--//Slider-->
	<!--//Header-->
	<!--Breadcrumb-->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="index.php">Home</a>
					<span>||</span>
				</li>
				<li><a href="admin.php?tab=sm">Users</a><span>||</span></li>
				
				<li><a href="admin.php?tab=git">Get in touch</a></li>
			</ul>
		</div>
	</div>
	<!--//Breadcrumb-->

<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?>
<style>
.img-center {margin:0 auto;margin-bottom:10px;}	
.tr {
	background:transparent !important;
	color:white !important;
	border:none;
	padding:5px;
	
}
label,input{color:white}
.white{color:white}
.font20{
	font-size:18px;
}
h4{
    color:black !important;
}

</style>

<?php 
		 $sql = "SELECT * from users where id=".$_GET['id'];
         $retval = mysqli_query($con,$sql);
		
        $row = mysqli_fetch_assoc($retval);
?>



<div class="container" >
		<div class="row" style="margin-top:15px;border:2px solid white;padding:25px">
		
		<br>
		<div class="col-sm-3">
		
		<img width="100%" title="profile image" class="img-responsive img-center" src="uploads/<?php echo $_GET['id']."/avatar.jpeg" ?>">
		
		</div>

           

      <div class="col-sm-9 white font20">
	  <div class="col-sm-4">
	  <h4 >Name Of Firm/Company: </h4>
	  </div>
	   <div class="col-sm-8">
	   <?php echo strtoupper($row['firm_company']); ?>
	   </div>
	   
	   <div class="col-sm-4">
	  <h4 >Constitution Of Firm:</h4>
	  </div>
	   <div class="col-sm-8">
	  <?php echo strtoupper($row['constitution']); ?>
	   </div>
	   
	   
	    <div class="col-sm-4">
	  <h4 >PAN:</h4>
	  </div>
	   <div class="col-sm-8">
	  <?php echo strtoupper($row['pan']); ?>
	   </div>
	   
	   
	   
	    <div class="col-sm-4">
	  <h4 >GSTN:</h4>
	  </div>
	   <div class="col-sm-8">
	  <?php echo strtoupper($row['gstn']); ?>
	   </div>
	   
	   
	   
	   
	    <div class="col-sm-4">
	  <h4 >Individual Name:</h4>
	  </div>
	   <div class="col-sm-8">
	  <?php echo strtoupper($row['name']); ?>
	   </div>
	   
	   
	   
	    <div class="col-sm-4">
	  <h4 >Mobile:</h4>
	  </div>
	   <div class="col-sm-8">
	  <?php echo strtoupper($row['mobile']); ?>
	   </div>
	   
	   
	   
	   
	    <div class="col-sm-4">
	  <h4 >Email:</h4>
	  </div>
	   <div class="col-sm-8">
	  <?php echo strtoupper($row['email']); ?>
	   </div>
	   
	   
	   
	     <div class="col-sm-4">
	  <h4 >Reference:</h4>
	  </div>
	   <div class="col-sm-8">
	  <?php echo strtoupper($row['reference']); ?>
	   </div>
	   
	   
	   
	    <div class="col-sm-4">
	  <h4 >Office Address:</h4>
	  </div>
	   <div class="col-sm-8">
	  <?php echo strtoupper($row['address_office']); ?>
	   </div>
	   
	    <div class="col-sm-4">
	  <h4 >Resident Address:</h4>
	  </div>
	   <div class="col-sm-8">
	  <?php echo strtoupper($row['address_res']); ?>
	   </div>
                
                </div>
				</div>
				</div>
				
	<?php include 'footer.php' ?>

<!--/row-->