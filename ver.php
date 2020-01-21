<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM enviadas WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>
<div id="back">
	<a href="gerenciar.php"><i class="fas fa-arrow-left"></i></a>
</div>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Mensagem Salva: </h3>
		<form action="php_action/update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['mensagem'];?>" name="mensagem" id="mensagem" readonly="readonly">
			</div>

			<div class="input-field col s12">
				<h5>Remetente:</h5>
				<input type="text" value="<?php echo $dados['nome'];?>" name="nome" id="nome" readonly="readonly">
			</div>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
