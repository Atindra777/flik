<?php
ob_start();
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
</head>
<body>

<script>
var myWindow;

function closeWin() {
  myWindow.close();
}
</script>

	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<table class="table table-hover">
					<thead>
						<tr>
							<td>S.No</td>
							<td>Image</td>
							<td>Description</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
					<?php
						
						$conn = mysqli_connect('localhost' , 'root' , '' , 'pikchoo');
						
						$q = "select * from pics";
						$r = mysqli_query($conn,$q);
						
						while($row = mysqli_fetch_assoc($r))
						{
					
					
					?>
						<tr>
							<td><?php echo $row['id'];?></td>
							<td><img src="<?php echo 'uploads/'.$row['images'];?>" width="50px" height="50px"></td>
							<td>This is my data</td>
							<td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#<?php echo $row['id'];?>">Download</button>
							</td>
						</tr>
						
						<div class="modal fade" id="<?php echo $row['id'];?>" role="dialog">
						<div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
		
          <p>Some text in the modal.</p>
		  <p><?php echo $row['id'];?></p>
		  <p><img src="<?php echo 'uploads/'.$row['images'];?>" width="50px" height="50px"></p>
		  <form action="" method="post">
		  <input type="text" name="comment" placeholder="Enter Comment">
		  <input type="hidden" name="id" value="<?php echo $row['id'];?>">
		  <button name="submit_comment" onclick="closeWin()">Comment & Download "myWindow"</button>
		  </form>
		  <hr><br>
		  <a href="new2.php?id2=<?php echo $row['id']?>"><button onclick="closeWin()">Just Download "myWindow"</button></a>
		  <?php
		  
if(isset($_POST['submit_comment']))
{
	if(isset($_POST['comment']))
	{
		$com = $_POST['comment'];
			
		if(!empty($com))
		{			
				$id_val = $_POST['id'];
				$q1 = "insert into comment(say , pic_id) values('$com' , '$id_val')";
				
				$i=1;
				while($i<2)
				{
					$r1 = mysqli_query($conn,$q1);
					$i++;
				}				
	
	$q3 = "select * from pics where id = '$id_val'";
	$r3 = mysqli_query($conn,$q3);
	$image = mysqli_fetch_assoc($r3);
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
		
		header("Location: new2.php");
		ob_end_flush();
		
		}
		
	}

}
				
	if(isset($_GET['id2']))
{
	$id = $_GET['id2'];
	
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
		header("Location: new2.php");
		ob_end_flush();

}

	?>
		  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
						
						
						
						
						<?php
						
						}
												
						?>
					</tbody>
				</table>
			</div>
		</div>		
	</div>
	
</body>
</html>	