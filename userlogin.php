<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Login</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/finalstyle.css?v=<?php echo time(); ?>">

</head>
<body>
	<div class="login-wrapper">
		<form action="login.php" method="post" class="form">
			<a href="index.html" class="close">&times;</a>
			
			<h2>Login</h2>
			<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     		<?php } ?>

			<div class="input-group">
				<input type="text" name="uname" id="uname">
				<label for="uname">User Name</label>
			</div>

			<div class="input-group">
				<input type="password" name="password" id="password">
				<label for="password">Password</label>
			</div>
			
			<input type="submit" value="Login" class="submit-btn">
			<a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
		</form>

		<div id="forgot-pw">
			<form action="" class="form">
				<a href="#" class="close">&times;</a>
				<h2>Reset Password</h2>
				<div class="input-group">
					<input type="email" name="email" id="email" required>
					<label for="email">Email</label>
				</div>
				<input type="submit" value="Submit" class="submit-btn">
			</form>
		</div>

	</div>

</body>
</html>