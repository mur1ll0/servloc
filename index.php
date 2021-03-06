<?php
	require 'comum.php';

	session_start();

	c_header();
?>


<div class="aw-layout-page">
	<section>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
			<div class="item active">
			  <img src="http://www.jwf.com.br/thumb.php?w=1920&h=550&src=images/1496848584.jpg" alt="...">
			  <div class="carousel-caption">
			  </div>
			</div>
			<div class="item">
			  <img src="http://www.ebi.pt/wp-content/uploads/2014/09/imagem_seccao_jardinagem.png" alt="...">
			  <div class="carousel-caption">
			  </div>
			</div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		  </a>
		</div> <!-- Carousel -->
	</section>
	<section class="search-sec">
		<!-- Buscador -->
		<div class="container">
			<form method="POST" target="">

				<!-- String -->
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-9 col-md-3 col-sm-12 p-0 search-box">

								<div class="container-fluid">
									<input name="searchString" type="text" class="search-container form-control" placeholder="Pesquise por nome, descrição, tags"/>
								</div>

							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 p-0 search-box">
								<button name="search" type="submit" class="btn btn-danger wrn-btn search-button">Search</button>
								<button name="advanced" id="advanced" type="button" class="btn btn-danger wrn-btn search-button">Busca Avançada</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Avancada -->
				<div id="advancedDiv" class="hideAdvanced">
					<div class="row col-lg-12">
						<div class="col-lg-3 col-md-3 col-sm-12 p-0 search-box">
							<select name="estado" class="form-control">
								<?php
									opt_select_estado('');
								?>
							</select>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 p-0 search-box">
							<input name="cidade" type="text" class="form-control search-slt" placeholder="Cidade">
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 p-0 search-box">
							<select name="categoria" class="form-control search-slt" id="exampleFormControlSelect1">
								<?php
									opt_select_servico('');
								?>
							</select>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!-- Resultados -->
		<section>
			<div class="container">
				<div class="icon-list">
						<?php
						if (isset($_POST['search'])){

							if($_POST['estado'] == '*') $_POST['estado'] = '';

							//Comando para busca por trecho avançada do Carlão
							$_POST['searchString'] = strtolower(str_ireplace(' ', '|', $_POST['searchString']));

							$sqlquery = "SELECT
							*
							FROM
							servicos
							WHERE
							(
									lower(nome) REGEXP '".$_POST['searchString']."'
									OR lower(descricao) REGEXP '".$_POST['searchString']."'
									or lower(tags) REGEXP '".$_POST['searchString']."'
							)
							AND estado LIKE '%".$_POST['estado']."%'
							AND cidade LIKE '%".$_POST['cidade']."%'
							AND ativo = 1;"; //AND categoria='". $_POST['categoria']."'

							$resultado = query($sqlquery);

							foreach ($resultado as $row){
								echo "<div class='search-icons col-lg-3 col-md-3 col-sm-12 p-0'>";
									echo "<a href='/servloc/visualizar-servico.php?codigo=".$row[0]."'>";
										echo "<button type='button' class='btn btn-danger wrn-btn visualizar'>Visualizar</button>";
									echo '</a>';
									echo "<p class='titulo'>".$row[1]."</p>";
									echo "<p class='not-titulo'>".$row[2]."</p>";
									echo "<p class='not-titulo'>".$row[3]."</p>";
									echo "<p class='not-titulo'>".$row[4]."</p>";
									echo "<p class='not-titulo'>".$row[6]."</p>";
								echo "</div>";
							}
						}
						?>

				</div>
			</div>
		</section>
	</div>


<?php
	c_footer();
?>

	<script>

		$('#advanced').click(function(){
			if($('#advancedDiv').hasClass('hideAdvanced')){
				$('#advancedDiv').removeClass('hideAdvanced');
				$('#advancedDiv').addClass('showAdvanced');
			}
			else{
				$('#advancedDiv').removeClass('showAdvanced');
				$('#advancedDiv').addClass('hideAdvanced');
			}
		});
	</script>

</body>
</html>
