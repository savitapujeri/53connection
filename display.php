
<html>
<head>
		
	
	</head>
<body>
	<h1>tables display data</h1>
	<div class="main-div">
	
		
		
	
	<div class="table-responsive p-5 ">
		<table style="border:3px solid black;">
		
<thead>
		<tr style="border:3px solid red;">
			<th style="boder:1px solid black; width:10px;"> id  </th>
			<th> name </th>
			<th> email </th>
		
			<th>   password </th>
			<th>    cpassword </th>
	
			<th> degree </th>
			<th> mobile </th>
			<th> images </th>
			
	<th>operation</th>
			
		</tr>
		
			</thead>
			<tbody>
			<?php
				
 include 'connect.php';
  include 'links.php';
				
  
$selectquery = "select * from ragist";

$query = mysqli_query($con, $selectquery);

$num = mysqli_num_rows($query);

$res = mysqli_fetch_array($query);


while($res = mysqli_fetch_array($query)){

	
	?>
	
		<tr>
			<td><?php echo $res['id']; ?></td>
		
			
			<td><?php echo $res['name']; ?></td>
			
		
			<td><span style="background-color:gray;"><?php echo $res['email']; ?></span> </td>
			
			    <td><?php echo $res['pass']; ?> </td>
			
			  <td><?php echo $res['cpassword']; ?> </td>
			<td><?php echo $res['degree']; ?></td>
		  <td><?php echo $res['mobile']; ?></td>
	<td><img src="<?php echo $res['images']; ?>"></td>
		
		
				
	<td>
        
		<a href="update.php?id=<?php echo $res['id']; ?>"  data-toggle="tooltip" data-placement="bottom" title="UPDATE"> <i class="fa fa-edit"  aria-hidden="true"></i></a>	</td>	 
			
	
				
	<td>
		<a href="delete.php?id=<?php echo $res['id']; ?>"  data-toggle="tooltip" data-placement="bottom" title="DELETE"> <i class="fa fa-trash"  aria-hidden="true"></i></a>	</td>	
				</tr>
	
<?php	
	
}

?>
				
			</tbody>
		</table>
		</div>
	</div>
	
	<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
	
	</body>

</html>
