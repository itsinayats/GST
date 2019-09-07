 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" type="text/css" />
<div class="container-fluid">
  <div id="notification" >
				<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Sno.</th>
                <th>Time</th>
				<th>Notification</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
		<?php 
		$userid = $_SESSION["id"];
		 $sql = "SELECT * from notification where userid = '$userid' and delind !=1 order by time asc";
         $retval = mysqli_query($con,$sql);
		 $sno = 1;
        while($row = mysqli_fetch_assoc($retval)) {
        /* echo "EMP ID :{$row['message']}  <br> ".
         "EMP NAME : {$row['time']} <br> ".
         "EMP SALARY : {$row['status']} <br> ".
         "--------------------------------<br>";
		 die();
		 */
   ?>
            <tr>
                <td><?php echo $sno; ?></td>
				<td><?php echo $row['time'];?></td>
                <td><?php echo $row['message']; ?></td>
				
				<form method="post">
                <td>
				<input type="hidden" name="id" value= "<?php echo $row['id']; ?>" >
				<input type="submit" name="delete_btn" value="Delete" class="btn btn-danger btn-sm" onclick="confirm('are you sure?')"></input></td>
                 </form>           
		   </tr>
		<?php $sno++; } ?>
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