<?php
	require 'comum.php';

	session_start();

	c_header();
	
	if (isset($_GET['edit'])){
		$loadData = query("SELECT * from servicos where codigo = ".$_GET['edit'].";");
	}
?>

	<div class="aw-layout-page">

		<section class="aw-layout-content  js-content">
			<div class="page-header">
				<div class="container-fluid">
					<h1>
						<?php if (isset($_GET['edit'])) echo 'Editar serviço '.$loadData[0][0];
						else echo 'Cadastro de serviço'; ?>
					</h1>
				</div>
			</div>

			<div class="container-fluid">
				<form onsubmit="<?php if (isset($_GET['edit'])) echo 'editForm(); return false;'; else echo 'submitForm();return false;';?>" id="form_cadServico" method="POST" class="form-vertical js-form-loading" target="">

					<div class="form-group">
						<label for="nome">Nome</label>
						<input name="nome" type="text" class="form-control" value="<?php if (isset($_GET['edit'])) echo $loadData[0][1]; ?>"/>
					</div>

					<div class="form-group">
						<label for="desc">Descrição</label>
						<textarea name="desc" rows="5" class="form-control"><?php if (isset($_GET['edit'])) echo $loadData[0][2]; ?></textarea>
					</div>

					<div class="form-group">
						<label for="contato">Localização</label>
						<div class="form-inline">
							<select name="estado" class="form-control">
								<?php
									$state = '';
									if (isset($_GET['edit'])) $state = strtolower($loadData[0][3]);
									opt_select_estado($state);
								?>
							</select>
							<input name="cidade" type="text" class="form-control" placeholder="Digite sua Cidade" value="<?php if (isset($_GET['edit'])) echo $loadData[0][4]; ?>"/>
						</div>
					</div>

					<div class="form-group">
						<label for="categorias">Categorias</label>
						<select name="categoria" id='optgroup' multiple='multiple' value="<?php if (isset($data)) echo $data['author']; ?>">
							<?php
								opt_select_servico();
							?>
						</select>
					</div>

					<div class="form-group">
						<label for="categorias">Tags</label>
						<input type="text" class="form-control" name="tags" value="<?php if (isset($_GET['edit'])) echo $loadData[0][5]; ?>"/>
					</div>

					<div class="form-group">
						<label for="contato">Contatos</label>
						<div class="input-group">
							<div class="input-group-addon"><svg-icon class="glyph-icon"><src href="static/sprite/sprite.svg#si-glyph-call"/></svg></div>
							<textarea name="telefone" id="contato" rows="3" class="form-control" value="<?php if (isset($data)) echo $data['author']; ?>"></textarea>
						</div>
						<div class="input-group">
							<div class="input-group-addon"><svg-icon class="glyph-icon"><src href="static/sprite/sprite.svg#si-glyph-mail"/></svg></div>
							<input name="email" id="email" type="text" class="form-control" value="<?php if (isset($data)) echo $data['author']; ?>"/>
						</div>
					</div>

					<div class="form-group">
						<button class="btn  btn-primary" type="submit"><?php if (isset($_GET['edit'])) echo 'Salvar serviço '.$loadData[0][0]; else echo 'Cadastrar Serviço'; ?></button>
					</div>

				</form>
			</div>
		</section>

<?php
	c_footer();
?>

	<script>
		function submitForm(){
			var form = document.getElementById('form_cadServico');
			xhr = new XMLHttpRequest();

			xhr.open('POST', 'static/php/class-valida-cad-serv.php');
			xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			xhr.onload = function() {
				if (xhr.status === 200) {
					alert(xhr.responseText);
					if (xhr.responseText == "Serviço cadastrado com sucesso.") location.reload();
				}
				else if (xhr.status !== 200) {
					alert('Request failed.  Returned status of ' + xhr.status);
				}
			};
			//xhr.send(encodeURI(new URLSearchParams(new FormData(form)).toString()));
			xhr.send(new URLSearchParams(new FormData(form)).toString());

		}
		
		function editForm(){
			var form = document.getElementById('form_cadServico');
			xhr = new XMLHttpRequest();

			xhr.open('POST', 'static/php/class-valida-edit-serv.php?edit=<?php echo $_GET['edit'];?>');
			xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			xhr.onload = function() {
				if (xhr.status === 200) {
					alert(xhr.responseText);
					if (xhr.responseText == "Serviço salvo com sucesso.") location.reload();
				}
				else if (xhr.status !== 200) {
					alert('Request failed.  Returned status of ' + xhr.status);
				}
			};
			xhr.send(new URLSearchParams(new FormData(form)).toString());

		}
	</script>


</body>
</html>
