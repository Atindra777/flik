<?php
ob_start();
session_start();
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
  /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  border-radius: 10px;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

   .clearfix:after {
  content: "";
  display: table;
  clear: both;
}
  
div.gallery {
  border: 1px solid #ffffff;
  box-shadow: 2px 2px 2px #888888;
}

div.gallery:hover {
  border: 1px solid #777;
  box-shadow: 5px 5px 5px #888888;
}

div.gallery img {
  padding: 10px;
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
	
#search input[type=text] {
  //float: right;
  padding: 6px;
  width: 45%;
  margin-top: 8px;
  margin-right: 16px;
  border: 2px solid #ccc;
  font-size: 17px;
  border-radius: 10px;
}

#search button {
  //float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 6px;
  background: #002966;
  font-size: 17px;
  border: none;
  //cursor: pointer;
}

#search button:hover{
	background: #4CB3D5;
}

  </style>
</head>
<body style="font-family: Comic Sans MS, cursive, sans-serif; background-color:  #ffffff;">

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
        <li class="active"><a href="index.php"><font color="gold">Home</font></a></li>
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
        <?php
		
		if(isset($_SESSION['user'])){
			echo '<li><a href="my_profile.php"><font color="gold">My Account</font></a></li>';
			echo '<li><a href="logout.php"><font color="gold">Log Out</font></a></li>';
		}else{
		echo '<li><a href="login.php">
		<font color="gold"><b>I\'m a Photographer</b></font></a></li>';
		}
		?>
		<?php
		/*
		<span class="glyphicon glyphicon-log-in"></span>
		*/
		?>
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

<?php
/*
<div class="login-page">
<div class="form">
<span align="center"><h3>Upload Photos</h3></span><hr>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
<input type="file" name="photo"><br>
<input type="text" name="keyword" placeholder="Enter..."><br><br>
<button name="submit">UPLOAD</button>
</form>

<?php

$conn = mysqli_connect('localhost', 'insolzxf_insolzx' , 'Asdfg!2345' , 'insolzxf_1234');

date_default_timezone_set('Asia/Kolkata');
				
$time = date("H:i:sa");
$date = date("d-m-Y");

if(isset($_POST['submit']))
{
	if(isset($_POST['email']) && isset($_POST['name']))
	{
		$name = mysqli_real_escape_string($conn , htmlspecialchars(trim(stripslashes($_POST['name']))));
		$email = mysqli_real_escape_string($conn , htmlspecialchars(trim(stripslashes($_POST['email']))));
		
		if(!empty($name) && !empty($email))
		{
			$q = "insert into subscribe(name, email, date, time) value('".$name."','".$email."','".$date."','".$time."')";
			$r = mysqli_query($conn,$q);
			if($r)
			{
				echo '<br><p align="center"><font color="green">Thank you. We will get back to you.</font></p>';
			}
		}
		else
		{
			echo '<br><p align="center"><font color="red">Enter All Fields.</font></p>';
		}
	}
	
}	
?>

</div>
</div>
*/
?>
<br>
<div id="search">
<form action="" method="post">
<p align="center">
<font style="color: #002966;"><b>Pikchoo</b></font> <input type="text" name="search" placeholder="Search photos here..."><button name="submit"><font color="gold">SEARCH</font></button>
</p>
</form>
<p align="center"><font color="grey"><b>Common Searches:</b> Nature, Kolkata, Winter, Potrait</font></p>
</div>
<hr><br>

<?php

$flag = 0;

$conn = mysqli_connect('localhost' , 'pikchmxk_atin' , 'Zxcvb!2345' , 'pikchmxk_first');

if(isset($_POST['submit']))
{
	if(isset($_POST['search']))
	{
		$s = $_POST['search'];
		
		if(!empty($s))
		{
			$q5 = "select * from pics where keyword like '%".$s."%' order by date desc, time desc";
			$r5 = mysqli_query($conn,$q5);
			$counter = mysqli_num_rows($r5);
			
			if($counter == 0)
			{
				echo '<p align="center">Don\'t worry your pics are on their way... <br><font color="blue">Common search items are mentioned above.</font></p><br>';
			}
			else{
				$flag = 1;
		echo '<font color="grey">Results for your search: "</font><font color=\'blue\'><b>'.$s.'</b></font><font color="grey">"</font><h3><font color=\'green\'>More pics are on their way...</font></h3>';
      while ($row1 = mysqli_fetch_array($r5)) {
		
        $image = 'uploads/'.$row1['images'];
		$i = $row1['id'];
		$q7 = "select * from pic_download where pic_id = '$i'";
		$r7 = mysqli_query($conn,$q7);
		?>
		<div class="responsive">
		<div class="gallery">
		<img src="<?php echo $image;?>" width="600" height="400">
		<div class="desc"><font color="grey" size="2px">Downloaded: 
		<?php
	if(mysqli_num_rows($r7)==0)
	{
		echo ' 0 times';
	}else{
	$g1 = mysqli_fetch_assoc($r7);
	echo $dn1 = $g1['times'].' times';
	}
	?>
		
		</font> | <a href="index.php?id=<?php echo $row1['id'];?>"><button style="padding: 4px 16px; font-size: 12px;" id="myBtn"><b>DOWNLOAD</b></button></a></div>
		</div>
		</div>
				<?php
				
				}
			}
		}
	}
}

if($flag == 0){
$q = "select * from pics order by date desc, time desc";
$r = mysqli_query($conn,$q);
while($row = mysqli_fetch_assoc($r))
{
	$image = 'uploads/'.$row['images'];
	$p_id = $row['id'];
	$q6 = "select * from pic_download where pic_id = '$p_id'";
	$r6 = mysqli_query($conn,$q6);
	?>
	        <div class="responsive">
			<div class="gallery">
			<img src="<?php echo $image;?>" width="600" height="400">
			<div class="desc"><font color="grey" size="2px">Downloaded:
			<?php
	if(mysqli_num_rows($r6)==0)
	{
		echo ' 0 times';
	}else{
	$g = mysqli_fetch_assoc($r6);
	echo $dn = $g['times'].' times';
	}
	?>
	
  </font> | <a href="index.php?id=<?php echo $row['id'];?>"><button style="padding: 4px 16px; font-size: 12px;" id="myBtn"><b>DOWNLOAD</b></button></a></div>
  </div>
</div>

<?php

}
}
?>

<?php

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	
	    $q3 = "select * from pic_download where pic_id = '$id'";
		$r3 = mysqli_query($conn,$q3);
		
		if(mysqli_num_rows($r3)==0)
		{
			$q1 = "insert into pic_download(pic_id,times) values('$id','1')";
			$r1 = mysqli_query($conn,$q1);
		}
		else{
			$g = mysqli_fetch_assoc($r3);
			$t = $g['times'];
			$t1 = $t + 1;
			$q4 = "update pic_download set times = '$t1' where pic_id = '$id'";
			$r4 = mysqli_query($conn,$q4);
			
		}
	
	$q2 = "select * from pics where id = '$id'";
	$r2 = mysqli_query($conn,$q2);
	$image = mysqli_fetch_assoc($r2);
    $filename = $image['images'];
	$filepath = 'uploads/'.$image['images'];
 
		header('Content-Description: File Transfer');
        header('Content-type: image/jpg');
        header("Content-Transfer-Encoding: Binary");
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Cache-Control: public');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
	    ob_clean();
	    flush();
        readfile($filepath);
        exit;
		
}

?>

<div class="clearfix"></div>

<div style="padding:6px;">
<br><br>
<hr><br>
<footer class="container-fluid text-center">
<p><a href="about_us.php">About Us</a> | <a href="faqs.php">FAQs</a> | <a href="terms_and_conditions.php">Terms & Conditions</a> | <a href="privacy_policy.php">Privacy Policy</a></p>
  <p><font color="gold">&copy; Pikchoo.xyz, 2020. It is a Sole Proprietorship Firm.</font></p>
</footer>

</body>
</html>
