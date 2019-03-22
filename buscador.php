

<?php
	require 'comum.php';
	
	session_start();
	
	c_header_sideless();
?>


<div class="aw-layout-page">
	<section>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>
		 
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
			<div class="item active">
			  <img src="http://placehold.it/1200x315" alt="...">
			  <div class="carousel-caption">
				<h3>Caption Text</h3>
			  </div>
			</div>
			<div class="item">
			  <img src="http://placehold.it/1200x315" alt="...">
			  <div class="carousel-caption">
				<h3>Caption Text</h3>
			  </div>
			</div>
			<div class="item">
			  <img src="http://placehold.it/1200x315" alt="...">
			  <div class="carousel-caption">
				<h3>Caption Text</h3>
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
		<div class="container">
			<form action="#" method="post" novalidate="novalidate">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-12 p-0">
								<input type="text" class="form-control search-slt" placeholder="Enter Pickup City">
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 p-0">
								<input type="text" class="form-control search-slt" placeholder="Enter Drop City">
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 p-0">
								<select class="form-control search-slt" id="exampleFormControlSelect1">
									<option>Select Vehicle</option>
									<option>Example one</option>
									<option>Example one</option>
									<option>Example one</option>
									<option>Example one</option>
									<option>Example one</option>
									<option>Example one</option>
								</select>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 p-0">
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
	c_footer_sideless();
?>