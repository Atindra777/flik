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
	
	#sticky{
	position: -webkit-sticky;
  position: sticky;
  top: 0;
  padding: 5px;
  background-color: #002966;
  border-radius: 5px;
	}
	
	#chat{
		right: 0;
        width: auto;
        border: 1px solid #ffffff;
		bottom: 0;
		positon: fixed;
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
        <li class="active"><a href="blog.php"><font color="gold">Blog</font></a></li>
        <?php
		/*<li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>*/
		?>
      </ul>
      <?php
	  /*
	  <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
	  */
	  ?>
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
	<div id="sticky">
         <br><p align="center">
		 <input type="text" name="blog" placeholder="Enter text here..."><br><br>
		 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#<?php echo $row['id'];?>">Compose</button></p>
	</div>
      <div id="chat">
	  <div class="modal fade" id="<?php echo $row['id'];?>" role="dialog">
						<div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
		
         </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
	  </div>
    </div>
    <div class="col-sm-2 sidenav">
	<?php
	  /*
	  <div class="well">
         <p><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#<?php echo $row['id'];?>">Compose</button></p>
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
  <p><a href="">About Us</a> | <a href="">Terms & Conditions</a> | <a href="">Privacy Policy</a></p>
  <p><font color="gold">&copy; Pikchoo.xyz, 2020. It is a Sole Proprietorship Firm.</font></p>
</footer>

</body>
</html>
