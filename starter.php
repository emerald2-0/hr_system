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
		
		<form class="form" action="page2" method="POST" class="Form1">
			<input type="text" placeholder="email" name="email"><br>
			<button type="submit" id="login-button" onclick="myFunction()">Login</button>
       </div>
			<!--<a href="#">Sign Up</a>-->
		</form>
	</div>
	<!--
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	-->
</div>
<script>
	function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
</body>
</html>