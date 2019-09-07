<?php
if(isset($_POST['btn-upload'])){
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
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
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "pdf" ) {
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
		$location="/".$target_file;
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
<style>
.border-cp {
    border: solid 1px;
    padding: 20px;
}
</style>
	<!-- contact -->
	<div class="contact-innpage" style="padding-top:15px">
		<div class="container" style="max-width:500px">
		    <p style="color:white">Note: Max size allowed :1mb</p>

			
				
				<div class="contact-right-grid-login border-cp">
							<h3>Upload Documents</h3><br>
					<form method="post" enctype="multipart/form-data" id="upload_form">
					<div class="form-group">
    
						    <input class="form-control" type="file" name="fileToUpload"  required="">
						</div>
						<h4 style="margin-bottom:2px">Description/Type of document:</h4>
							<div class="form-group">
    
    <input type="text" class="form-control" name="description">
  </div>
							
						<input id="submit_btn" type="submit" class="btn btn-sm btn-warning" style="background:#546513;" value="Upload" name="btn-upload">
							</form>
				</div>
				<div class="clearfix"> </div>
		
		</div>
	</div>
	<script>

	</script>
	