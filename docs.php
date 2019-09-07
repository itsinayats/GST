
 <?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?>
 <style>
 .white{color:white}
 </style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" type="text/css" />
<div class="container-fluid">
  <div id="notification" >
  <div class="row" style="float:right;color:white;margin-right:10px">
		<a href="dashboard.php?tab=ud" class="white">Upload more Documents:<i class="glyphicon glyphicon-edit white"></i></a>
		</div>

           
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Sno.</th>
				 <th>Name</th>
				  <th>Description</th>
				   <th>Upload Date</th>
				    <th>View</th>
					<th>Delete</th>
               
            </tr>
        </thead>
        <tbody>
		<?php 
		 $useridx = $_SESSION["id"];
		 $sql = "SELECT * from files where userid = '$useridx' and delind !=1 order by upload_date desc";
         $retval = mysqli_query($con,$sql);
		 $sno = 1;
        while($row = mysqli_fetch_assoc($retval)) {
	?>
	
		<tr>
		<td><?php echo $sno;?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['description'];?></td>
		<td><?php echo $row['upload_date'];?></td>
		<td><form></form><a class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewmodal" onclick="myFunction(<?php echo "'".$row['path']."'";?>)">click here</a></form></td>
		<td><form method="post">
                <input type="hidden" name="current_file" value="<?php echo $row['path']; ?>">
				<input type="hidden" name="id" value= "<?php echo $row['id']; ?>" >
				<input type="submit" name="delete_btn_file" value="Delete" class="btn btn-danger btn-sm" onclick="return confirm('are you sure?')"></input>
                 </form> 
				 </td>
		</tr>
		<?php $sno=$sno+1;} ?>
           </tbody>
        
    </table>
	</div>

	<script>
	
   $('#example').DataTable( {
        deferRender:    true,
        searching:      false,
        paging:         true,
		"scrollX": true

     
    } );
	</script>
</div>