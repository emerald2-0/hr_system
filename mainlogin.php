<!DOCTYPE html>
<html>
<head>
	<title>Sidetests</title>
	<link rel="stylesheet" type="text/css" href="sidecss.css">
</head>
<body>
	<div class="wrapper">
	<div class="container">
		<h1>Welcome To Dodore Kenya</h1>
		
		<form class="form" action="page2" action="connector.php" method="POST" class="Form1">
			<input type="text" placeholder="Username" name="uname"><br>
			<input type="password" placeholder="Password" name="pss"><br>
			<?php 
			
			?>
			<input type="text" name="Role" 
			placeholder=
			"<?php 
			/*
			include('connector.php');
			$fetch_role = "SELECT * FROM logintbl WHERE `Username`='Emerald'";
			$present = mysqli_query($connector, $fetch_role);
			if (mysqli_num_rows($present)>0) {
				# code...
				while ($myrows = mysql_fetch_array($present)) {
					# code...
					echo $myrows['Role'];
				}
			}
			*/
			?>" 
			disabled=""><br>
			<button type="submit" id="login-button" onclick="myFunction()">Login</button>
       </div>
		</form>
	</div>
</div>
<script>
	function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
</body>
</html>