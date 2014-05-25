<?php require_once ("building/head.php"); ?>
<?php require_once ("building/navbar.php"); ?>

    <div class="container">
		<div class="starter-template">
		
		<?php require_once ("building/message.php"); ?>
        
		<h2>Main Menu</h2>
		<table class="table table-condensed">
			<thead>
				<tr>
					<th>#</th>
					<th>Game Name</th>
					<th>Users</th>
					<th>Current User</th>
					<th>Num Users</th>
					<th>Status</th>
					<th>Join</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Pixelbrush Guys</td>
					<td>Stewart<br/>Matt<br/>Cole</td>
					<td>Matt</td>
					<td>3/3</td>
					<td>In Progress</td>
					<td><button type="button" class="btn btn-primary">Play</button></td>
				</tr>
				<tr>
					<td>2</td>
					<td>Our House</td>
					<td>Daniel<br/>Zack<br/>Pierce<br/></td>
					<td>------</td>
					<td>3/4</td>
					<td>Waiting</td>
					<td><button type="button" class="btn btn-primary">Join</button></td>
				</tr>
			</tbody> 
		</table>
		
		<a href="create.php"><button type="button" class="btn btn-success">Create Game</button></a>
		
		</div>
	</div><!-- /.container -->

<?php require_once ("building/foot.php"); ?>