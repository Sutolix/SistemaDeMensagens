<?php
	//Conexão
	include_once 'php_action/db_connect.php';
	//Header
	include_once 'includes/header.php';
	//Popup
	include_once 'includes/popup.php';
?>

<div class="row">
	<div class="col s12 m8 push-m2">
		<h3 class="light"> Mensagens </h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Assunto:</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM enviadas";
				$resultado = mysqli_query($connect, $sql);

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['assunto']; ?></td>
					<td><a href="ver.php?id=<?php echo $dados['id']; ?>" class="btn-floating blue"><i class="material-icons">visibility</i></a></td>
					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

					<!-- Modal Structure -->
					  <div id="modal<?php echo $dados['id']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Um momento!</h4>
					      <p>Tem certeza que deseja excluir essa mensagem?</p>
					    </div>
					    <div class="modal-footer">					     

					      <form action="php_action/delete.php" method="POST">
					      	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
					      	<button type="submit" name="btn-deletar" class="btn red">Sim, quero apagar</button>

					      	 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

					      </form>

					    </div>
					  </div>
       
				</tr>
				<?php endwhile; ?>

			</tbody>
		</table>
		<br>
		<a href="mensagens.php" class="btn">Adicionar mensagens</a>
		<a href="index.php" class="btn"><i class="material-icons">home</i></a>

	</div>
</div>

<?php
	//Footer
	include_once 'includes/footer.php'

?>