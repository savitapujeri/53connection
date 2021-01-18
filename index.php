

<!DOCTYPE html>


<html>
<head>
	 <link rel="stylesheet"
               href="./css/bootstrap.min.css">
        <script src="./js/jquery-3.3.1.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
       
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


	
	</head>
<body>
	<h1>this is my form page</h1>
	<div class="container" style="border:2px solid green;">
		<h1>apply here</h1>
		<div class="row">
			<div class="col-6">
	<form action="" method="POST">
	
		<input type="text" name="name" value="" placeholder="enter your name"><br>
	
		<input type="email" name="email" value="" placeholder="enter your email"><br>
		
		<input type="password" name="pass" value="" placeholder="password"><br>
		
		<input type="cpassword" name="cpassword" placeholder="enter conferm password"><br>
		
		<input type="degree" name="degree" placeholder="enter degree"><br>
		<input type="number" name="mobile" placeholder="enter mobile number"><br><br>
		
		
			 
 <input type="submit" name="submit" class ="btn btn-primary" value="register" /> 
		 <a href="display.php"  class="btn btn-primary">CHECK FORM</a>
		 
				</form>
			</div>  
				
				<div class="col-4">
					<img src="p8.jpg.png" name="images" value="">
			</div>
		</div>
	</div>
	
	</body>
</html>

	
<?php 
	include "connect.php";
	

	if(isset($_POST['submit'])){
		
		$name      =  $_POST['name'];
		$email     =  $_POST['email'];
		$pass      =  $_POST['pass'];
		$cpassword =  $_POST['cpassword'];
		$degree    =  $_POST['degree'];
		$mobile    =   $_POST['mobile'];
		$images    =   $_POST['images'];
		
	
		$insertquery = "insert into ragist( name, email, pass, cpassword, degree, mobile, images) values('$name','$email', '$pass','$cpassword',' $degree','$mobile', '$images')"; 
		
		
		//storing query
	$query = mysqli_query( $con,$insertquery);
		


	if($query ){
		?>
<script>
		alert("data inserted");
</script>
<?php
	}else{
		?>
<script>

		alert( "data not inserted");
</script>
<?php
	}
  }

		
	?>	
	







