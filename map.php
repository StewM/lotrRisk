<?php require_once ("building/head.php"); ?>
<?php require_once ("building/navbar.php"); ?>

    <div class="container">
		<div class="starter-template">
		
		<?php require_once ("building/message.php"); ?>
		
		<?php 
			global $territoryClasses;
			global $territoryNames;
		?>
		
		<img src="/img/map.jpg">
			<div class="territories">
				<?php
					foreach($territoryClasses as $class){
						$name = $territoryNames[$class];
						echo '<a href="#" id="'.$class.'" data-toggle="tooltip" data-html="true" data-placement="top" title="'.$name.'<br>0 Units<br>No Leader">0</a>';
					}
				?>
			</div>
		</div>
	</div><!-- /.container -->

<?php require_once ("building/foot.php"); ?>