<?php
/*
###########################################################
#                   --VISUALIZAR SERVIÇOS--               #
#                                                         #
#                Autor: Murillo André Maleski             #
#                           SERVLOC                       #
###########################################################
*/?>

<?php
	require 'comum.php';

	session_start();

	c_header();

	$data = query("SELECT * from servicos where codigo = ".$_GET['codigo'].";");
?>

	<div class="aw-layout-page">

		<section class="aw-layout-content js-content">
			<div class="container">

				<div class="page-header">
					<div class="container-fluid">
						<?php
							echo '<h1>'.$data[0][1].'</h1>';
						?>
					</div>
				</div>

				<div class="container-fluid">
					<?php
						echo '<h2>'.$data[0][2].'</h2>';
					?>
				</div>

				<div class="container-fluid">
					<?php
						echo '<h3>Cidade: '.$data[0][4].'</h3>';
						echo '<h3>Estado: '.$data[0][3].'</h3>';
					?>
					<h4>
					<label for="contato">Contatos</label>
					<div class="input-group">
						<div class="input-group-addon">
							<svg-icon class="glyph-icon">
								<src href="static/sprite/sprite.svg#si-glyph-call"/>
							</svg>
						</div>
						<textarea name="telefone" id="contato" rows="3" class="form-control" disabled value=""></textarea>
					</div>
					<div class="input-group">
						<div class="input-group-addon">
							<svg-icon class="glyph-icon">
								<src href="static/sprite/sprite.svg#si-glyph-mail"/>
							</svg>
						</div>
						<input name="email" id="email" type="text" class="form-control" disabled value="<?php echo 'nada ainda' ?>"/>
					</div>
				</h4>
				</div>
			</div>
		</section>

<?php
	c_footer();
?>

	<script>

	</script>


</body>
</html>
