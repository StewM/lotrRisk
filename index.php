<?php require_once ("building/head.php"); ?>
<?php require_once ("building/navbar.php"); ?>

    <div class="container">
		<div class="starter-template">
		
		<?php require_once ("building/message.php"); ?>
        
			<h2>Login</h2>
			<form action="auth/login.php" class="login">
				<input type="email" name="email" class="form-control" placeholder="Email address"><br>
				<input type="password" name="password" class="form-control" placeholder="Password"><br>
				<input type="submit" class="btn btn-default" value="Login">
			</form>
			<br>
			<h2>Register</h2>
			<form action="auth/register.php" class="login">
				<input type="email" name="email" class="form-control" placeholder="Email address"><br>
				<input type="password" name="password" class="form-control" placeholder="Password"><br>
				<input type="submit" class="btn btn-default" value="Register">
			</form>

		</div>
	</div><!-- /.container -->

<?php require_once ("building/foot.php"); ?>