<?php
//Sessão
	session_start();
	if(isset($_SESSION['popup'])): ?>
	
	<script>
		//Popup
		window.onload = function(){
			M.toast({html: '<?php echo $_SESSION['popup']; ?>'});
		};
	</script>
<?php
endif;
session_unset();

?>