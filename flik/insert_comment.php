<?php
ob_start();

$conn = mysqli_connect('localhost' , 'root' , '' , 'pikchoo');

if(isset($_POST['insertdata']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$q = "insert into comment (say) values('".$email."')";
	$r = mysqli_query($conn,$q);
	
	if($r)
	{
		header("Location:new2.php");
		ob_end_flush();
	}
	else{
		echo mysqli_error($conn);
	}
	
	
}

?>