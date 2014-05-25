<?php
	session_start();

	if($_SESSION['message'] != NULL) {
		?>
		<div class="message <?php if($_SESSION['message_type'] == 'error'): ?> bg-danger <?php endif; ?>
			                <?php if($_SESSION['message_type'] == 'success'): ?> bg-success <?php endif; ?>">
			<?=$_SESSION['message'] ?>
		</div>
		<?php
		$_SESSION['message'] = NULL;
		$_SESSION['message_type'] = NULL;
	}

?>