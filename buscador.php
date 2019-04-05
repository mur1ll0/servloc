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
	<!-- Buscador -->
	<section class="search-sec">
		<div class="container">
			<form action="#" method="post" novalidate="novalidate">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-12 p-0 search-box">
								<select name="estado" class="form-control">
									<?php
										opt_select_estado();
									?>
								</select>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 p-0 search-box">
								<input type="text" class="form-control search-slt" placeholder="Cidade">
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 p-0 search-box">
								<select class="form-control search-slt" id="exampleFormControlSelect1">
									<?php
										opt_select_servico();
									?>
								</select>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 p-0 search-box">
								<button type="button" class="btn btn-danger wrn-btn">Search</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
</div>


<?php
	c_footer();
?>

</body>
</html>