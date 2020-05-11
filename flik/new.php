<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

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
  border-radius: 10px;
  cursor: pointer;
}

#search button:hover{
	background: #1E90FF;
}

</style>
</head>
<body>

<h2>Modal Example</h2>

<?php

$conn = mysqli_connect('localhost' , 'root' , '' , 'pikchoo');

$q = "select * from pics";
$r = mysqli_query($conn,$q);
while($row = mysqli_fetch_assoc($r))
{
echo '<!-- Trigger/Open The Modal -->
<button id="myBtn">'.$row['id'].'</button><br><br>';

echo '<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div id="search">
	<form action="index.php" method="post">
	<p align="center">
	<input type="text" name="com" placeholder="Add a comment..."><br><br>
	<button name="submit"><font color="gold">COMMENT & DOWNLOAD</font></button>
	</p>
	</form>
	<hr>
	<p align="center"><button name="submit1"><font color="gold">SKIP & DOWNLOAD</font></button><p>
	</div>
  </div>

</div>';

/*
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div id="search">
	<form action="index.php" method="post">
	<p align="center">
	<input type="text" name="com" placeholder="Add a comment..."><br><br>
	<button name="submit"><font color="gold">COMMENT & DOWNLOAD</font></button>
	</p>
	</form>
	<hr>
	<p align="center"><button name="submit1"><font color="gold">SKIP & DOWNLOAD</font></button><p>
	</div>
  </div>

</div>
*/
?>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<?php
}
$conn = mysqli_connect('localhost' , 'root' , '' , 'pikchoo');

if(isset($_POST['submit']))
{
	if(isset($_POST['com']))
	{
		if(!empty($_POST['com']))
		{
			$comment = $_POST['com'];
			
			$q = "insert into comment(say) values('".$comment."')";
			$r = mysqli_query($conn,$q);
			
			if($r)
			{
				header("Location:index.php");
			}
			
		}
	}
}

?>
</body>
</html>
