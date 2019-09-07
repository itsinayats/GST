
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
  
  if(null !== $_SESSION["role"] && $_SESSION["role"] != "admin")
  {
	   die("Unauthorized Access");
  }

    include("dbconfig.php");
?>


<?php
if(isset($_POST['send']))
{
	
	$userid = strip_tags($_POST['userid']);
	$message = strip_tags($_POST['message']);
   
		//$sql="insert into registration values();"
		$sql= mysqli_query($con,"insert into notification(userid,message) values('$userid','$message')");
		if($sql)
		{  
		  echo "<script>alert('Message sent')</script>";
		}else{
			echo "<script>alert('error in sending Message sent')";
		}
		
}

?>


<?php
if(isset($_POST['delete_btn']))
{
	
	$msgid = strip_tags($_POST['id']);
   
		//$sql="insert into registration values();"
		$sql= mysqli_query($con,"update notification set delind = '1' where id = '$msgid'");  
		if($sql)
		{  
		  echo "<script>alert('Message deleted')</script>";
		}else{
			echo "<script>alert('error in sending Message sent')";
		}
		
}

?>



<?php
if(isset($_POST['edit']))
{
	
	$msgid = strip_tags($_POST['msgid']);
	$message = strip_tags($_POST['message']);
   
		//$sql="insert into registration values();"
		$sql= mysqli_query($con,"update notification set message = '$message' where id = '$msgid'");  
		if($sql)
		{  
		  echo "<script>alert('Message edited and sent')</script>";
		}else{
			echo "<script>alert('error in sending Message sent')";
		}
		
}

?>
 
 
  
  




<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" type="text/css" />
<style>
div.container {
        width: 80%;
    }
</style>
<body>
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
	<!-- contact -->
	<div class="container-fluid" style="min-height:300px">
	<?php if(null == $_GET["tab"] || $_GET["tab"]=="sm" ){ ?>
	<div style="padding:20px"><span style="color:red;font-weight:bolder;border:solid">Registered Users</span></div>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
			    <th>Id</th>
                <th>Name</th>
                <th>Mobile</th>
				<th>PAN/TIN</th>
                <th>Email</th>
                <th>Reg. Date</th>
                <th>Message</th>
				 <th>View</th>
            </tr>
        </thead>
        <tbody>
		<?php 
		 $sql = "SELECT * from users where role != 'admin'";
         $retval = mysqli_query($con,$sql);
		 $sno = 1;
        while($row = mysqli_fetch_assoc($retval)) {
	?>
	
            <tr>
               <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
               <td><?php echo $row['mobile'];?></td>
                <td><?php echo $row['pantin'];?></td>
               <td><?php echo $row['email'];?></td>
               <td><?php echo $row['date'];?></td>
			   <td><button class="btn btn-success btn-sm" onclick="sendaction('<?php echo $row['id'];?>')">send</button>
			   <button class="btn btn-danger btn-sm" onclick="viewaction('<?php echo $row['id'];?>')">view</button>
			   </td>
			    <td>
				<button class="btn btn-warning btn-sm" onclick="profileview('<?php echo $row['id'];?>')">profile</button>
				<button class="btn btn-warning btn-sm" onclick="docview('<?php echo $row['id'];?>')">documents</button>
				</td>
                 
		   </tr>
		<?php }?>
        </tfoot>
    </table>
	<?php } ?>
	
	<?php if(null != $_GET["tab"] && $_GET["tab"]=="vm" ){ ?>
 <div id="notification">
 <div style="padding:20px"><span style="color:red;font-weight:bolder;border:solid">Show Notifications</span></div>
				<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id.</th>
                <th>Time</th>
				<th>Message</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
		<?php 
		 $sql = "SELECT * from notification where delind != '1' and userid=".$_GET['id'];
         $retval = mysqli_query($con,$sql);
		
        while($row = mysqli_fetch_assoc($retval)) {
        /* echo "EMP ID :{$row['message']}  <br> ".
         "EMP NAME : {$row['time']} <br> ".
         "EMP SALARY : {$row['status']} <br> ".
         "--------------------------------<br>";
		 die();
		 */
   ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
				<td><?php echo $row['time'];?></td>
                <td><?php echo $row['message']; ?></td>
				
				<form method="post">
                <td>
				<input type="hidden" name="id" value= "<?php echo $row['id']; ?>" >
				<input type="submit" name="delete_btn" value="Delete" class="btn btn-danger btn-sm" onclick="confirm('are you sure?')"></input>
                 <input type="button" onclick="editaction('<?php echo $row['id']; ?>');" name="edit-btn" value="Edit" class="btn btn-success btn-sm"></input></td>
                
				 </form>           
		   </tr>
		<?php } ?>
           </tbody>
        
    </table>
	</div>
	<?php } ?>

		
		
		<!-- doc --->
		
		
		
			<?php if(null != $_GET["tab"] && $_GET["tab"]=="dv" ){ ?>
 <div id="notification">
 <div style="padding:20px"><span style="color:red;font-weight:bolder;border:solid">Show Notifications</span></div>
				<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Sno.</th>
				 <th>Name</th>
				  <th>Description</th>
				   <th>Upload Date</th>
				    <th>View</th>
					
               
            </tr>
        </thead>
        <tbody>
		<?php 
		 $useridx = $_GET["id"];
		 $sql = "SELECT * from files where userid = '$useridx' and delind !=1 order by upload_date asc";
         $retval = mysqli_query($con,$sql);
		 $sno = 1;
        while($row = mysqli_fetch_assoc($retval)) {
	?>
	
		<tr>
		<td><?php echo $sno;?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['description'];?></td>
		<td><?php echo $row['upload_date'];?></td>
		<td><a class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewmodal" onclick="myFunction(<?php echo "'".$row['path']."'";?>)">click here</a></td>
		
			
		</tr>
		<?php $sno=$sno+1;} ?>
           </tbody>
        
    </table>
	</div>
	<?php } ?>
		<!--git -->

	<?php if(null != $_GET["tab"] && $_GET["tab"]=="git" ){ ?>
	<div style="padding:20px"><span style="color:red;font-weight:bolder;border:solid">Get in touch Results</span></div>
	<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
			    <th>Id</th>
                <th>Name</th>
                <th>Location</th>
				<th>Query</th>
                <th>Date</th>
                <th>Mobile</th>
            </tr>
        </thead>
        <tbody>
		<?php 
		 $sql = "SELECT * from get_in_touch ORDER BY time DESC";
         $retval = mysqli_query($con,$sql);
		 $sno = 1;
        while($row = mysqli_fetch_assoc($retval)) {
	?>
	
            <tr>
               <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
               <td><?php echo $row['location'];?></td>
                <td><?php echo $row['query'];?></td>
               <td><?php echo $row['time'];?></td>
               <td><?php echo $row['mobile'];?></td>
            </tr>
		<?php }?>
        </tfoot>
    </table>
	
	
	
	
	<?php } ?>
	</div>
	

	
	
	
	
	
	<!-- contact end  -->	
		
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

	<!-- start-smoth-scrolling -->
	<!-- smooth scrolling -->
	  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {	

   $('#example').DataTable( {
		"scrollX": true
    } );
	} );




</script>



	<!-- //smooth scrolling -->
	<script type="text/javascript" src="js/bootstrap.js"></script>

<div class="modal fade" id="sendmodal" role="dialog">

    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content" style="padding:30px">
 <span style="margin-bottom:2px">Send Message</span>
 <form method="POST">
 <input type="hidden" name="userid" id="userid">
<textarea name="message" style="border:solid 1px">
Place your message here
</textarea>

           
            <div class="modal-footer" style="padding:0px;border-top:none">
                <input type="submit" name="send" value="send" class="btn btn-success" ></input>
            </div>
</form>
        </div>
    </div>
</div>

<!-- edit -->
<div class="modal fade" id="editmodal" role="dialog">

    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content" style="padding:30px">
 <span style="margin-bottom:2px">Edit Message</span>
 <form method="POST">
 <input type="hidden" name="msgid" id="msgid">
<textarea name="message" style="border:solid 1px" id="editbox">
</textarea>

           
            <div class="modal-footer" style="padding:0px;border-top:none">
                <input type="submit" name="edit" value="Done" class="btn btn-success" ></input>
            </div>
</form>
        </div>
    </div>
</div>


<script>
function sendaction(id){
    $("#userid").val(id);
    $("#sendmodal").modal();
 
}

function editaction(id){
	$("#msgid").val(id);
    $("#editmodal").modal();
}

function profileview(id){
  window.location.href="profile_admin_view.php?id="+id;
}

function viewaction(id){
  window.location.href="admin.php?id="+id+"&tab=vm";
}

function docview(id){
  window.location.href="admin.php?id="+id+"&tab=dv";
}



</script>
	<!-- //smooth scrolling -->
<div class="modal fade" id="viewmodal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
 
            <div class="modal-body">
			
			<img src="#" id="docimg" height="100%" width="100%">
			<a id="dlink" href="#" download>click here to download</a>
            </div>
            <div class="modal-footer">
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