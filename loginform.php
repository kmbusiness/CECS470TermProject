
	<?php
		session_start();
		$_SESSION['prev_page'] = 'index.php';
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
			<div class="container-signup">
				<label for="email">Email</label>
				<?php
				if($errors[0] == 1) {
					echo '
					<span class="error-warning" style="color:red;float:right;">
					Missing email.
					</span>
					';
				}
				?>
				<br/>
				<input id="email" type="email" name="email" class="required" />
				

					<label for="pw">Password</label><?php
					if($errors[1] == 1) {
						echo '
						<span class="error-warning" style="color:red;float:right;">
						Missing password. 
						</span>
						';
					}
					?>

					
					<br/>
					<input id="pw" type="password" name="pw" class="required" />
					<?php
					if($errors[2] == 1) {
						echo '
						<span class="error-warning" style="color:red;">
						Login error
						</span>
						';
					}
					?>
					
					<br>
					<div class="clearfix">
       			<button type="submit" class="signinbtn">LOG IN</button>
					</div>
			</div>
		</form>
