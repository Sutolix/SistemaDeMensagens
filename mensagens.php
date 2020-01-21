<?php
	//Header
	include_once 'includes/header.php';
?>

	<div id="container">
			<div id="back">
			<a href="index.php"><i class="fas fa-arrow-left"></i></a>
			</div>



			<div class="row">
				<div class="col s12 m6 push-m3">
					<h3 class="light"> Nova Mensagem </h3>
					<form action="php_action/criar.php" method="POST">

						<div class="input-field col s12">
							<input type="text" name="nome" id="nome" required>
							<label for="nome">Nome</label>
						</div>

						<div class="input-field col s12">
							<input type="email" name="email" id="email" required>
							<label for="email">Email</label>
						</div>
			
						<div class="input-field col s12">
							<input type="text" name="assunto" id="assunto" required>
							<label for="assunto">Assunto</label>
						</div>

						<div id="mensagem_esc" class="col s12">
							<textarea name="mensagem" id="mensagem" rows="10" cols="60" wrap="virtual" placeholder="Digite aqui sua mensagem" required></textarea>
						</div>
						<button type="submit" name="btn-enviar" class="btn"> Enviar </button>
					</form>
			</div>
<?php
	//Footer
	include_once 'includes/footer.php'

?>