
<html>
<head>
	</head>	
	
<body>
	<h1>this is my form page</h1>
	<div class="container" style="border:2px solid green;">
		<h1>apply here</h1>
		<div class="row">
			<div class="col-6">
	<form action="" method="POST">
			
<?php
				
 include 'connect.php';
  include 'links.php';
				
   $ids = $_GET['id'];
  
  $showquery	= "select * from ragist where id={$ids} ";	
	
   $showdata = mysqli_query($con,$showquery);	
	$arrdata = mysqli_fetch_array($showdata);			
				
	
	if(isset($_POST['submit'])){
		$idupdate = $_GET['id'];
		
		$name      =  $_POST['name'];
		$email     =  $_POST['email'];
		$pass      =  $_POST['pass'];
		$cpassword =  $_POST['cpassword'];
		$degree    =  $_POST['degree'];
		$mobile    =   $_POST['mobile'];
		//$images    =   $_POST['images'];
		
	
	//	$insertquery = "insert into ragist( name, email, pass, cpassword, degree, mobile, images) values('$name','$email', '$pass','$cpassword',' $degree','$mobile', '$images')"; 
		
		
		$query = "update ragist set id='$idupdate', name='$name', email='$email',pass='$pass',cpassword='$cpassword',degree='$degree', mobile='$mobile'  where id='$idupdate'"; 
		
		$res = mysqli_query($con,$query);
		
		if($res){
			?>
				<script>
					alert("data updated properly");
				</script>
				<?php
		}else{
			?>
		<script>
			alert("data not updated");
				</script>
<?php
			
		}
	}
				
				?>

	
	
		<input type="text" name="name" value="<?php echo $arrdata['name']; ?>" placeholder="enter your name" required><br>
	
		<input type="email" name="email" value="<?php echo $arrdata['email']; ?>" placeholder="enter your email"><br>
		
		<input type="password" name="pass" value="<?php echo $arrdata['pass']; ?>"  placeholder="password"><br>
		
		<input type="cpassword" name="cpassword" value= "<?php echo $arrdata['cpassword']; ?>"  placeholder="enter conferm password"><br>
		
		<input type="degree" name="degree" value="<?php echo $arrdata['degree']; ?>" placeholder="enter degree"><br>
		
		<input type="number" name="mobile" value="<?php echo $arrdata['mobile']; ?>" placeholder="enter mobile number">
		
		<br>
		<br>
		
		
 <input type="submit"   name="submit" class ="btn btn-primary" value="update" > 
<a href="display.php"  class="btn btn-primary">CHECK FORM</a>
		 
		
				</form>
			</div>  
				
				<div class="col-4">
					<img src="p8.jpg.png" name="images" value="">
			</div>
		</div>
	</div>



	
	
	<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
	</body></html>
