<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    /*header("Location: welcome.php");*/
}

if (isset($_POST['submit_u'])) {
	header("Location: index.php");
}
if (isset($_POST['submit_a'])) {
	header("Location: loginadmin.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div class="container">
       <form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Choose your role</p>
			
			<div class="input-group">
				<button name="submit_u" class="btn">User</button>
			</div>
			<div class="input-group">
				<button name="submit_a" class="btn">Admin</button>
			</div>
		</form>
	</div>
</body>
</html>