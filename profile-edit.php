<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?>


<?php
if(isset($_POST['details_btn']))
{
	$id=$_SESSION['id'];
	$uemail = strip_tags($_POST['email']);
    $ureference = strip_tags($_POST['reference']);
	 $ufirm_company = strip_tags($_POST['firm_company']);
	  $uconstitution = strip_tags($_POST['constitution']);
	   $ugstn = strip_tags($_POST['gstn']);
	    $upan = strip_tags($_POST['pan']);
		 $uaddress_office = strip_tags($_POST['address_office']);
		  $uaddress_res = strip_tags($_POST['address_res']);
	

	$sql = "UPDATE `users` SET `firm_company` = '$ufirm_company', `reference` = '$ureference', `constitution` = '$uconstitution', `gstn` = '$ugstn', `pan` = '$upan', `address_office` = '$uaddress_office', `address_res` = '$uaddress_res' WHERE `users`.`id` = $id";
	
  // $sql = "UPDATE `users` SET `firm_company` = '$ufirm_company', `constitution` = '$uconstitution', `gstn` = '$ugstn', `pan` = '$upan', `address_office` = '$uaddress_office', `address_res` = '$uaddress_res' WHERE `users`.`id` = $id";
		//$sql="update users set email,reference,firm_company,constitution,gstn,pan,address_office,address_res) values('$uemail','$ureference' ,  '$ufirm_company' ,  '$uconstitution', '$ugstn' , '$upan' ,'$uaddress_office',  '$uaddress_res')";
		$res= mysqli_query($con,$sql);
		
		
		
		
		
		
		
}
		?>

















<?php

if(isset($_POST['btn-upload-avatar'])){
mkdir ("uploads/".$_SESSION['id'], 0755);
$target_dir = "uploads/".$_SESSION['id']."/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$target_file =  $target_dir . "avatar" . "."."jpeg";
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
/*if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
*/
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
) {
    echo "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded";
		$location="/gst.ringel.in"."/".$target_file;
		$name_of_file=basename( $_FILES["fileToUpload"]["name"]);
		$id=$_SESSION['id'];
	$description=	$_POST['description'];
		//file upload to dba_close
$sql="insert into files(name,description,path,userid) values ('$name_of_file','$description','$location','$id')";
mysqli_query($con,$sql);
		
		
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?>


<?php 
		 $sql = "SELECT * from users where id=".$_SESSION['id'];
         $retval = mysqli_query($con,$sql);
		
        $row = mysqli_fetch_assoc($retval);
?>



<style>
.img-center {margin:0 auto;margin-bottom:10px;}	

}
.white{color:white !important}

h4{
	font-weight:900 !important;	
}
input{
	background-color:#ffffff4a !important;
	border:none !important;
	color:white !important;
}
</style>
<div class="container" style="margin-top:10px;" >
    <div class="row" style="border: solid 2px white;padding:30px" >
        <div class="col-sm-3">
		
	
            
		<div class="row">
		<img width="100%" title="profile image" class="img-responsive img-center" src="uploads/<?php echo $_SESSION['id']."/avatar.jpeg" ?>">
</div>
<div class="row">
<form method="post" enctype="multipart/form-data">
<input type="file" class="btn-info btn-xs btn" name="fileToUpload" >
<input class="btn btn-warning btn-xs" type="submit" value="upload" name="btn-upload-avatar">


</form>
</div>
<br>

  

          

           
          
        </div>
        <!--/col-3-->
        <div class="col-sm-9">

           

      
                    <form class="form" method="post">
                        <div class="form-group">

                            <div class="col-md-6">
                                <label for="first_name">
                                    <h4>Name Of Firm/Company</h4></label>
                                <input value="<?php echo  $row['firm_company'] ;?>" type="text" class="form-control" name="firm_company" >
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-md-6">
                                <label for="last_name">
                                    <h4>Constitution Of Firm</h4></label>
                                <input value="<?php echo  $row['constitution'] ;?>" type="text" class="form-control" name="constitution">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-6">
                                <label for="phone">
                                    <h4>PAN</h4></label>
                                <input value="<?php echo  $row['pan'] ;?>" type="text" class="form-control" name="pan" >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="mobile">
                                    <h4>GSTN</h4></label>
                                <input value="<?php echo  $row['gstn'] ;?>" type="text" class="form-control" name="gstn">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-md-6">
                                <label for="email">
                                    <h4>Individual Name</h4></label>
                                <input disabled	 value="<?php echo  $row['name'] ;?>" type="text" class="form-control" name="name" >
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-md-6">
                                <label for="email">
                                    <h4>Mobile</h4></label>
                                <input disabled value="<?php echo  $row['mobile'] ;?>" name="mobile" type="text" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-md-6">
                                <label for="password">
                                    <h4>Email</h4></label>
                                <input value="<?php echo  $row['email'] ;?>" type="text" class="form-control" name="email" >
                            </div>
                        </div>
						 <div class="form-group">

                            <div class="col-md-6">
                                <label for="password">
                                    <h4>Reference Name(If Any)</h4></label>
                                <input value="<?php echo  $row['reference'] ;?>" type="text" class="form-control" name="reference" >
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-md-6">
                                <label for="password2">
                                    <h4>Office Address</h4></label>
                                <input value="<?php echo  $row['address_office'] ;?>" type="text" class="form-control" name="address_office" >
                            </div>
                        </div>
						 <div class="form-group">

                            <div class="col-md-6">
                                <label for="password2">
                                    <h4>Residential Address</h4></label>
                                <input value="<?php echo  $row['address_res'] ;?>" type="text" class="form-control" name="address_res" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <br>
                                <button name="details_btn" class="btn btn-md btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-md" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
							 <a href="dashboard.php?tab=pro"> <button class="btn btn-md btn-info" type="button"><i class="glyphicon glyphicon-arrow-left"></i> Back</button></a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!--/tab-pane-->
        </div>
        <!--/tab-content-->
</div>
</body>
