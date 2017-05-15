<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		session_start();
		$_SESSION['prev_page'] = 'loginform.php';
		// echo "login status: " . $_SESSION['login_status'] . " login email: " . $_SESSION['login_email'];
		$errors = null;
		// echo "login_status: " .$_SESSION['login_status'];
		if (isset($_GET['errors']) )
		{
			$e = $_GET['errors'];
			$errors = str_split($e);
			// print_r($errors);
		}
		
	?>

	<form action="login.php" method="post">
		<form action="furnitureorder.php" method="post" id="order-form">
			<div>
				<label for="email">Customer Email</label><br/>
				<input id = "email" type="email" name="email" size="60" class="required" />
				<?php
				if($errors[0] == 1) {
					echo '
					<div class="error-warning" style="color:red;">
					Missing email.
					</div>
					';
				}
				?>
			</div>
			<div>
				<label for="pw">Password</label><br/>
				<input id = "pw" type="text" name="pw" size="60" class="required" />
				<?php
				if($errors[1] == 1) {
					echo '
					<div class="error-warning" style="color:red;">
					Missing password.
					</div>
					';
				}
				?>
			</div>
			<?php
			if($errors[2] == 1) {
				echo '
				<div class="error-warning" style="color:red;">
				Login error: Check email and password.
				</div>
				';
			}
			?>
			<br>

       		<input type="submit"  value="Login">
		</form>
	</form>
</body>
</html>