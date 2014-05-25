<?php require_once ("building/head.php"); ?>
<?php require_once ("building/navbar.php"); ?>

	<div class="container">
		<div class="starter-template">
		
		<?php require_once ("building/message.php"); ?>

			<h2>Create Game</h2>
			<form action="auth/create-auth.php" class="login">
				<label>Number of Players</label>
				<select name="numusers" class="form-control" placeholder="Password">
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
				<br>
				<label>Game Name</label>
				<input type="text" name="name" class="form-control" placeholder="Name"><br>
				<input type="submit" class="btn btn-default" value="Create">
			</form>

		</div>
	</div><!-- /.container -->

<?php require_once ("building/foot.php"); ?>