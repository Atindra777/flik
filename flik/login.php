<?php
ob_start();
session_start();
if(isset($_SESSION['user']) && !empty($_SESSION['user']))
{
	header("Location: index.php");
	ob_end_flush();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pikchoo | Passion for Photography</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

  button {
  font-family: Comic Sans MS, cursive, sans-serif;
  outline: 0;
  background: #80b3ff;
  //width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  border-radius: 5px
}

button:hover{
	background-color: #2471A3;
}

.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: auto;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  border-radius: 15px;
}

 .login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}

.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 18px;
  border-radius: 10px;
}
.form button {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #80b3ff;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  border-radius: 10px;
}
.form button:hover,.form button:active,.form button:focus {
  background: #0052cc;
}

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
	  border-radius: 15px;
      margin-bottom: 0;
      border-radius: 0;
	  background-color: #002966;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      padding: 25px;
	  border-radius: 15px;
	  background-color: #002966;
    }
  </style>
</head>
<body style="font-family: Comic Sans MS, cursive, sans-serif;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><font color="gold">Pikchoo</font></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	  <ul class="nav navbar-nav">
        <li><a href="index.php"><font color="gold">Home</font></a></li>
		<?php
		/*<li><a href="#">About</a></li>
        <li><a href="#">Gallery</a></li>*/
		?>
		<?php
		if(isset($_SESSION['user']))
		{
			echo '<li><a href="upload.php"><font color="gold">Upload</font></a></li>';
		}
		?>
      </ul>
	  <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="login.php"><?php //<span class="glyphicon glyphicon-log-in"></span>?><font color="gold"><b>I'm a Photographer</b></font></a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
/*
<div class="jumbotron">
  <div class="container text-center">
    <h1 style="color:  #002966;">Insolva Solutions</h1>      
    <p style="color: #C70039;">Innovation With Excellence <button><a style="text-decoration: none; color: white;" href="contact.php">GET IN TOUCH</a></button></p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h2 style="color:  #002966;">Our Services</h2><br>
  <div class="row">
    <div class="col-sm-3">
      <h3 style="color: #829221;">Web Development</h3>
      <img style="border-radius: 5px;" src="image2.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <h3 style="color: #829221;">Digital Marketing</h3>
      <img style="border-radius: 5px;" src="image1.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <h3 style="color: #829221;">ERP Software</h3>
      <img style="border-radius: 5px;" src="image4.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <h3 style="color: #829221;">App Development</h3>
      <img style="border-radius: 5px;" src="image3.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>

<?php
/*
<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div>

*/

?>
<div class="login-page">
<div class="form">
<span align="center"><h3><font color="grey">Log In</font></h3></span><hr>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<input type="text" name="email" placeholder="Email-Id"><br>
<input type="password" name="password" placeholder="Password"><br>
<button name="submit">LOG IN</button><br><br><font color="grey">New to Pikchoo?</font> <a href="registration.php">Register here</a>
</form>
<br>
<?php

$flag = 0;

$k = 0;

$conn = mysqli_connect('localhost' , 'pikchmxk_atin' , 'Zxcvb!2345' , 'pikchmxk_first');

date_default_timezone_set('Asia/Kolkata');
				
$time = date("H:i:sa");
$date = date("d-m-Y");

if(isset($_POST['submit']))
{
	if(isset($_POST['email']) && isset($_POST['password']))
	{
		$email = mysqli_real_escape_string($conn , htmlspecialchars(trim(stripslashes($_POST['email']))));
		$password = mysqli_real_escape_string($conn , htmlspecialchars(trim(stripslashes($_POST['password']))));
		
		if(!empty($password) && !empty($email))
		{
			$q = "select * from registration where email = '$email'";
			$r = mysqli_query($conn,$q);
			
			if(mysqli_num_rows($r)>0)
			{
				$data = mysqli_fetch_assoc($r);
				$get_pass = $data['password'];
				if($password == $get_pass)
				{
						$q1 = "select * from login_counter where email = '$email'";
						$r1 = mysqli_query($conn,$q1);
						if(mysqli_num_rows($r1)>0)
						{
							$get = mysqli_fetch_assoc($r1);
							$get_counter = $get['counter'];
							$update_counter = $get_counter + 1;
							
							$q3 = "update login_counter set counter = '$update_counter' , date = '$date' , time = '$time' where email = '$email'";
							$r3 = mysqli_query($conn,$q3);
							
							if($r3){
								$k = 1;
							}
						}
						else{
							$q2 = "insert into login_counter(email,counter,date,time) values('$email','1','$date','$time')";
							$r2 = mysqli_query($conn,$q2);
							
							if($r2){
								$k = 1;
							}
						}
						
						if($k == 1)
						{
							$_SESSION['user'] = $email;
							header("Location: index.php");
							ob_end_flush();
						}
					
				}
				else{
					$flag = 1;
				}
			
			}
			else{
				$flag = 1;
			}
					
		}
		else
		{
			echo '<p align="center"><font color="red">Enter All Fields.</font></p>';
		}
	}
	
}	

if($flag == 1)
{
	echo '<p align="center"><font color="red">Enter correct details.</font></p>';
}


?>

</div>
</div>
<footer class="container-fluid text-center">
<p><a href="about_us.php">About Us</a> | <a href="faqs.php">FAQs</a> | <a href="terms_and_conditions.php">Terms & Conditions</a> | <a href="privacy_policy.php">Privacy Policy</a></p>
 <p><font color="gold">&copy; Pikchoo.xyz, 2020. It is a Sole Proprietorship Firm.</font></p>
</footer>

</body>
</html>
