<form action="" method="post">
Enter Email-Id where you got the mail: <input type="text" name="subscribe"> <button name="submit">SUBMIT</button>
</form>

<?php

$conn = mysqli_connect('localhost' , 'pikchxmk_atin' , 'Zxcvb!2345' , 'pikchxmk_first');

if(isset($_POST['button']))
{
		if(isset($_POST['subscribe']))
		{
			if(!empty($_POST['subscribe']))
			{
				$subscribe = mysqli_real_escape_string($conn , htmlspecialchars(trim(stripslashes($_POST['subscribe']))));
				
				$q = "insert into unsubscribe(email) values('$subscribe')";
				$r = mysqli_query($conn,$q);
				
				if($r)
				{
					echo '<font color="green">Thank You.</font>';
				}
			}else{
				echo '<font color="red">Enter Field.</font>';
			}
		}
}

?>