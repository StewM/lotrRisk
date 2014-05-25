<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="/">Lord of the Rings RISK</a>
	</div>
	<div class="collapse navbar-collapse">
	  <ul class="nav navbar-nav">
		<li class="active"><a href="/">Menu</a></li>
		<li><a href="/map.php">Map</a></li>
		<li><a href="#">Hand</a></li>
	  </ul>
	  
	  <ul class="nav navbar-nav right">
		<li><a><?=$_SESSION['email'] ?></a></li>
		<?php if($_SESSION['logged'] == 1): ?>
			<li><a href="auth/logout.php">Logout</a></li>
		<?php endif; if($_SESSION['logged'] != 1): ?>
			<li><a href="/">Login</a></li>
		<?php endif; ?>
	  </ul>
	  
	</div><!--/.nav-collapse -->
  </div>
</div>