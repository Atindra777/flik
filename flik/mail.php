<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
			function chk()
			{
				var name=document.getElementById('name').value;
				var dataString='name='+ name;
				$.ajax({
					type: "post",
					url: "next.php",
					data: dataString,
					cache: false,
					success: function(html){
						$('#msg').html(html);
					}
				});
				return false;
			}
		</script>
	</head>
    <body>
		<form>
			<input type="text" id="name">
			<br><br>
			<input type="submit" value="submit" onclick="return chk()">
		</form>

	<p id="msg"></p>
	</body>

</html>