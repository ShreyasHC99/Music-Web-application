<?php
	include("includes/config.php");
	include("includes/classes/Account1.php");
	include("includes/classes/Constants.php");

	$account = new Account1($con);

	if(isset($_POST['loginButton'])) {
		//Login button was pressed
		$username = $_POST['loginUsername'];
		$password = $_POST['loginPassword'];

		$result = $account->login($username, $password);

		if($result == true) {
		$_SESSION['userLoggedIn'] = $username;
		header("Location: admin/dashboard.php");
	}

}

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}
?>

<html>
<head>
	<title>Welcome to Musicloud!</title>

	<link rel="stylesheet" type="text/css" href="assets/css/register.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>
	<?php

	if(isset($_POST['registerButton'])) {
		echo '<script>
				$(document).ready(function() {
					$("#loginForm").hide();
					$("#registerForm").show();
				});
			</script>';
	}
	else {
		echo '<script>
				$(document).ready(function() {
					$("#loginForm").show();
					$("#registerForm").hide();
				});
			</script>';
	}

	?>
	

	<div id="background">

		<div id="loginContainer">

			<div id="inputContainer">
				<form id="loginForm" action="adminlogin.php" method="POST">
					<h2>ADMIN LOGIN</h2>
					<p>
						<?php echo $account->getError(Constants::$loginFailed); ?>
						<label for="loginUsername">Username</label>
						<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. shreyas" value="<?php getInputValue('loginUsername') ?>" required>
					</p>
					<p>
						<label for="loginPassword">Password</label>
						<input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
					</p>

					<button type="submit" name="loginButton">LOG IN</button>
					
					
				</form>




			</div>

			

		</div>
	</div>

</body>
</html>