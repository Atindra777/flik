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
        <?php
		/*
		<li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
		*/
		?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
		/*
		<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
	<font color="grey">
      <h2>Our Mission</h2>
      <h3>"Our mission is to create a society for Photographers. #PassionForPhotography.<br>Lets join and create a healthy society for all of us."</h3> 
	  <hr>
      <h2>About Us</h2>
      <h3>We are a group of Photographers and Techies.</h3><hr>
	  <h2>Management</h2><br>
	  <p align="center"><img style="border: 2px solid black;" src="img.jpg" width="200" height="150"></p><p align="center"><b>Atindra Nath Sarkar</b></p>
	  <h3>Atindra Nath Sarkar is B.Tech 3rd Year student under MAKAUT (Formerly WBUT).<br>He loves books & music<hr>
	  <h2>Contact</h2>
	  <h3>Address: 170, Rajdanga Chakarabarty Para, Behind Acropolis Mall, Kolkata- 700107.<br>Email-Id: atinsarkat@gmail.com<br>Mob: 9433356716</h3><hr>
	</font>  
    </div>
    <div class="col-sm-2 sidenav">
      <?php
	  /*
	  <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
	  */
	  ?>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p><a href="about_us.php">About Us</a> | <a href="faqs.php">FAQs</a> | <a href="terms_and_conditions.php">Terms & Conditions</a> | <a href="privacy_policy.php">Privacy Policy</a></p>
  <p><font color="gold">&copy; Pikchoo.xyz, 2020. It is a Sole Proprietorship Firm.</font></p>
</footer>

</body>
</html>
