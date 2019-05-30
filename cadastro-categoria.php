<?php
/*
###########################################################
#                     --CADASTRO SERVIÇOS--               #
#                                                         #
#                Autor: Murillo André Maleski             #
#                           SERVLOC                       #
###########################################################
*/?>

<?php
	require 'comum.php';

	session_start();

	c_header();

	$data = $_POST[0];
?>

	<div class="aw-layout-page">

		<section class="aw-layout-content  js-content">
			<div class="page-header">
				<div class="container-fluid">
					<h1>
						Cadastro de categorias
					</h1>
				</div>
			</div>

			<div class="container-fluid">
				<form onsubmit="submitForm();return false;" id="form_cadServico" method="POST" class="form-vertical js-form-loading" target="">

					<div class="form-group">
						<label for="nome">Nome</label>
						<input name="nome" type="text" class="form-control" value="<?php if (isset($data)) echo $data['author']; ?>"/>
					</div>
					<div class="form-group">
						<button class="btn  btn-primary" type="submit">Cadastrar Categoria</button>
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
				}
				else if (xhr.status !== 200) {
					alert('Request failed.  Returned status of ' + xhr.status);
				}
			};
			//xhr.send(encodeURI(new URLSearchParams(new FormData(form)).toString()));
			xhr.send(new URLSearchParams(new FormData(form)).toString());

		}
	// function submitForm(){
	// 	$.ajax({
	// 		type: "POST",
	// 		url: 'static/php/forms.php',
	// 		data: $('#form_cadServico').serialize(),
	// 		success: function(response){
	// 			//$('#Modal .modal-header .modal-title').html("Resultado em POST");
	// 			//$('#Modal .modal-body').html(response);
	// 		}
	// 	});
	// }
	</script>


</body>
</html>
