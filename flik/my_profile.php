<?php
ob_start();
session_start();

if(!isset($_SESSION['user']) && empty($_SESSION['user']))
{
	header("Location: index.php");
	ob_end_flush();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  
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
 // float: left;
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
  
  #search input[type=text] {
  //float: right;
  padding: 6px;
  width: 75%;
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
	background: #1E90FF;
}
  
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      border-radius: 15px;
      margin-bottom: 0;
      border-radius: 0;
	  background-color: #002966;
    }
	
	
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
       padding: 25px;
	  border-radius: 15px;
	  background-color: #002966;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
	
	button {
  font-family: Comic Sans MS, cursive, sans-serif;
  outline: 0;
  background: #80b3ff;
  //width: 100%;
  border: 0;
  padding: 10px;
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
        <li><a href="index.php"><font color="gold">Home</font></a></li>
        <li><a href="upload.php"><font color="gold">Upload</font></a></li>
        <?php
		/*<li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>*/
		?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
		
		if(isset($_SESSION['user'])){
			echo '<li class="active"><a href="my_profile.php"><font color="gold">My Account</font></a></li>';
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

  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <?php
	  /*
	  <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
	  */
	  ?>
    </div>
	
    <div class="col-sm-8 text-left"> 
      <?php
	  
	  $conn = mysqli_connect('localhost' , 'pikchmxk_atin' , 'Zxcvb!2345' , 'pikchmxk_first');
	  
	  $q = "select * from registration where email = '".$_SESSION['user']."'";
	  $r = mysqli_query($conn,$q);
	  
	  $get = mysqli_fetch_assoc($r);
	  
	  echo '<br><br><b><font color="grey">Login Id:</b> '.$_SESSION['user'],'<br>';
	  echo '<b>Registered: </b>'.$get['date'].' '.$get['time'].'<br>';
	  
	  $q1 = "select * from login_counter where email = '".$_SESSION['user']."'";
	  $r1 = mysqli_query($conn,$q1);
	  
	  $get1 = mysqli_fetch_assoc($r1);
	  
	  echo '<b>Last Login: </b>'.$get1['date'].' '.$get1['time'].'<br>';
	  
	  $q2 = "select * from pics where contributor = '".$_SESSION['user']."' order by date desc, time desc";
	  $r2 = mysqli_query($conn,$q2);
	  $num = mysqli_num_rows($r2);
	  echo '<b>Photos Uploaded: </b>'.$num.'</font><br><p align="center"><a href="upload.php"><button>Upload Image</button></a></p><hr>';
	  while($get_pic = mysqli_fetch_assoc($r2))
	  {
		 $image = 'uploads/'.$get_pic['images'];
		 
		?>
		
		<div class="responsive">
        <div class="gallery">
		 <img src="<?php echo $image;?>" width="600" height="400">
        </div>
	  </div><br>
	  <?php
	  
	  $q3 = "select * from pic_download where pic_id = '".$get_pic['id']."'";
	  $r3 = mysqli_query($conn,$q3);
	   echo '<font color="grey"> <b>Downloaded:</b>';
	  
	  if(mysqli_num_rows($r3)==0)
	  {
		  echo '0 times';
	  }
	  else{
		  $g = mysqli_fetch_assoc($r3);
		  echo $g['times'].' times';
	  }
	   echo ' <b>Size:</b>'.$get_pic['size'].'B <b>Type:</b>'.$get_pic['type'].' <b>Uploaded On:</b>'.$get_pic['date'].' '.$get_pic['time'].'<b> Keywords:</b>'.$get_pic['keyword'].'</font><hr>';
		  
	  
	  }
	  ?>
    </div>
    <div class="col-sm-2 sidenav">
       <?php
	   /*
	  <div class="well">
      <p>Ads</p>
      </div>
	 
      <div class="well">
        <p>ADS</p>
      </div>
	  */
	  ?>
    </div>
  </div>
</div>
<br><br>
<footer class="container-fluid text-center">
<p><a href="about_us.php">About Us</a> | <a href="faqs.php">FAQs</a> | <a href="terms_and_conditions.php">Terms & Conditions</a> | <a href="privacy_policy.php">Privacy Policy</a></p>
  <p><font color="gold">&copy; Pikchoo.xyz, 2020. It is a Sole Proprietorship Firm.</font></p>
</footer>

</body>
</html>
