<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?> 


 
<?php 
session_start();
 if(!isset($_SESSION["id"]))
  {
	   header("location:login.php");
  }

    include("dbconfig.php");
?>




<?php
if(isset($_POST['delete_btn']))
{  
	$id = $_POST['id'];
	  $sql1 = "UPDATE `notification` SET `delind` = '1' WHERE `notification`.`id` = '$id'";
      if(mysqli_query($con,$sql1))
      {
		    echo '<script>alert("Message deleted!");</script>';
	  }
}
		?>
		

<?php
if(isset($_POST['btn-change-pass']))
{  
	$pass = $_POST['pass'];
	$cnf = $_POST['cnf_pass'];
	if($pass != $cnf){
		echo "<script>alert('password/confirm password not match!')</script>";
	}else{
		$id=$_SESSION["id"];
	  $sql1 = "UPDATE `users` SET `password` = '$pass' WHERE id = '$id'";
	  
      if(mysqli_query($con,$sql1))
      {
		    echo '<script>alert("Password changed!");</script>';
			require_once('logout.php');
	  }
	}
}
		?>
		
		
		
		

<?php
if(isset($_POST['delete_btn_file']))
{  
    $current_file = $_POST['current_file'];
    
	$id = $_POST['id'];
	  $sql1 = "UPDATE `files` SET `delind` = '1' WHERE id = '$id'";
      if(mysqli_query($con,$sql1))
      {
		    echo '<script>alert("file deleted!");</script>';
	  }
}

		?>





<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>
 


<body style="background:#eb222ce0">
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
				<a  href="dashboard.php?tab=pro">Profile ||</a>
				</li>			
				<li>
				<a  href="dashboard.php?tab=msg">Message ||</a>
				</li>
				<li>
				<a  href="dashboard.php?tab=doc">Documents ||</a>
				</li>
				<li>
				<a href="dashboard.php?tab=pass">Change Password</a>
				</li>
			</ul>
		</div>
	</div>
	<!--//Breadcrumb-->
	<!--profile-->
	<div style="padding-top:10px">
	<?php 
	if($_GET['tab'] == "pro" || null == $_GET['tab'] ){
		include 'profile-view.php';
	}
	if($_GET['tab'] == "msg"){
		include 'message.php';
	}
	if($_GET['tab'] == "doc"){
		include 'docs.php';
	}
	if($_GET['tab'] == "pass"){
		include 'password.php';
	}
	if($_GET['tab'] == "ef"){
		include 'profile-edit.php';
	}
		if($_GET['tab'] == "ud"){
		include 'upload_doc.php';
	}
	?>
	</div>
	
	
	

	<div style="margin-bottom:100px"></div>
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

	<!-- start-smoth-scrolling -->



	<!-- //smooth scrolling -->
<div class="modal fade" id="viewmodal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
 
            <div class="modal-body">
			<div class="row">
			<img src="#" id="docimg" height="50%" width="100%">
			</div>
            </div>
            <div class="modal-footer">
                	<div class="pull-left"><a id="dlink" href="#" download>click here to download</a></div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
   function myFunction(path) {
  	$("#dlink").attr('href',path);
    var img = $("#docimg").attr('src',path)
	
    .on('load', function() {
        if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
            alert('broken image!');
        } else {
            $("#something").append(img);
        }
    });
   
   }
	</script>
</body>

</html>