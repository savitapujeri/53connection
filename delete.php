<?php

include "connect.php";

$id = $_GET['id'];

$deletequery = "delete from ragist where id= $id";

$query = mysqli_query($con, $deletequery);


if($query){
	?>

 <script>
alert("deleted sucessfully");
</script>

<?php
	
}else{
	
?>
<script>
	alert("not deleted");

</script>
<?php

}

header('location:display.php');

?>
